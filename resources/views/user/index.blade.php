@extends('layout.layout')

@section('title','Mon compte')

@section('content')

<div class="container">
    <div class="row">
        Welcome, {{Auth::user()->first_name }}!
        <ul>
            <h4>Gestion du compte:</h4>
            <a href="{{route('userProfile')}}"><li>Mon profil</li></a>
            <a href="{{route('userAddresses')}}"><li>Mes adresses</li></a>
            <a href="{{route('userOrders')}}"><li>Mes achats</li></a>
        </ul>
    </div>
</div>


@endsection