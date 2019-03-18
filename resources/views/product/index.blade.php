@extends('layout.layout')

@section('title','Nos produits')

@section('cssperso')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chloe.css') }}">
@endsection

@section('content')

    <div class="container productIndex">
        <h1>Breath Yoga (or don't breath at all)</h1>

        <aside>
            <p>
                <a href="{{ route('frontProductIndex', ['sort' => 'name']) }}" class="btn btn-primary">Tri par nom</a>
            </p>
            <p>
                <a href="{{ route('frontProductIndex', ['sort' => 'price']) }}" class="btn btn-primary">Tri par prix croissant</a>
            </p>
            <p>
                <a href="{{ route('frontProductIndex') }}">Ne pas trier</a>
            </p>
        </aside>

        <form action="{{ route('frontProductCart') }}" method="post">
            <div class="row">

                @foreach ($products as $product)

                    <article class="col-6 row">
                        <div class="col-4">
                            <img src="{{ asset('img/chloeproducts/' . $product->id ) }}.jpg" alt="{{ $product->name }}"/>
                        </div>
                        <div class="col-8">
                            <h3>
                                <a href="{{ route('frontProductShow', ['product' => $product]) }}">{{ $product->name }}</a>
                            </h3>
                            <p class="description">
                                {{ $product->description }}
                            </p>
                            <div class="addToCart">
                                <div>
                                    {{ $product->price / 100 }} €
                                </div>
                                <div>
                                    <label class="" for="cart">Ajouter au panier</label>
                                    <input type="checkbox" class="" id="cart{{ $product->id }}" name="cart[]" value="{{ $product->id }}">
                                </div>
                            </div>
                        </div>
                        {{--<p class="col-12 addToBasket">--}}
                            {{--<label for="prod{{ $product->id }}">Ajouter au panier </label>--}}
                            {{--<input type="checkbox" name="chosenProducts[]" id="prod{{ $product->id }}" value="{{ $product->id }}">--}}
                            {{--<!-- $key permet d'affecter à la value de la checkbox l'index de l'article affiché.--}}
                            {{--La checkbox du premier article affiché aura donc comme value 0. -->--}}
                        {{--</p>--}}
                    </article>

                @endforeach

            </div>
            <button type="submit">Valider mon panier</button>
        </form>
    </div>
@endsection