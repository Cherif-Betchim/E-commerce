@extends('admin.layout.layout')

@section('title', 'Catégories')

@section('content')
    <div class="container">
        <h1>
            Liste des catégories
        </h1>

        <aside>
            @if (Session::has('flash_message'))
                <div class="alert {{ Session::get('flash_type') }}">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
        </aside>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th class="productName">name</th>
                <th class="hidden">éditer</th>
                <th class="hidden">supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        {{ $category->id }}.
                    </td>
                    <td >
                        {{ $category->name }}
                    </td>
                    <td>
                        <a href="{{ route('categoryEdit', ['category' => $category]) }}" class="btn btn-warning">éditer</a>
                    </td>
                    <td>
                        <form action="{{ route('categoryDestroy', ['category' => $category ->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection