@extends('layouts.layout')

@section('title', 'Panier')

@section('content')
    <h1>Votre panier</h1>

    <h2>Récapitualif de la commande</h2>

    <div class="cartNav">
        <h3 class="selected">Récapitulatif</h3>
        <h3>Adresse</h3>
        <h3>Livraison</h3>
        <h3>Connexion</h3>
        <h3>Paiement</h3>
    </div>

    <div class="cartBody">
        <div class="cartNav">
            <div class="cartProduct">Produit</div>
            <div class="cartDesc">Description</div>
            <div class="cartAvail">Disponibilité</div>
            <div class="cartPrice">Prix unitaire</div>
            <div class="cartQty">Quantité</div>
            <div class="cartDelete"></div>
            <div class="cartTotal">Total</div>
        </div>
        <div class="cartProductList">
            <div class="cartProduct">
                <img src="{{asset('img/cart/sun.jpg')}}">
            </div>
            <div class="cartDesc">
                <h4>Soleil sans nuage</h4>
                <p>Un superbe soleil à emmener partout avec vous pour ne jamais avoir un temps tout pourri démoralisant. Attention, très lumineux. (Et très chaud.)</p>
            </div>
            <div class="cartAvail available">
                <i class="far fa-check-circle"></i>
            </div>
            <div class="cartPrice"></div>
            <div class="cartQty"></div>
            <div class="cartDelete"></div>
            <div class="cartTotal"></div>
        </div>
    </div>


@endsection