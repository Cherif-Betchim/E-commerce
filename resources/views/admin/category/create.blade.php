@extends('admin.layout.layout')

@section('title', 'Ajouter une catégorie')

@section('content')
    <div class="container">
        <aside>
            @if (Session::has('flash_message'))
                <div class="alert {{ Session::get('flash_type') }}">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
        </aside>

        <form action="{{ route('categoryStore') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom : </label>
                <input type="text" class="form-control @if ($errors->has('name')) {{ 'is-invalid' }} @endif" name="name" id="name" placeholder="Nom de la catégorie" value="{{ old('name') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter la catégorie</button>
        </form>
    </div>
@endsection