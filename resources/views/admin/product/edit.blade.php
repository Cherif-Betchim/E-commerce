@extends('admin.layout.layout')

@section('title', 'Éditer un produit')

@section('content')
    <div class="container productCreate">
        <aside>
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </aside>
        <form action="{{ route('productIndex') }}" method="POST">
            @csrf
            @method('put')

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