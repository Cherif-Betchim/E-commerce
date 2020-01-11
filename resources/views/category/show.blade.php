@extends('layout.layout')

@section('title', $category->name)

@section('content')
    @include('productsFilters')
    <div class="container categoryHeader">
        <h2 class="title-2">{{ $category->name }}</h2>
    </div>
    @include('productsListing')
@endsection