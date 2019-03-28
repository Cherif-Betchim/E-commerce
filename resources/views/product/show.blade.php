@extends('layout.layout')

@section('title','Nos produits')

@section('content')
    <div class="container products">
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
            <a href="{{ route('productAddToCart', ['id' => $product->id]) }}" class="btn btn-success" role="button">Ajouter au panier</a>

        </article>
        <p>
            <a href="{{ route('frontProductIndex') }}">Retour à la liste des produits</a>
        </p>
    </div>


    <div class="card comments">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        <div class="container-comments">

            <h3>Derniers avis clients</h3>

            {{--Affiche les commentaires--}}
            @foreach ($product->comments as $comment)

                <div class="display-comments">

                    <strong>{{$comment->user->name}} {{$comment->user->first_name}} </strong>

                    <small>le {{ Carbon\Carbon::parse($comment->created_at)->format('d-m-Y') }} :</small>

                    <p>{{$comment->comment}}</p>

                </div>

            @endforeach


        </div>
        {{--Envoi les commentaires--}}

        <div class="form-comments">
            <h5>Vous aussi, laissez votre avis !</h5>
            <form method="POST" action="/products/{{$product->id}}/comments">

                {{csrf_field()}}


                <fieldset class="form-group">
                    <textarea class="form-control" name="comment" id="comment" placeholder="Votre commentaire..." required></textarea>
                    <input type="hidden" name="product_id" value="{{ $product->id }}" />
                </fieldset>

                @if (Auth::user())


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Ajouter commentaire</button>

                        @else
                            <p> Connectez-vous pour poster un message.
                                <a href="{{ route('login') }}" class="btn btn-success" role="button">Login</a>

                @endif

            </form>
        </div>
    </div>


@endsection