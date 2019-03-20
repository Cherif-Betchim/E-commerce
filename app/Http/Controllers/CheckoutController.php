<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;
use App\Checkout;

class CheckoutController extends Controller
{
    public function getCheckout(){
        if (!Session::has('cart')){
            return view ('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout',  ['total' => $total]);
    }
}
?>