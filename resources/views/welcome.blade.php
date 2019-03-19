@extends('layout.layout')

@section('title','Accueil')

@section('content')
    <div class="welcome">
        <div class="overlay">
            <div class="container-fluid">
                <div class="row">
                    <div class="login col-lg-5">
                        <div class="container">
                            <h2 class="title-2">Bienvenue sur notre boutique <span class="color">ILOT-3</span></h2>

                            <p>
                                <span class="italic"> Pssssst ! Par ici !</span><br>Commencez par vous créer un compte ou vous connecter.
                            </p>
                            <a href="/" class="home-btn">
                                Se Connecter
                            </a>
                            <a href="/" class="home-btn">
                                Créer un compte
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="latest-product">
        <div class="container">
            <h2 class="title-2">Nos derniers produits</h2>
            <div class="row">
                <article class="product col-lg-4">
                    <a href="">
                        <img src="{{ asset('img/home/product.png') }}" alt="">
                    </a>
                    <h3 class="title-3">
                        Produit 1
                    </h3>
                    <p>
                            Prix : <span class="color bold">???? €</span>
                    </p>
                    <a href="" class="cart-btn">Ajouter au panier</a>
                </article>

                <article class="product col-lg-4">
                    <a href="">
                        <img src="{{ asset('img/home/product.png') }}" alt="">
                    </a>
                    <h3 class="title-3">
                        Produit 2
                    </h3>
                    <p>
                            Prix : <span class="color bold">???? €</span>
                    </p>
                    <a href="" class="cart-btn">Ajouter au panier</a>

                </article>

                <article class="product col-lg-4">
                    <a href="">
                        <img src="{{ asset('img/home/product.png') }}" alt="">
                    </a>
                    <h3 class="title-3">
                        Produit 3
                    </h3>
                    <p>
                            Prix : <span class="color bold">???? €</span>
                    </p>
                    <a href="" class="cart-btn">Ajouter au panier</a>

                </article>
            </div>
            <p class="btn-container">
                <a href="/products" class="home-btn">Plus de produits</a>
            </p>
        </div>
    </div>

    <div class="background-fixed"></div>

    <div class="product-categories">
        <div class="container-fluid">
            <h2 class="title-2">
                Shoppez par catégories
            </h2>
            <div class="row">
                <div class="category col-lg-12">
                    <li class="col-lg-3">
                        <a href="">
                            <div class="img-category">
                                <img src="{{ asset('img/home/product.png') }}" alt="Category 1">
                            </div>
                            <div class="label-category">
                                <p>Catégories 1</p>
                            </div>
                        </a>
                    </li>
                    <li class="col-lg-3">
                        <a href="">
                            <div class="img-category">
                                <img src="{{ asset('img/home/product.png') }}" alt="Category 2">
                            </div>
                            <div class="label-category">
                                <p>Catégories 2</p>
                            </div>
                        </a>
                    </li>
                    <li class="col-lg-3">
                        <a href="">
                            <div class="img-category">
                                <img src="{{ asset('img/home/product.png') }}" alt="Category 3">
                            </div>
                            <div class="label-category">
                                <p>Catégories 3</p>
                            </div>
                        </a>
                    </li>
                    <li class="col-lg-3">
                        <a href="">
                            <div class="img-category">
                                <img src="{{ asset('img/home/product.png') }}" alt="Category 4">
                            </div>
                            <div class="label-category">
                                <p>Catégories 4</p>
                            </div>
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </div>
@endsection
