@extends('layouts.admin')

@section('content')
<h1>Gestión de Productos</h1>
<a href="{{ route('admin.products.create') }}" class="btn btn-primary">Añadir Producto</a>

<table>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
        <td>
            <a href="{{ route('admin.products.edit', $product) }}">Editar</a>
            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
