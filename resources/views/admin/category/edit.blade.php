@extends('admin.layout.layout')

@section('title', 'Ajouter une catégorie')

@section('content')
    <div class="container productCreate">
        <aside>
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </aside>
        <form action="{{ route('categoryUpdate') }}" method="POST">
            @csrf
            @method('put')

            <input type="hidden" name="id" value="{{ $category->id }}">

            <fieldset class="form-group">
                <label for="name">Nom : </label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
            </fieldset>
            <button type="submit" class="btn btn-primary">Mettre à jour la catégorie</button>
        </form>
    </div>
@endsection


