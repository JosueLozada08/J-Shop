@extends('layouts.admin')

@section('content')
<h1>Añadir Producto</h1>

<form action="{{ route('admin.products.store') }}" method="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="name">
    <label>Descripción:</label>
    <textarea name="description"></textarea>
    <label>Precio:</label>
    <input type="number" name="price" step="0.01">
    <label>Stock:</label>
    <input type="number" name="stock">
    <label>Categoría:</label>
    <select name="category_id">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <button type="submit">Guardar</button>
</form>
@endsection
