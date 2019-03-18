@extends('layout.layout')

@section('title','Accueil')

@section('content')
    <div class="welcome">
        <div class="container-fluid">
            <div class="row">
                <div class="login col-lg-4">
                    <div class="container">
                        <p>
                            Pour optimiser votre shopping, commencez par vous connecter ou vous créer un compte.
                        </p>
                        <a href="" class="btn">
                            Se Connecter
                        </a>
                        <a href="" class="btn">
                            Créer un compte
                        </a>
                    </div>
                </div>
                <div class="hello col-lg-8">
                    <h1>Bienvenue sur notre <span class="logo-color">ILOT-3</span> !</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
