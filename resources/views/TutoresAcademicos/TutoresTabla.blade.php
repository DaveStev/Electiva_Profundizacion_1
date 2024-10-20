@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/TutorAcam.css') }}">
<style>
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-image: url('{{ asset('img/nubes.jpg') }}'); 
            background-size: cover; 
        }

        
    </style>

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutores Académicos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
        <div class="table-box">
            <h2 class="table-title" style="text-align: center; font-size: 30px;">Tutores Académicos</h2>
            <div class="d-flex justify-content-start mb-3">
                <a href="{{ route('tutor.nuevo') }}" class="btn btn-success me-2" style="text-align: center; margin-bottom: 20px;  margin-left: 450px; margin-top: 10px;">
                     Registrar Nuevo Tutor
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-striped" style="margin-top: 10px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Programa</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tutores as $tutor)
                        <tr>
                            <td>{{ $tutor->id }}</td>
                            <td>{{ $tutor->nombres }}</td>
                            <td>{{ $tutor->apellidos }}</td>
                            <td>{{ $tutor->programa }}</td>
                            <td>{{ $tutor->email }}</td>
                            <td>{{ $tutor->telefono }}</td>
                            <td>
                                <a href="{{ route('tutor.editar', $tutor->id) }}" class="btn btn-warning">Editar</a>
                                <a href="{{ route('tutor.borrar', $tutor->id) }}" class="btn btn-danger">Borrar</a>
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

