@extends('layout.layout')

@section('title','Mon compte')

@section('content')

    <ul class="nav nav-tabs">
        <li class="active"><a href="#profile" data-toggle="tab">Mon Profil</a> </li>
        <li><a href="#adresses" data-toggle="tab">Mes adresses</a> </li>
        <li><a href="#myorders" data-toggle="tab">Mes commandes</a> </li>
        <li><a href="#changepassword" data-toggle="tab">Changer mdp</a> </li>
    </ul>

    <div class="tab-content">
        <div id="profile" class="tab-pane fade in active">
            <form action="" method="post">
                <label>Prenom</label>
                <input type="text" name="first_name" value="{{Auth::user()->first_name}}">
                <label>Nom</label>
                <input type="text" name="last_name" value="{{Auth::user()->last_name}}">
                <label>Email</label>
                <input type="text" name="email" value="{{Auth::user()->email}} ">
                </br>
            </form>
        </div>

        <div id="adresses" class="tab-pane fade in">
            Mes adresses tab
        </div>

        <div id="myorders" class="tab-pane fade in">
            Mes commandes tab
        </div>

        <div id="changepassword" class="tab-pane fade in">
            Change mdp tab
        </div>
    </div>

@endsection