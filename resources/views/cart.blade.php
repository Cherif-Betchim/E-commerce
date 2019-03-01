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
        @foreach($chosenArticles as $article)
            <div class="cartProductList">
                <div class="cartProduct">
                    <img src="{{asset($article['img'])}}">
                </div>
                <div class="cartDesc">
                    <h4>
                        <a href="/products/{{$article['id']}}">{{$article['name']}}</a>
                    </h4>
                    <p>{{$article['description']}}</p>
                </div>
                <div class="cartAvail {{$article['availability']}}">
                    <i class="far fa-check-circle available"></i>
                    <i class="far fa-times-circle notavailable"></i>
                </div>
                <div class="cartPrice">{{$article['price']}}€</div>
                <div class="cartQty">
                    <input type="number" value="{{$article['quantity']}}">
                </div>
                <div class="cartDelete">
                    <i class="far fa-trash-alt"></i>
                </div>
                <div class="cartTotal">
                    <strong>{{$article['price']*$article['quantity']}}€</strong>
                </div>
            </div>
        @endforeach
    </div>

    <div class="cartValidation">
        <div>
            <label for="promo">Code promo : </label><input type="text" id="promo">
        </div>
        <div>
            <strong>Total de la commande : {{$totalPrice}}€</strong>
        </div>
        <div>
            <button type="submit">Valider le panier</button>
        </div>
    </div>

    <div class="cartFooter">
        <div>
            <a href="/products">Continuer mes achats</a>
        </div>
        <div>
            <a href="">Sauvegarder mon panier</a>
        </div>
    </div>

@endsection