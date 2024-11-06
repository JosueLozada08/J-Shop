@extends('layouts.admin')

@section('content')
<h1>Gestión de Usuarios</h1>

<table>
    <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Rol</th>
        <th>Fecha de Registro</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->is_admin ? 'Administrador' : 'Cliente' }}</td>
        <td>{{ $user->created_at }}</td>
    </tr>
    @endforeach
</table>
@endsection
