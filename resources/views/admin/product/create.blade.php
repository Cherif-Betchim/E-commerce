@extends('admin.layout')

@section('title', 'Ajouter un produit')

@section('cssperso')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chloe.css') }}">
@endsection

@section('content')
    <div class="container productCreate">
        <aside>
            @if (Session::has('flash_message'))
                <div class="alert {{ Session::get('flash_type') }}">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
        </aside>

        <form action="{{ route('productIndex') }}" method="POST">
            {{ csrf_field() }}
            <fieldset class="form-group">
                <label for="name">Nom : </label>
                <input type="text" class="form-control @if ($errors->has('name')) {{ 'is-invalid' }} @endif" name="name" id="name" placeholder="Nom du produit" value="{{ old('name') }}" required>
            </fieldset>
            <fieldset class="form-group">
                <label for="description">Description : </label>
                <textarea class="form-control @if ($errors->has('description')) {{ 'is-invalid' }} @endif" name="description" id="description" placeholder="Description du produit" required>{{ old('description') }}</textarea>
            </fieldset>
            <fieldset class="form-group">
                <label for="price">Prix : </label>
                <input type="number" class="form-control @if ($errors->has('price')) {{ 'is-invalid' }} @endif" name="price" id="price" aria-describedby="priceHelp" value="{{ old('price') }}" required>
                <small id="priceHelp" class="form-text text-muted">Entrez le prix en centimes. (Exemple : pour 10€, entrez 1000.)</small>
            </fieldset>
            <fieldset class="form-group">
                <label for="weight">Poids : </label>
                <input type="number" class="form-control @if ($errors->has('weight')) {{ 'is-invalid' }} @endif" name="weight" id="weight" aria-describedby="weightHelp" value="{{ old('weight') }}" required>
                <small id="weightHelp" class="text-muted">Entrez le poids en grammes. (Exemple : pour 1kg, entrez 1000.)</small>
            </fieldset>
            <fieldset class="form-group">
                <label for="stock">Quantité en stock : </label>
                <input type="number" class="form-control @if ($errors->has('stock')) {{ 'is-invalid' }} @endif" name="stock" id="stock" value="{{ old('stock') }}" required>
            </fieldset>
            <fieldset class="form-group">
                <label for="idCategory">Catégorie : </label>
                <select multiple class="form-control" name="idCategory" id="idCategory" required>
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