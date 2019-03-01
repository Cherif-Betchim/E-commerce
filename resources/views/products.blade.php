@extends('layouts.layout')

@section('title','Nos produits')

@section('content')


    <div class="Ptitle">

        <h1>̴ &nbsp; <span>N</span>OS  <span>Ρ</span>RODUITS &nbsp; ̴</h1>

    </div>



    @foreach ($allProducts as $product)



    <article>

        <img src="{{$product['img']}}" class="image" alt="Photo de {{$product['name']}}" />

        <h1>{{$product['name']}}</h1>

        <h2>{{$product['price']}} €</h2>

        <input class="checkbox" type ="checkbox" name="check[]" id="recep" value="{{$product['name']}}"/>

    </article>





    @endforeach

    <div class="Psubmit">

        <input type="submit" name="submit" value="Envoyer au panier"></input>

    </div>





@endsection
