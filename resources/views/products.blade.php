@extends('layouts.layout')

@section('title','Nos produits')

@section('content')
    @for ($i = 0; $i < 10; $i++)


            <div class="Product"


                <div class="pictureProduct">
                    <img src="http://www.achat-groupé.com/wp-content/uploads/2018/08/produit.jpg"/>
                </div>
                <div class="descriProduct">
                    <a href="Produit{{$i}}" ><h3>Produit {{$i}}</h3>  </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultrices purus diam, ut auctor odio egestas in. Phasellus commodo a mi eu rutrum. Donec ultricies diam mauris, at ultricies sapien dictum ut. Morbi finibus nisl metus, et euismod lectus cursus.
                    </p>
                    <p>
                        {{rand(10,100)}}€
                    </p>
                </div>
                <p class="cartProduct">
                    <label for="{{$i}}">Ajouter au panier </label>
                    <input type="checkbox" name="chosenProducts[]" id="{{$i}}" value="{{$i}}">
                </p>
                </div>
            </div>


        @endfor



            <input type="submit" name="submit"/>




@endsection
