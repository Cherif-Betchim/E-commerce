@extends('admin.layout.layout')

@section('title', 'Ajouter un produit')


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
                <label for="stock">Quantité en stock : </label>
                <input type="number" class="form-control @if ($errors->has('stock')) {{ 'is-invalid' }} @endif" name="stock" id="stock" value="{{ old('stock') }}" required>
            </fieldset>
            <fieldset class="form-group">
                <label for="category_id">Catégorie : </label>
                <select multiple class="form-control" name="category_id" id="category_id" required>

                @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </fieldset>
            <button type="submit" class="btn btn-primary">Ajouter le produit</button>
        </form>
    </div>
@endsection