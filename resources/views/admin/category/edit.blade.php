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
        <form action="{{ route('categoryIndex') }}" method="POST">
            @csrf
            @method('put')

            <input type="hidden" name="id" value="{{ $category->id }}">

            <fieldset class="form-group">
                <label for="category">Categorie : </label>
                <textarea class="form-control" name="category" id="category">{{ $category->category }}</textarea>
            </fieldset>
            <button type="submit" class="btn btn-primary">Mettre à jour la Categore</button>
        </form>
    </div>
@endsection

