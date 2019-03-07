@extends('admin.layout')

@section('title', 'Produits')

@section('cssperso')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chloe.css') }}">
@endsection

@section('content')
    <div class="container adminProductIndex">
        <h1>
            Liste des produits
        </h1>

        @if ( Session::has('flash_message') )
            <aside>
                <div class="alert {{ Session::get('flash_type') }}">
                    {{ Session::get('flash_message') }}
                </div>
            </aside>
        @endif

        @foreach ($products as $product)
            <div class="row">
                <h2>
                    {{ $product->name }} :
                </h2>
                <strong><a href="{{ route('productEdit', ['product' => $product]) }}">éditer</a></strong>
            </div>
        @endforeach

    </div>
@endsection