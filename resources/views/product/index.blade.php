@extends('layout.layout')

@section('title','Nos produits')

@section('content')

    <div class="container productIndex">
        <aside>
            <p>
                <a href="{{ route('frontProductIndex', ['sort' => 'name']) }}" class="btn btn-secondary">Tri par nom</a>
            </p>
            <p>
                <a href="{{ route('frontProductIndex', ['sort' => 'price']) }}" class="btn btn-secondary">Tri par prix croissant</a>
            </p>
            <p>
                <a href="{{ route('frontProductIndex') }}">Ne pas trier</a>
            </p>
        </aside>

        <div>
            @foreach ($products as $product)
                <article>
                    <div>
                        <img src="{{ asset('img/products/' . $product->id ) }}.jpg" alt="{{ $product->name }}"/>
                    </div>
                    <div>
                        <h3>
                            <a href="{{ route('frontProductShow', ['product' => $product]) }}">{{ $product->name }}</a>
                        </h3>
                        <p>
                            {{ $product->description }}
                        </p>
                        <div>
                            {{ $product->price / 100 }} €
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@endsection