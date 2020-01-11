@extends('layout.layout')

@section('title','Checkout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h1>Checkout</h1>
                <h4>Votre total : {{$total/100}} €</h4>
                <form action="{{route('orderStore') }}" method="post" id="checkout-form">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="address">Adresse</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                        </div>
                        <hr>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="card-name">Nom du titulaire</label>
                                <input type="text" id="card-name" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="card-number">Numeros de la carte</label>
                                <input type="text" id="card-number" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="card-expiry-month">Mois d'expiration</label>
                                        <input type="text" id="card-expiry-month" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="card-expiry-year">Année d'expiration</label>
                                        <input type="text" id="card-expiry-year" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="card-cvc">Cryptogramme</label>
                                <input type="text" id="card-cvc" class="form-control">
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="btn">Payer</button>
                </form>
            </div>
        </div>
    </div>





@endsection


