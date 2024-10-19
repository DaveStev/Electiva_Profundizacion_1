<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practic-OS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Enlace a tus estilos CSS -->
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('tutoresEmp.index') }}">Tutores Empresariales</a></li>
            <li><a href="{{ route('empresa.index') }}">Empresas</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content') <!-- Aquí se inyectará el contenido de las vistas que extiendan este layout -->
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Enlace a tus scripts JS -->
</body>
</html>
