@extends('admin.layout.layout')

@section('title')
    Commande {{ $order->id }}
@endsection

@section('content')
    <h1 class="title-2">Commande {{ $order->id }}</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Nom du produit</th>
            <th></th>
            <th></th>
            <th class="price">Prix unitaire</th>
            <th class="price">Prix total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>x</td>
                <td>{{ $qty = $product->command_line->quantity }}</td>
                <td class="price">{{ $price = $product->price / 100 }}€</td>
                <td class="price color">{{ $price * $qty }}€</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="4"></td>
            <td class="price bold color">
                {{ $order->total_price/100 }}€
            </td>
        </tr>
        </tbody>
    </table>
@endsection