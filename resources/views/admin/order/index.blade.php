@extends('admin.layout.layout')

@section('title', 'Commandes')

@section('content')
    <div class="container">
        <h1>
            Liste des commandes
        </h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th class="productName">client</th>
                <th>prix total</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>
                        {{ $order->id }}.
                    </td>
                    <td >
                        {{ $order->user }}
                    </td>
                    <td>
                        {{ $order->total_price/100 }}€
                    </td>
                    <td>
                        <a href="{{ route('adminOrderShow', ['order' => $order]) }}" class="btn btn-warning">détails</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection