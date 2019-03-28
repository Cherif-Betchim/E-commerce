@extends('layout.layout')

@section('title', 'Confirmation de commande')

@section('content')
        <div class="orderConfirm">
            <h1 class="title-2">Confirmation de commande</h1>
            <div class="container">
                @if($order)
                    <p class="col-7 orderTrue">
                        Merci {{ Auth::user()->first_name }} {{ Auth::user()->name }} pour votre commande. Veuillez-trouver ci-dessous un récapitulatif de vos achats.
                    </p>
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
                @else
                    <p class="col-7">
                        Vous n'avez aucune commande en cours.
                    </p>
                @endif
                <a href="{{ route('index') }}" class="home-btn">Retour à l'accueil</a>
            </div>
        </div>
@endsection