@extends('layout.layout')

@section('title','Accueil')

@section('cssperso')
    <link rel="stylesheet" href="{{ asset('css/tommy.css') }}">
@endsection

@section('content')
    <div class="title m-b-md">
        <h1>Mon compte</h1>
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
                <h3>Votre civilité : </h3>
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
                <br>
                <div class="container-btn">
                    <a href="" class="btn">Modifier</a>
                </div>
            </div>
            <div class="view-login">
                <h3>Vos identifiants de connexion : </h3>
                <p>
                    Nom utilisateur :
                </p>
                <p>
                    Mot de passe :
                </p>
                <br>
                <div class="container-btn">
                    <a href="" class="btn">Modifier</a>
                </div>
            </div>
        </div>
        <h2>Vos moyens de paiements</h2>
        <div class="payment">
            <div class="view-payment">
                <div class="registered">
                    <h3>Cartes enregistrées :</h3>
                    {{-- View CB --}}
                </div>
            </div>
            <div class="add-payment">
                <h3>Ajouter une carte :</h3>
                <form action="my-account.blade.php" method="">
                    <div class="num-and-owner">
                        <div class="num-cart">
                            <label for="">Numéro de carte :</label>
                            <input type="text">
                        </div>
                        <div class="owner-cart">
                            <label for="">Nom du propriétaire :</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="expiration-and-security">
                        <div class="month-cart">
                            <label for="">Mois d'expiration :</label>
                            <input type="text">
                        </div>
                        <div class="year-cart">
                            <label for="">Année d'expiration :</label>
                            <input type="text">
                        </div>
                        <div class="security-cart">
                            <label for="">Code de sécurité :</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="container-btn">
                        <button class="btn">Enregister</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="orders">
            <h2>Vos commandes</h2>
            <h3>Dernière commande</h3>
            <div class="recent-orders">
                {{-- Affichage commande récente --}}
                <div class="orders-img">
                    <p>
                        Image produit
                    </p>
                </div>
                <div class="orders-ref">
                    <p>
                        Référence de la commande :
                    </p>
                    <p>
                        Prix commande :
                    </p>
                </div>
                <div class="orders-product-desc">
                    <h3 class="orders-title">
                        Titre Produit
                    </h3>
                    <p class="orders-desc">
                        Description produit
                    </p>
                    <p class="orders-price">
                        Prix produit
                    </p>
                </div>
            </div>
            <h3>Toutes vos commandes</h3>
            <div class="all-orders">
                {{-- Affichage de toutes les commandes passées --}}
                <div class="orders-ref">
                        <p>
                            Référence de la commande :
                        </p>
                </div>
                <div class="orders-price">
                    <p>
                        Prix commande :
                    </p>
                </div>
                <div class="orders-product-desc">
                    <h3 class="orders-title">
                        Titre Produit
                    </h3>
                    <p class="orders-desc">
                        Description produit
                    </p>
                    <p class="orders-price">
                        Prix produit
                    </p>
                </div>
            </div>
            <div class="return-product">
                <a href="" class="btn">Imprimer le bon de retour</a>
            </div>
        </div>
    </div>
@endsection
