@extends('admin.layout')

@section('title', 'Éditer un produit')

@section('cssperso')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chloe.css') }}">
@endsection

@section('content')
    <div class="container productCreate">
        <form action="{{ route('productIndex') }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <input type="hidden" name="id" value="{{ $product->id }}">
            <fieldset class="form-group">
                <label for="name">Nom : </label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
            </fieldset>
            <fieldset class="form-group">
                <label for="description">Description : </label>
                <textarea class="form-control" name="description" id="description">{{ $product->description }}</textarea>
            </fieldset>
            <fieldset class="form-group">
                <label for="price">Prix : </label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="priceHelp" value="{{ $product->price }}">
                <small id="priceHelp" class="form-text text-muted">Entrez le prix en centimes. (Exemple : pour 10€, entrez 1000.)</small>
            </fieldset>
            <fieldset class="form-group">
                <label for="weight">Poids : </label>
                <input type="number" class="form-control" name="weight" id="weight" aria-describedby="weightHelp" value="{{ $product->weight }}">
                <small id="weightHelp" class="text-muted">Entrez le poids en grammes. (Exemple : pour 1kg, entrez 1000.)</small>
            </fieldset>
            <fieldset class="form-group">
                <label for="stock">Quantité en stock : </label>
                <input type="number" class="form-control" name="stock" id="stock" value="{{ $product->stock }}">
            </fieldset>
            <fieldset class="form-group">
                <label for="category_id">Catégorie : </label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if($product->category_id === $category->id) selected @endif>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </fieldset>
            <button type="submit" class="btn btn-primary">Mettre à jour le produit</button>
        </form>
    </div>
@endsection