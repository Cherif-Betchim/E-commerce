<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select('id', 'name')->get();

        return view('admin.product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->stockQuantity = $request->input('stock');
        $product->idCategory = $request->input('category');

        $product->save();

        return redirect(route('productCreate'))
            ->with('flash_message', 'Le produit (' . $product->name . ') a bien été ajouté à la base de données !')
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
    public function edit($id)
    {
        $product = Product::all()->find($id);

        return view('admin.product.edit', ['product' => $product]);
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
        $id = $request->input('id');

        $product = Product::all()->find($id);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->save();

        return redirect(route('productIndex'))
            ->with('flash_message', 'Le produit (' . $product->name . ') a bien été modifié dans la base de données !')
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
        $product = Product::all()->find($id);

        $product->delete();

        return redirect(route('productIndex'))
            ->with('flash_message', 'Le produit (' . $product->name . ') a bien été supprimé de la base de données !')
            ->with('flash_type', 'alert-success');
    }
}
