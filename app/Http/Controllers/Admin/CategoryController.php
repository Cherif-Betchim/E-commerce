<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Category;

class CategoryController extends Controller
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
        $category->name = $request->input('name');
        $category->slug = Str::slug($category->name, '-');
        $checkCategory = Category::withTrashed()->where('name', $category->name)->first();

        if ($category->name = $checkCategory->name) {
            $checkCategory->restore();
            $verb = 'restorée de';
        } else {
            $request->validate([
                'name' => ['required', 'min:3', 'max:40', 'unique:categories,name']
            ]);
            $verb = 'ajoutée à';
            $category->save();
        }

        return redirect(route('categoryCreate'))
            ->with('flash_message', 'La catégorie ' . $category['name'] . ' a bien été ' . $verb . ' la base de données !')
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
        $category = Category::find($id);

        foreach ($category->products as $product) {
            $product->category_id = 1; // on affecte la catégorie temporaire
            $product->save();
        }

        $category->delete();

        return redirect(route('categoryIndex'))
            ->with('flash_message', 'La catégorie ' . $category->name . ' a bien été supprimée de la base de données !')
            ->with('flash_type', 'alert-success');
    }
}
