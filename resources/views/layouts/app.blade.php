<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practic-OS</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

body {
    display: flex;
    height: 100vh;
    background-color: #f5f5f5;
}

/* Estilos del menú de navegación lateral */
nav {
    width: 250px;
    background-color: #000;
    padding: 20px;
}

nav ul {
    list-style-type: none;
}

nav ul li {
    margin-bottom: 10px;
}

nav ul li a {
    display: block;
    padding: 15px;
    background-color: #fff;
    color: #000;
    text-align: center;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s;
}

nav ul li a:hover {
    background-color: #e0e0e0;
}

/* Estilos de la sección principal de contenido */

</style>
<body>
    <nav>
        <ul>            
            <li><a href="{{ route('empresa.index') }}">Empresas</a></li>
            <li><a href="{{ route('estudiante.index') }}">Estudiantes</a></li> 
            <li><a href="{{ route('tutor.index') }}">Tutores Académicos</a></li>
            <li><a href="{{ route('tutoresEmp.index') }}">Tutores Empresariales</a></li>
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
