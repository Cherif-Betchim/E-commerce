<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show()
    {

    $pAllProducts =[
        [
            'img' => '/img/products/jaune.png',
            'name' => 'Chartreuse Jaune',
            'price' => '10'
        ],
        [
            'img' => 'img/products/verte.png',
            'name' => 'Chartreuse Verte',
            'price' => '20'
        ],
        [
            'img' => 'img/products/elixir.png',
            'name' => 'Elixir de Chatreuse',
            'price' => '50'
        ],
        [
            'name' => 'Canard',
            'img' => 'https://images-eu.ssl-images-amazon.com/images/I/41sfz8dKX1L._AC_US218_.jpg',
            'price' => '99999'
        ]
    ];





    return view('products',[
        'allProducts' => $pAllProducts
    ]);
    }
}


