@extends('layouts.admin')

@section('content')
<h1>Dashboard del Administrador</h1>

<div class="stats">
    <p>Total de Ventas: ${{ $totalSales }}</p>
    <p>Total de Usuarios: {{ $totalUsers }}</p>
    <p>Total de Pedidos: {{ $totalOrders }}</p>
    <p>Producto más Vendido: {{ $mostSoldProduct->name ?? 'N/A' }}</p>
</div>
@endsection
