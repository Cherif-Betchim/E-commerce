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
                @foreach($latestProducts as $product)
                    <article class="product col-lg-4">
                        <a href="{{ route('frontProductShow', ['product' => $product]) }}">
                            <img src="{{ asset('img/home/product.png') }}" alt="{{ $product->name }}">
                        </a>
                        <h3 class="title-3">
                            {{ $product->name }}
                        </h3>
                        <p>
                                Prix : <span class="color bold">{{ $product->price/100 }}€</span>
                        </p>
                    </article>
                @endforeach
            </div>
            <p class="btn-container">
                <a href="{{ route('frontProductIndex') }}" class="home-btn">Plus de produits</a>
            </p>
        </div>
    </div>

    <div class="background-fixed"></div>

    <div class="product-categories">
        <div class="container-fluid">
            <h2 class="title-2">
                Shoppez par catégories
            </h2>
            <div class="category row col-lg-12">
                @foreach($categories as $category)
                    <div class="col-lg-3">
                        <a href="{{ route('frontCategoryShow', ['category' => $category]) }}">
                            <div class="img-category">
                                <img src="{{ asset('img/home/product.png') }}" alt="{{ $category->name }}">
                            </div>
                            <div class="label-category">
                                <p>{{ $category->name }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
