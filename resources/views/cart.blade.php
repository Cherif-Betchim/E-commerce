@extends('layout.layout')

@section('title', 'Panier')

@section('content')
    <div class="container">
        @if(Session::has('cart'))

            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <ul class="list-group">

                        @foreach($products as $product)

                            <li class="list-group-item">
                                <span class="badge">{{ $product['qty'] }}</span>
                                <strong>{{ $product['item']['name'] }}</strong>
                                <span class="label label-succes">{{ $product['price'] /100 }}€</span>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Quantité
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{route('cartAddByOne', ['id'=> $product['item']['id'] ] ) }}">Ajouter 1 article</a>
                                        <a class="dropdown-item" href="{{route('cartReduceByOne', ['id'=> $product['item']['id'] ] ) }}">Supprimer 1 article</a>
                                        <a class="dropdown-item" href="{{route('cartRemoveItem', ['id'=> $product['item']['id'] ] ) }}">Supprimer tous les articles</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>

                </div>

            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <strong>Total :{{ $totalPrice /100}} €</strong>

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <a href="{{ route('checkoutIndex') }}" class="btn"> Payer</a>

                </div>
            </div>

        @else

            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <h2> Aucun article dans le panier</h2>

                </div>
            </div>

        @endif
    </div>


@endsection