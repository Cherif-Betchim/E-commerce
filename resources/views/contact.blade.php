@extends('layout.layout')

@section('title','Accueil')

@section('content')

<div class="contact">
    <h1 class="title-1">Contactez-nous</h1>
    <div class="container">
        <div class="row">
            <form class="contactForm" method="post" action="/contact/results">
                <div class="userInfos">
                    {{ csrf_field() }}
                    <h2 class="title-2">Vos coordonnées</h2>
                    <p>
                        <label>
                            Prénom<span class="color bold">*</span> :
                        </label>
                        <input id="first-name" name="firstName" value="" type="text" maxlength="45" required="required"/>
                    </p>
                    <p>
                        <label>
                            Nom<span class="color bold">*</span> :
                        </label>
                        <input id="last-name" name="lastName" value="" type="text" maxlength="45" required="required"/>
                    </p>
                    <p>
                        <label>
                            Email<span class="color bold">*</span> :
                        </label>
                        <input id="email" name="email" value="" type="email" maxlength="100"   required="required"/>
                    </p>
                    <p>
                        <label>
                            Telphone:
                        </label>
                        <input type="tel" id="phone-number" name="phone" pattern="[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}">
                    </p>
                </div>

                <div class="userMessage">
                    <h2 class="title-2">Votre demande</h2>
                    <p>
                    <label>
                        Objet :
                    </label>
                    <select id="interest" name="interest" class="list">
                        <option value="ras">Selectionner</option>
                        <option value="Commande">Commande</option>
                        <option value="Paiement">Paiement</option>
                        <option value="Livraison">Livraison</option>
                        <option value="Gestion du compte">Gestion de compte</option>
                        <option value="Retour & Reclamation">Retour & Reclamation</option>
                        <option value="Webmaster">Webmaster</option>
                    </select>
                    </p>
                    <p>
                        <label>
                            Message<span class="color bold">*</span> :
                        </label>
                        <textarea id="message" name="message" spellcheck="true" required="required"></textarea>
                    </p>
                    <p>
                        <input type="submit" name="go" id="go" class="form-btn" value="Envoyez votre message" />
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
