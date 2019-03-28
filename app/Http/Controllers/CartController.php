<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;

class CartController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAddToCart (Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null; //une cle 'cart' presente ? on l'a recup
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('frontProductIndex');
    }

    public function getCart()
    {
        if (!Session::has('cart')){ //affiche le panier meme vide
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart); //recreer un panier assure d'avoir tjrs un panier valide par "securité" (INUTILE)
        return view('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getReduceByOne ($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart', $cart);
        return redirect()->route('cartIndex');
    }

    public function getAddByOne ($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addByOne($id);

        Session::put('cart', $cart);
        return redirect()->route('cartIndex');
    }

    public function getRemoveItem ($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        Session::put('cart', $cart);
        return redirect()->route('cartIndex');
    }


}


