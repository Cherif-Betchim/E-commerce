@extends('layout.layout')

@section('title','Mon compte')

@section('content')

    <div class="content">
        <div class=""row>
            <label>Nom :</label> {{Auth::user()->name}}
            <br>
            <label>Prenom :</label> {{Auth::user()->first_name}}
            <br>
            <label>Email :</label> {{Auth::user()->email}}
        </div>
    </div>

    <a href="{{route('userIndex')}}">Retour au menu </a>


@endsection