<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function confirm(Request $request)
    {
        $order = $request->session()->get('order');
        $totalPrice = $request->session()->get('totalPrice');

        $confirmation = $order;
        $confirmationPrice = $totalPrice;

        $request->session()->forget(['order', 'totalPrice']);

        return view('order.confirm', [
            'order' => $confirmation,
            'totalPrice' => $confirmationPrice
        ]);
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
        $cart = $request->session()->get('cart');
        $products = $cart->items;

        $request->validate([
            'name' => ['required'],
            'address' => ['required', 'min:10']
        ]);

        $order = Order::create([
            'user' => $request->input('name'),
            'address' => $request->input('address')
        ]);

        foreach($products as $key => $product) {
            $order->products()->attach($key, ['quantity' => $product['qty']]);
        }

        $request->session()->put('order', $order);
        $request->session()->put('totalPrice', $cart->totalPrice);
        $request->session()->forget('cart');

        return redirect(route('orderConfirm'));
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
