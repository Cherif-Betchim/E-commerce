<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;

class CartController extends Controller
{
    public function index()
    {
        if (Session::has('cart')){
            return view('cartIndex');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cartIndex', ['products' => $cart->items, 'totalPrice =>$cart->totalPrice']);
    }
}
