@extends('layout.layout')

@section('title','Accueil')

@section('cssperso')
    <link rel="stylesheet" href="{{ asset('css/jerome.css') }}">
@endsection

@section('content')
    <div class="welcome">
    <h1>Resultat du formulaire</h1>
    </div>
    <div clas="form-results">
        <h3>firstName</h3>
        <p>valeur : <b>{{ $user['firstName'] }}</b></p>

        <h3>lastName</h3>
        <p>valeur : <b>{{ $user['lastName'] }}</b></p>

        <h3>Email</h3>
        <p>valeur : <b>{{ $user['email'] }}</b></p>

        <h3>Telephone</h3>
        <p>valeur : <b>{{ $user['phone'] }}</b></p>

        <h3>Objet</h3>
        <p>valeur : <b>{{ $user['interest'] }}</b></p>

        <h3>Message</h3>
        <p>valeur : <b>{{ $user['message'] }}</b></p>
    </div>


@endsection
