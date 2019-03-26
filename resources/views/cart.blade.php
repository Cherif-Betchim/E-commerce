@extends('layout.layout')

@section('title', 'Panier')

@section('content')
    <div class="orderConfirm">
        <h1 class="title-2">Votre Panier</h1>
        <div class="container">
            @if(Session::has('cart'))
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nom du produit</th>
                        <th>Quantité</th>
                        <th></th>
                        <th></th>
                        <th class="price">Prix unitaire</th>
                        <th class="price">Prix total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product['item']['name'] }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Quantité
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{route('cartAddByOne', ['id'=> $product['item']['id'] ] ) }}">Ajouter 1 article</a>
                                        <a class="dropdown-item" href="{{route('cartReduceByOne', ['id'=> $product['item']['id'] ] ) }}">Supprimer 1 article</a>
                                        <a class="dropdown-item" href="{{route('cartRemoveItem', ['id'=> $product['item']['id'] ] ) }}">Supprimer tous les articles</a>
                                    </div>
                                </div>
                            </td>
                            <td>x</td>
                            <td>{{ $product['qty'] }}</td>
                            <td class="price">{{ $product['item']['price'] / 100 }}€</td>
                            <td class="price color">{{ $product['price'] / 100 }}€</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4"></td>
                        <td class="totalcart price bold color">
                            Total Commande : {{ $totalPrice/100 }}€
                        </td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{ route('index') }}" class="home-btn">Continuer vos achats</a>
                <a href="{{ route('checkoutIndex') }}" class="btn btn-success"> Payer</a>
            @else
                <p class="col-7">
                    Aucun article dans le panier.
                </p>
                <a href="{{ route('index') }}" class="home-btn">Continuer vos achats</a>
            @endif
        </div>
    </div>
@endsection