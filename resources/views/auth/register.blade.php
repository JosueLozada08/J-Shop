<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h2>Registrarse</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label>Nombre:</label>
            <input type="text" name="name" required autofocus>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Contraseña:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label>Confirmar Contraseña:</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
