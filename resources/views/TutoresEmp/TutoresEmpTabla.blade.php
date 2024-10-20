@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/TutoresEmpTabla_.css') }}">

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutores Empresariales</title>

</head>
<body>

<div class="container">
    <div class="table-box">
        <header class="header" style="font-size: 14px;">
            <h1>Tutores Empresariales</h1>
            <div class="btn-container">
                <a href="{{ route('tutoresEmp.nuevo') }}" class="btn btn-success">Agregar Tutor</a>
            </div>
        </header>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table" style="margin-top: 10px;">
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
