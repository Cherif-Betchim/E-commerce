<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show()
    {

    $pAllProducts =[
        [
            'img' => 'https://cdn1.papadrinks.com/1580-medium_default/xchartreuse-jaune.jpg.pagespeed.ic.tUcYRcePXR.jpg',
            'name' => 'Chartreuse Jaune',
            'price' => '10'
        ],
        [
            'img' => 'https://www.vinatis.com/24933-detail_default/chartreuse-verte-.png',
            'name' => 'Chartreuse Verte',
            'price' => '20'
        ],
        [
            'img' => 'https://www.laboutiquedesabbayes.com/224-large_default/elixir-vegetal-chartreuse.jpg',
            'name' => 'Elixir de Chatreuse',
            'price' => '50'
        ]
    ];





    return view('products',[
        'allProducts' => $pAllProducts
    ]);
    }
}


