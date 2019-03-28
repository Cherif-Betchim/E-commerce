@extends('layout.layout')

@section('title')
    Détails de la commandes {{ $order->id }}
@endsection

@section('content')
    <div class="orderShow">
        <h1 class="title-2">Détails de la commande {{ $order->id }}</h1>
        <div class="container">
            <p class="col-7 orderTrue">
                {{ Auth::user()->first_name }} {{ Auth::user()->name }}, cette commande passée le {{ Carbon\Carbon::parse($order->created_at)->format('d F Y') }} a été livrée à l'adresse suivante :
                <span class="color">({{ $address->address_name }})</span> {{ $address->first_name }} {{ $address->last_name }}, {{ $address->address }}, {{ $address->postcode }} {{ $address->city }}
            </p>
            <table class="table">
                <thead>
                <tr>
                    <th class="text-justify">Nom du produit</th>
                    <th></th>
                    <th></th>
                    <th>Prix unitaire</th>
                    <th>Prix total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                    <tr>
                        <td class="text-justify">{{ $product->name }}</td>
                        <td>x</td>
                        <td>{{ $qty = $product->command_line->quantity }}</td>
                        <td>{{ $price = $product->price / 100 }}€</td>
                        <td class="color">{{ $price * $qty }}€</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4"></td>
                    <td class="bold color">
                        {{ $order->total_price/100 }}€
                    </td>
                </tr>
                </tbody>
            </table>
            <a href="{{route('orderIndex')}}">Retour à l'historique des commandes</a>
        </div>
    </div>
@endsection