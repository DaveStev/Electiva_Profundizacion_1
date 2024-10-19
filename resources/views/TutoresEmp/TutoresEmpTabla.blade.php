@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutores Empresariales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-image: url('../img/nubes.jpg'); /* Fondo de nubes */
            background-size: cover; /* Ajusta el fondo para que cubra toda la pantalla */
        }

        .header {
            color: black; /* Texto en blanco */
            padding: 20px; /* Espaciado interno */
            text-align: center; /* Centrar texto */
        }

        .btn-container {
            display: flex;
            justify-content: center; /* Centrar el botón dentro del contenedor */
            margin-bottom: 20px; /* Espacio en la parte inferior */
        }

        .container {
            max-width: 990px; /* Ancho máximo del contenedor */
            margin: auto; /* Centrar el contenedor */
            padding: 30px; /* Espaciado interno */
        }

        .table-box {
            padding: 20px; /* Espaciado interno */
            background-color: #f9f9f9; /* Color de fondo claro */
            border: 2px solid #ccc; /* Bordes grises */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
            margin-top: 20px; /* Espacio en la parte superior */
            width: 1000px;
            
        }

        .btn-success {
            font-family: 'Barlow Condensed', sans-serif; /* Fuente personalizada */
            font-size: 18px; /* Tamaño de fuente */
            padding: 10px 20px; /* Espaciado interno */
            background-color: #28a745; /* Color de fondo verde */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            color: white; /* Texto en blanco */
            cursor: pointer; /* Cambiar cursor a mano */
            transition: background-color 0.3s ease; /* Transición suave para el color de fondo */
        }

        .btn-success:hover {
            background-color: #218838; /* Color de fondo verde más oscuro al pasar el mouse */
        }

        .btn-warning {
            font-family: 'Barlow Condensed', sans-serif; /* Fuente personalizada */
            font-size: 16px; /* Tamaño de fuente */
            padding: 8px 16px; /* Espaciado interno */
            background-color: #ffcc00; /* Color de fondo mostaza */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            color: black; /* Texto negro */
            cursor: pointer; /* Cambiar cursor a mano */
            transition: background-color 0.3s ease; /* Transición suave para el color de fondo */
        }

        .btn-warning:hover {
            background-color: #e6b800; /* Color de fondo mostaza más oscuro al pasar el mouse */
        }

        .btn-danger {
            font-family: 'Barlow Condensed', sans-serif; /* Fuente personalizada */
            font-size: 16px; /* Tamaño de fuente */
            padding: 8px 16px; /* Espaciado interno */
            background-color: #dc3545; /* Color de fondo rojo */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            color: white; /* Texto en blanco */
            cursor: pointer; /* Cambiar cursor a mano */
            transition: background-color 0.3s ease; /* Transición suave para el color de fondo */
        }

        .btn-danger:hover {
            background-color: #c82333; /* Color de fondo rojo más oscuro al pasar el mouse */
        }

        .table {
            max-width: 9200px; /* Ancho máximo de 900px */
            margin: auto; /* Centrar la tabla */
            border-collapse: collapse; /* Colapsar bordes */
        }

        .table thead th {
            background-color: #007bff; /* Color de fondo azul para el encabezado */
            color: white; /* Texto en blanco */
            font-family: 'Barlow Condensed', sans-serif; /* Fuente personalizada */
            font-size: 18px; /* Tamaño de fuente */
            text-align: center; /* Centrar texto */
            padding: 10px; /* Espaciado interno */
            border: 1px solid #ddd; /* Bordes grises */
        }

        .table tbody td {
            font-family: 'Barlow Condensed', sans-serif; /* Fuente personalizada */
            font-size: 16px; /* Tamaño de fuente */
            text-align: center; /* Centrar texto */
            padding: 8px; /* Espaciado interno más pequeño */
            border: 1px solid #ddd; /* Bordes grises */
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2; /* Fondo claro para filas pares */
        }

        .table tbody tr:hover {
            background-color: #e9ecef; /* Fondo claro al pasar el mouse */
        }
    </style>
</head>
<body>

<header class="header">
    <h1>Tutores Empresariales</h1>
    <div class="btn-container">
        <a href="{{ route('tutoresEmp.nuevo') }}" class="btn btn-success">Agregar Tutor</a>
    </div>
</header>

<div class="container">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-box">
        <table class="table">
            <thead>
                <tr>
                    <th>Empresa</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Cargo</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tutores as $tutor)
                    <tr>
                        <td>{{ $tutor->empresa->nombre }}</td>
                        <td>{{ $tutor->nombres }}</td>
                        <td>{{ $tutor->apellidos }}</td>
                        <td>{{ $tutor->cargo }}</td>
                        <td>{{ $tutor->email }}</td>
                        <td>{{ $tutor->telefono }}</td>
                        <td>
                            <a href="{{ route('tutoresEmp.editar', $tutor->id) }}" class="btn btn-warning">Editar</a>
                            <a href="{{ route('tutoresEmp.borrar', $tutor->id) }}" class="btn btn-danger" onclick="return confirm('¿Estás seguro de querer borrar este tutor?');">Borrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>

@endsection
