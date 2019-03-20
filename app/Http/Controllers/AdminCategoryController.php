<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;

        $request->validate([
            'name' => ['required', 'min:3', 'max:40']
        ]);

        $category->name = $request->input('name');
        $category->slug = Str::slug($category->name, '-');

        $category->save();

        return redirect(route('categoryCreate'))
            ->with('flash_message', 'La catégorie ' . $category['name'] . ' a bien été ajoutée à la base de données !')
            ->with('flash_type', 'alert-success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:40'],
        ]);

        $id = $request->input('id');
        $category = Category::find($id);

        $category->name = $request->input('name');
        $category->slug = Str::slug($category->name, '-');

        $category->save();

        return redirect(route('categoryIndex'))
            ->with('flash_message', 'La  Catégorie (' . $category->name . ') a bien été modifié dans la base de données !')
            ->with('flash_type', 'alert-success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = category::find($id);

        $categories->delete();

        return redirect(route('categoryIndex'))
            ->with('flash_message', 'La catégorie ' . $categories['name'] . ' a bien été ajoutée à la base de données !')
            ->with('flash_type', 'alert-success');
    }
}
