@extends('admin.layout.layout')

@section('title', 'Produits')

@section('content')
    <div class="container">
        <h1>
            Liste des produits
        </h1>

        <aside>
            @if (Session::has('flash_message'))
                <div class="alert {{ Session::get('flash_type') }}">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
        </aside>

        <table class="table table-striped">
            <thead>
            <tr>
                <th class="hidden">image</th>
                <th>id</th>
                <th class="productName">name</th>
                <th>stock</th>
                <th class="hidden">éditer</th>
                <th class="hidden">supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        <img src="{{ asset('/img/products/' . $product->id) }}.jpg" />
                    </td>
                    <td>
                        {{ $product->id }}.
                    </td>
                    <td >
                        {{ $product->name }}
                    </td>
                    <td>
                        {{ $product->stock }}
                    </td>
                    <td>
                        <a href="{{ route('productEdit', ['product' => $product]) }}" class="btn btn-warning">éditer</a>
                    </td>
                    <td>
                        <form action="{{ route('productDestroy', ['product' => $product]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection