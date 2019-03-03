@extends('layouts.layout')

@section('title','Accueil')

@section('content')

    <h1>SERVICE CLIENT - CONTACTEZ-NOUS</h1>
    <div class="contact">
        <form class="formulaire" method="post" action="https://httpbin.org/post">
        <div class="coordonnees">

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
                <option value="1">Commande</option>
                <option value="2">Paiement</option>
                <option value="3">Livraison</option>
                <option value="4">Gestion du compte</option>
                <option value="5">Retour & Reclamation</option>
                <option value="6">Webmaster</option>
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
