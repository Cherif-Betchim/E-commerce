@extends('layout.layout')

@section('title','Nos produits')

@section('content')
    @include('productsFilters')
    @include('productsListing')
@endsection