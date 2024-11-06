<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Tienda en Línea</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.products.index') }}">Productos</a>
            <a href="{{ route('admin.orders.index') }}">Pedidos</a>
            <a href="{{ route('admin.users.index') }}">Usuarios</a>
            <a href="{{ route('admin.categories.index') }}">Categorías</a>
            <a href="{{ route('admin.reports.index') }}">Reportes</a>
            <a href="{{ route('logout') }}">Cerrar sesión</a>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>
</html>
