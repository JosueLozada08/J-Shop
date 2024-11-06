@extends('layouts.admin')

@section('content')
<h1>Gestión de Pedidos</h1>

<table>
    <tr>
        <th>ID Pedido</th>
        <th>Usuario</th>
        <th>Total</th>
        <th>Estado</th>
        <th>Fecha</th>
        <th>Acciones</th>
    </tr>
    @foreach ($orders as $order)
    <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->user->name }}</td>
        <td>{{ $order->total }}</td>
        <td>{{ $order->status }}</td>
        <td>{{ $order->created_at }}</td>
        <td><a href="{{ route('admin.orders.show', $order) }}">Ver</a></td>
    </tr>
    @endforeach
</table>
@endsection
