@extends('layout.layout')

@section('title','Nos produits')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <article>
            <div>
                <img src="{{ asset('img/products/' . $product->id) }}.jpg" alt="{{ $product->name }}"/>
            </div>
            <p>
                {{ $product->description }}
            </p>
            <p>
                Stock : {{ $product->stock }}
            </p>
            <p>
                {{ $product->price / 100 }} €
            </p>
            <a href="{{ route('productAddToCart', ['id' => $product->id]) }}" class="btn" role="button">Ajouter au panier</a>

        </article>
        <p>
            <a href="{{ route('frontProductIndex') }}">Retour à la liste des produits</a>
        </p>
    </div>

    <h4>Ajouter un commentaire</h4>


    <div class="comments">

        {{--Affiche les commentaires--}}
        @foreach ($product->comments as $comment)

            <article>
                {{$comment->name}}
                <br>
                {{$comment->comment}}

            </article>

        @endforeach

    </div>
    {{--Envoi les commentaires--}}
    <div class="card">
        <div class="card-block">
            <form method="POST" action="/products/{{$product->id}}/comments">

{{csrf_field()}}

                <fieldset class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom" required>
                </fieldset>
                <fieldset class="form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Votre email"required>
                </fieldset>
                <fieldset class="form-group">
                    <textarea class="form-control" name="comment" id="comment" placeholder="Votre commentaire" required></textarea>
                    <input type="hidden" name="product_id" value="{{ $product->id }}" />
                </fieldset>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ajouter commentaire</button>
            </form>
        </div>
    </div>


@endsection