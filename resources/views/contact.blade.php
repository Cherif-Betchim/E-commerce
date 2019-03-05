@extends('layout.layout')

@section('title','Accueil')

@section('cssperso')
    <link rel="stylesheet" href="{{ asset('css/jerome.css') }}">
@endsection

@section('content')

    <h1>SERVICE CLIENT - CONTACTEZ-NOUS</h1>
    <div class="contact">
        <form class="formulaire" method="post" action="/results">
        <div class="coordonnees">
            {{ csrf_field() }}
            <h2>  Vos coordonnées </h2>
            <p>
                <label>
                    Prénom<span>*</span>:
                </label>
                <input id="first-name" name="firstName" value="" type="text" maxlength="45" placeholder="Prenom..."  required="required"/>
            </p>
            <p>
                <label>
                    Nom<span>*</span>:
                </label>
                <input id="last-name" name="lastName" value="" type="text" maxlength="45" placeholder="Nom..."  required="required"/>
            </p>
            <p>
                <label>
                    Email<span>*</span>:
                </label>
                <input id="email" name="email" value="" type="email" maxlength="100" placeholder="E-mail..."  required="required"/>
            </p>
            <p>
                <label>
                    Telphone:
                </label>
                <input type="tel" id="phone-number" name="phone" pattern="[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}" placeholder ="Format: 00.00.00.00.00">
            </p>
        </div>

        <div class="demande">

            <h2>  Votre demande</h2>
            <p>
            <label>
                Objet:
            </label>
            <select id="interest" name="interest" class="list">
                <option value="ras">Selectionner</option>
                <option value="Commande">Commande</option>
                <option value="Paiement">Paiement</option>
                <option value="Livraison">Livraison</option>
                <option value="Gestion du compte"></option>
                <option value="Retour & Reclamation">Retour & Reclamation</option>
                <option value="Webmaster">Webmaster</option>
            </select>
            </p>
            <p>
                <label>
                    Message<span>*</span>:
                </label>
                <textarea id="message" name="message" placeholder="Votre message.."  spellcheck="true" required="required"></textarea>
            </p>
            <p>
                <input type="submit" name="go" id="go"  value="Envoyez votre message" />
            </p>
        </div>
        </form>
    </div>


@endsection
