@extends('admin.layout')

@section('title', 'Ajouter un produit')

@section('cssperso')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chloe.css') }}">
@endsection

@section('content')
    <div class="container productCreate">
        @if ( Session::has('flash_message') )
            <aside>
                <div class="alert {{ Session::get('flash_type') }}">
                    {{ Session::get('flash_message') }}
                </div>
            </aside>
        @endif

        <form action="{{ route('productIndex') }}" method="POST">
            {{ csrf_field() }}
            <fieldset class="form-group">
                <label for="name">Nom : </label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nom du produit">
            </fieldset>
            <fieldset class="form-group">
                <label for="description">Description : </label>
                <textarea class="form-control" name="description" id="description" placeholder="Description du produit"></textarea>
            </fieldset>
            <fieldset class="form-group">
                <label for="price">Prix : </label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="priceHelp">
                <small id="priceHelp" class="form-text text-muted">Entrez le prix en centimes. (Exemple : pour 10€, entrez 1000.)</small>
            </fieldset>
            <fieldset class="form-group">
                <label for="weight">Poids : </label>
                <input type="number" class="form-control" name="weight" id="weight" aria-describedby="weightHelp">
                <small id="weightHelp" class="text-muted">Entrez le poids en grammes. (Exemple : pour 1kg, entrez 1000.)</small>
            </fieldset>
            <fieldset class="form-group">
                <label for="stock">Quantité en stock : </label>
                <input type="number" class="form-control" name="stock" id="stock">
            </fieldset>
            <fieldset class="form-group">
                <label for="category">Catégorie : </label>
                <select multiple class="form-control" name="category" id="category">
                    <option value="1">Tanks</option>
                    <option value="2">Pants</option>
                    <option value="3">Sports Bras</option>
                    <option value="5">Sweaters</option>
                    <option value="6">Joggers</option>
                    <option value="7">Socks</option>
                </select>
            </fieldset>
            <button type="submit" class="btn btn-primary">Ajouter le produit</button>
        </form>
    </div>
@endsection