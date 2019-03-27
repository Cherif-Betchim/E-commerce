@extends('layout.layout')

@section('title', 'Historique des commandes')

@section('content')
    <div class="orderIndex">
        <h1 class="title-2">Historique des commandes</h1>
        <div class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>user</th>
                    <th>date</th>
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
                        <td>
                            {{ $order->user->first_name }}
                        </td>
                        <td>
                            {{ Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}
                        </td>
                        <td>
                            {{ $order->total_price/100 }}€
                        </td>
                        <td>
                            <a href="{{ route('orderShow', ['order' => $order]) }}" class="btn btn-warning">détails</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{route('userIndex')}}">Retour au menu </a>
        </div>
    </div>
@endsection