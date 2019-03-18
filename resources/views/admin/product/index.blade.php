@extends('admin.layout.layout')

@section('title', 'Produits')

@section('content')
    <div class="container adminProductIndex">
        <h1>
            Liste des produits
        </h1>

        <aside>
            {{--<div class="arrows">--}}
                {{--<a href="#top">--}}
                    {{--<i class="fas fa-arrow-up"></i>--}}
                {{--</a>--}}
                {{--<a href="#bottom">--}}
                    {{--<i class="fas fa-arrow-down"></i>--}}
                {{--</a>--}}
            {{--</div>--}}
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
                        <img src="{{ asset('/img/chloeproducts/' . $product->id) }}.jpg" />
                    </td>
                    <td>
                        {{ $product->id }}.
                    </td>
                    <td class="productName">
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
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit">supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection