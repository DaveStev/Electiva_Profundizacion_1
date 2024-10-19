@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/tutores_emp_editar.css') }}">
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

        table {
            width: 100%; /* Ancho completo de la tabla */
            border-collapse: collapse; /* Eliminar espacio entre celdas */
        }

        td {
            padding: 10px; /* Espaciado interno en celdas */
            vertical-align: top; /* Alinear texto al principio */
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
@endsection

@section('content')

<header class="header">
    <h1>Editar Tutor Empresarial</h1>
</header>

<div class="container">
    <div class="table-box">
        <form action="{{ route('tutoresEmp.actualizar', $tutor->id) }}" method="POST">
            @csrf
            @method('PUT') 

            <table>
                <tr>
                    <td>
                        <label for="id_empresa">Empresa:</label>
                    </td>
                    <td>
                        <select name="id_empresa" id="id_empresa" required>
                            <option value="">Seleccionar Empresa</option>
                            @foreach ($empresas as $empresa)
                                <option value="{{ $empresa->id }}" {{ $empresa->id == $tutor->id_empresa ? 'selected' : '' }}>
                                    {{ $empresa->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nombres">Nombres:</label>
                    </td>
                    <td>
                        <input type="text" name="nombres" id="nombres" value="{{ $tutor->nombres }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="apellidos">Apellidos:</label>
                    </td>
                    <td>
                        <input type="text" name="apellidos" id="apellidos" value="{{ $tutor->apellidos }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cargo">Cargo:</label>
                    </td>
                    <td>
                        <input type="text" name="cargo" id="cargo" value="{{ $tutor->cargo }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email:</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" value="{{ $tutor->email }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="telefono">Teléfono:</label>
                    </td>
                    <td>
                        <input type="text" name="telefono" id="telefono" value="{{ $tutor->telefono }}" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="button-container">
                        <button type="submit" class="btn-guardar">Actualizar</button>
                        <a href="{{ url('/tutores-empresariales/tabla') }}" class="btn-cancelar">Cancelar</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection
