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
                                <span class="label label-succes">{{ $product['price'] }}</span>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Supprimer
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Supprimer 1 article</a>
                                        <a class="dropdown-item" href="#">Supprimer tous les articles</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>

                </div>

            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <strong>Total :{{ $totalPrice }}</strong>

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <button href="{{ route('checkoutIndex') }}" class="btn"> Payer</button>

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