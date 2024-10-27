<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practic-OS</title>
    <link rel="stylesheet" href="{{ asset('css/apps.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('tutoresEmp.index') }}">Tutores Empresariales</a></li>
            <li><a href="{{ route('empresa.index') }}">Empresas</a></li>
            <li><a href="{{ route('estudiante.index') }}">Estudiantes</a></li> 
            <li><a href="{{ route('tutor.index') }}">Tutores Académicos</a></li> 
            <li><a href="{{ route('oferta.index') }}">Ofertas</a></li> 
            <li><a href="{{ route('postulaciones.index') }}">Postulaciones</a></li> 
        </ul>
    </nav>

    <div class="container">
        @yield('content') 
    </div>

    <script src="{{ asset('js/app.js') }}"></script> 
</body>
</html>
