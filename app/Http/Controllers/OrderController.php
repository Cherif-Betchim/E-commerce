<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;

class OrderController extends Controller
{
    public function confirm(Request $request)
    {
        $order = $request->session()->get('order');

        $confirmation = $order;

        $request->session()->forget(['order', 'totalPrice']);

        return view('order.confirm', ['order' => $confirmation]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('order.index', ['orders' => $orders]);
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
        $cart = $request->session()->get('cart');
        $products = $cart->items;

        $request->validate([
            'name' => ['required'],
            'address' => ['required', 'min:3']
        ]);

        $order = Order::create([
            'user' => $request->input('name'),
            'address' => $request->input('address'),
            'total_price' => $cart->totalPrice
        ]);

        foreach($products as $key => $product) {
            $order->products()->attach($key, ['quantity' => $product['qty']]);
        }

        $request->session()->put('order', $order);
        $request->session()->forget('cart');

        return redirect(route('orderConfirm'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('order.show');
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
