@extends('layout.layout')

@section('title','Accueil')

@section('content')



    <form>
        <div class="newform"> <label>Pays:</label> <input list="browsers" name="browser">
            <datalist id="browsers">
                <option value="France">
                <option value="Italie">
                <option value="Australie">
                <option value="Canada">
                <option value="Russe">
            </datalist></div>
        <div class="cart-type">
            <label>Type de carte bancaire</label>

            <div class="picto-cb">

                <input type="radio" name="type" value="master">
                <img src="{{asset('img/checkout/master.jfif')}}" class="img-cb"> MasterCard
            </div>
            <div class="picto-cb">

                <input type="radio" name="type" value="CA" >
                <img src="{{asset('img/checkout/aurore.png')}}" class="img-cb"> Carte Aurore
            </div>
            <div class="picto-cb">

                <input type="radio" name="type" value="Cifinoga">
                <img src="{{asset('img/checkout/cofinoga.png')}}" class="img-cb"> Cofinoga
            </div>
            <div class="picto-cb">

                <input type="radio" name="type" value="4etoiles">
                <img src="{{asset('img/checkout/4.jfif')}}" class="img-cb"> 4 étoiles
            </div>
            <div class="picto-cb">

                <input type="radio" name="type" value="Visa">
                <img src="{{asset('img/checkout/visa.jfif')}}" class="img-cb"> Visa
            </div>


            <div class="picto-cb">
                <input type="radio" name="type" value="CB" >
                <img src="{{asset('img/checkout/cb.jfif')}}" class="img-cb">

            </div>
        </div>
        <div class="cartform">
            <div class="newform">
                <label>Numéro de carte: </label>
                <input type="number">
            </div>
            <div class="ptit">
                <label>Date d'expiration:</label><input type="number" placeholder="mm"  >/
                <input type="number" placeholder="aa" > Qu'est-ce que c'est?
            </div>
            <div class="ptit">
                <label>Cryptogramme visuel: </label>
                <input type="number" >
            </div>
            <div class="newform">
                <label>Nom: </label>
                <input type="text" >
            </div>
            <div class="newform">
                <label>Adresse (ligne 1):</label>
                <input type="text" ></div><br>
            <div class="newform">
                <label>Adresse (ligne 2):</label>
                <input type="text" >
            </div>
            <div class="ptit">
                <label>Code postal:</label>
                <input type="number">
            </div>
            <div class="newform">
                <label> Ville:</label>
                <input type="text" >
            </div>
            <div class="newform">
                <label>Téléphone domicile</label>
                <input type="number" >
            </div>
            <div class="newform">
                <label>Email</label>
                <input type="text" >
            </div>
            <div class="newform">
                <input type="submit" value="J'achète!">
            </div>
        </div>
    </form>



@endsection


