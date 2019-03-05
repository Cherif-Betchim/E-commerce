@extends('layout.layout')

@section('title','Nos produits')

@section('cssperso')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chloe.css') }}">
@endsection

@section('content')

    <div class="container">
        <h1>Breath Yoga (or don't breath at all)</h1>
        <form action="basket.php" method="post">
            <div class="row">

                @foreach ($products as $key => $product)

                    <article class="col-6 row">
                        <div class="col-4">
                            <img src="{{ asset('img/chloeproducts/') . '/' . $key }}.jpg"/>
                        </div>
                        <div class="col-8">
                            <h3>{{ $product->name }}</h3>
                            <p class="description">
                                {{ $product->description }}
                            </p>
                            <p>
                                {{ $product->price / 100 }} €
                            </p>
                        </div>
                        <p class="col-12 addToBasket">
                            <label for="prod{{ $key }}">Ajouter au panier </label>
                            <input type="checkbox" name="chosenProducts[]" id="prod{{ $key }}" value="{{ $key }}">
                            <!-- $key permet d'affecter à la value de la checkbox l'index de l'article affiché.
                            La checkbox du premier article affiché aura donc comme value 0. -->
                        </p>
                    </article>

                @endforeach

            </div>
            <div>
                <p>
                    <button type="submit" class="productsForm">Voir mon panier</button>
                </p>
            </div>
        </form>
    </div>
    @endsection