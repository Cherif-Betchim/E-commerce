@extends('layouts.layout')

@section('title','Nos produits')

@section('content')



    @foreach ($allProducts as $product)

    <article>

        <img src="{{$product['img']}}" class="image" alt="Photo de {{$product['name']}}" />

        <h2>{{$product['name']}}</h2>

        <h3>{{$product['price']}} €</h3>

        <input class="checkbox" type ="checkbox" name="check[]" id="recep" value="{{$product['name']}}"/>

    </article>





    @endforeach

    <div class="Psubmit">

        <input type="submit" name="submit"/>

    </div>





@endsection
