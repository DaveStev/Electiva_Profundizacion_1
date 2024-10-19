@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Tutor Empresarial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-image: url('../img/nubes.jpg'); /* Fondo de nubes */
            background-size: cover; /* Ajusta el fondo para que cubra toda la pantalla */
        }

        .header {
            color: black; /* Texto en negro */
            padding: 20px; /* Espaciado interno */
            text-align: center; /* Centrar texto */
        }

        .container {
            max-width: 800px; /* Ancho máximo del contenedor */
            margin: auto; /* Centrar el contenedor */
            padding: 20px; /* Espaciado interno */
        }

        .table-box {
            padding: 20px; /* Espaciado interno */
            background-color: #f9f9f9; /* Color de fondo claro */
            border: 2px solid #ccc; /* Bordes grises */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
            margin-top: 20px; /* Espacio en la parte superior */
        }

        label {
            display: block; /* Hacer que las etiquetas ocupen toda la línea */
            margin-bottom: 5px; /* Espacio inferior */
        }

        input, select {
            width: 100%; /* Ancho completo */
            padding: 10px; /* Espaciado interno */
            margin-bottom: 15px; /* Espacio entre campos */
            border: 1px solid #ddd; /* Bordes grises */
            border-radius: 5px; /* Bordes redondeados */
        }

        button, .btn-cancelar {
            font-family: 'Barlow Condensed', sans-serif; /* Fuente personalizada */
            font-size: 18px; /* Tamaño de fuente */
            padding: 10px 20px; /* Espaciado interno */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cambiar cursor a mano */
            transition: background-color 0.3s ease; /* Transición suave para el color de fondo */
            margin: 5px; /* Espacio entre botones */
        }

        .btn-guardar {
            background-color: #28a745; /* Color de fondo verde */
            color: white; /* Texto en blanco */
        }

        .btn-guardar:hover {
            background-color: #218838; /* Color de fondo verde más oscuro al pasar el mouse */
        }

        .btn-cancelar {
            background-color: #dc3545; /* Color de fondo rojo */
            color: white; /* Texto en blanco */
        }

        .btn-cancelar:hover {
            background-color: #c82333; /* Color de fondo rojo más oscuro al pasar el mouse */
        }

        .button-container {
            text-align: center; /* Centrar los botones */
            margin-top: 20px; /* Espacio en la parte superior */
        }
    </style>
</head>
<body>

<header class="header">
    <h1>Agregar Tutor Empresarial</h1>
</header>

<div class="container">
    <div class="table-box">
        <form action="{{ route('tutoresEmp.guardar') }}" method="POST">
            @csrf
            <label for="id_empresa">Empresa:</label>
            <select name="id_empresa" id="id_empresa" required>
                <option value="">Seleccionar Empresa</option>
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                @endforeach
            </select>

            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" id="nombres" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" required>

            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" id="cargo" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" required>

            <div class="button-container">
                <button type="submit" class="btn-guardar">Guardar</button>
                <a href="{{ url('/tutores-empresariales/tabla') }}" class="btn-cancelar">Cancelar</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>

@endsection
