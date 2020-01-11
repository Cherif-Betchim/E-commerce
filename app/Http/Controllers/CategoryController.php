<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, Request $request)
    {
        $url = '/category/' . $category->slug;

        if ($url == '/category/temporaire') {
           if (!Auth::user() || Auth::user()->is_admin == 0) {
               return redirect (route('index'));
            }
        }

        $products = $category->products;

        if (isset($_GET['sort'])) {
            if ($_GET['sort'] == 'name')
            {
                $products = $category->products->sortBy('name');
            } elseif ($_GET['sort'] == 'price') {
                $products = $category->products->sortBy('price');
            }
        }

        return view('category.show', [
            'products' => $products,
            'category' => $category,
            'url' => $url
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
