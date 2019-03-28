@extends('layout.layout')

@section('title','Mon compte')

@section('content')
    <div class="container">

        <h3>Creer une nouvelle adresse</h3>

        <form action="{{ route('userAddresses') }}" method="POST">

            {{ csrf_field() }}

            <fieldset class="form-group">
                <label for="name">Intitulé </label>
                <input type="text" name="address_name" id="address_name" required>
            </fieldset>

            <fieldset class="form-group">
                <label for="name">Nom </label>
                <input type="text" name="last_name" id="last_name" required>
            </fieldset>

            <fieldset class="form-group">
                <label for="name">Prenom</label>
                <input type="text" name="first_name" id="first_name" required>
            </fieldset>

            <fieldset class="form-group">
                <label for="name">Adresse </label>
                <input type="text" name="address" id="address" required>
            </fieldset>

            <fieldset class="form-group">
                <label for="name">Code Postal </label>
                <input type="text" name="post_code" id="post_code" required>
            </fieldset>

            <fieldset class="form-group">
                <label for="name">Ville </label>
                <input type="text" name="city" id="city" required>
            </fieldset>

            <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />


            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>



        <a href="{{route('userAddresses')}}">Annuler</a>
    </div>



@endsection