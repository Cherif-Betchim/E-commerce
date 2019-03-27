@extends('layout.layout')

@section('title','Accueil')

@section('content')
    <div class="title m-b-md">
        <h1>Mon compte</h1>
    </div>

    <div class="my-data">
        <p>
            Informations relatives à votre compte
        </p>
        <div class="view-data">
            <div class="view-civilite">
                <p>
                    Nom :
                </p>
                <p>
                    Prénom :
                </p>
                <p>
                   Mes adresses :
                </p>
                <p>
                    Code postal :
                </p>
                <p>
                    Pays :
                </p>
                <br>

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
