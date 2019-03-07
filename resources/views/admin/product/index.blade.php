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
                <p>
                    <a href="{{ route('productEdit', ['product' => $product]) }}" class="btn btn-warning">éditer</a>
                </p>
                <form action="{{ route('productDestroy', ['product' => $product]) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger" type="submit">supprimer</button>
                </form>
            </div>
        @endforeach

    </div>
@endsection