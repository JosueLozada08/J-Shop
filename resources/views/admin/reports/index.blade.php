@extends('layouts.admin')

@section('content')
<h1>Reportes de Ventas</h1>

<div>
    <!-- Aquí irían las gráficas o estadísticas -->
    <p>Ingresos totales: ${{ $revenue }}</p>
    <p>Productos más vendidos:</p>
    <ul>
        @foreach ($topProducts as $product)
        <li>{{ $product->name }} - Ventas: {{ $product->sales }}</li>
        @endforeach
    </ul>
</div>
@endsection
