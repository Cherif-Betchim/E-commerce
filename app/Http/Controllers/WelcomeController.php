<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class WelcomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $categories = Category::all();

        $latestProducts = Product::all()
            ->sortBy('created_at')
            ->take(-3);

        return view('welcome', [
            'latestProducts' => $latestProducts,
            'categories' => $categories
        ]);
    }
}