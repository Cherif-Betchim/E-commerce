@extends('layout.layout')

@section('title', $category->name)

@section('content')
    @include('productsFilters')
        <h2>{{ $category->name }}</h2>
    @include('productsListing')
@endsection