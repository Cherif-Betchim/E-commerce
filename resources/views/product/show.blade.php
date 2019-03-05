@extends('layout.layout')

@section('title','Nos produits')

@section('cssperso')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chloe.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <article class="productShow row">
            <div class="col-4">
                <img src="{{ asset('img/chloeproducts/' . $product->id) }}.jpg" alt="{{ $product->name }}"/>
            </div>
            <div class="col-6">
                <p>
                    {{ $product->description }}
                </p>
                <p>
                    Stock :
                    @if($product->stockQuantity > 0)
                        Y en a !
                    @else
                        Désolée, a pu.
                    @endif
                </p>
                <p>
                    {{ $product->price / 100 }} €
                </p>
            </div>
        </article>
        <p>
            <a href="{{ url('/products') }}">Retour à la liste des produits</a>
        </p>
    </div>
@endsection