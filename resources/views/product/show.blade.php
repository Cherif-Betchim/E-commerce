@extends('layout.layout')

@section('title','Nos produits')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <article>
            <div>
                <img src="{{ asset('img/products/' . $product->id) }}.jpg" alt="{{ $product->name }}"/>
            </div>
            <p>
                {{ $product->description }}
            </p>
            <p>
                Stock : {{ $product->stock }}
            </p>
            <p>
                {{ $product->price / 100 }} €
            </p>
        </article>
        <p>
            <a href="{{ route('frontProductIndex') }}">Retour à la liste des produits</a>
        </p>
    </div>
@endsection