@extends('layouts.layout')

@section('title','Accueil')

@section('content')
    <div class="title m-b-md">
        Mon compte
    </div>

    <div class="my-data">
        <p>
            Informations relatives à votre compte
            <span class="arrow">
                <img src="" alt="">
            </span>
        </p>
        <div class="view-data">
            <div class="view-civilite">
                <h2>Votre civilité : </h2>
                <p>
                    Nom :
                </p>
                <p>
                    Prénom :
                </p>
                <p>
                    Date de naissance :
                </p>
                <p>
                    Carnet d'adresse :
                </p>
                <p>
                    Code postal :
                </p>
                <p>
                    Pays :
                </p>
                <button>Modifier votre civilité</button>
            </div>
            <div class="view-login">
                <h2>Vos identifiants de connexion : </h2>
                <p>
                    Nom utilisateur :
                </p>
                <p>
                    Mot de passe :
                </p>
                <button>Modifier vos identifiants</button>
            </div>
        </div>
        <div class="payment">
            <h2>Vos moyens de paiements</h2>
            <div class="view-payment">
                <div class="registered">
                    <h2>Cartes enregistrées</h2>
                </div>
                <div class="add-payment">
                    <form action="my-account.blade.php" method="">
                        <label for="">Numéro de carte :</label>
                        <input type="text">

                        <label for="">Mois d'expiration :</label>
                        <input type="number">
                        <label for="">Année d'expiration :</label>
                        <input type="number">

                        <label for="">Nom du propriétaire :</label>
                        <input type="text">

                        <label for="">Code de sécurité :</label>
                        <input type="number">

                        <button>Enregister la carte</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="orders">
            <h2>Vos commandes</h2>
            <div class="recent-orders">
                {{-- Affichage commande récente --}}
            </div>
            <div class="all-orders">
                {{-- Affichage de toutes les commandes passées --}}
            </div>
            <div class="return-product">
                {{-- Imprimer un bon de retour --}}
            </div>
        </div>

    </div>

    <div class="links">
        <a href="https://laravel.com/docs">Docs</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://blog.laravel.com">Blog</a>
        <a href="https://nova.laravel.com">Nova</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>

@endsection
