@extends('layout.layout')

@section('title','Nos produits')

@section('content')

<form action="{{ route('commentStore') }}"method="POST" >
    @csrf

    <div class="form-group">
        <label >Name:</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea class="form-control" rows="5" name="description" required></textarea>
    </div>
    <div class="form-group">
        <label for="category_id">Produit : </label>
        <select multiple class="form-control" name="product_id" id="product_id" required>

            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>

    </div>
    <button type="submit" class="btn btn-primary btn-lg active">Submit </button>
</form>

@endsection