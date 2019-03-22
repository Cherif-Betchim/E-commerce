<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class WelcomeController extends Controller
{
    public function index()
    {
        $latestProducts = Product::all()
            ->sortBy('created_at')
            ->take(-3);

        return view('welcome', ['latestProducts' => $latestProducts]);
    }
}