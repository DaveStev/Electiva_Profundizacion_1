@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/Estudiantes_Tabla.css') }}">
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-image: url('{{ asset('img/Fondo2.jpg') }}'); 
        background-size: cover; 
    }
</style>

@section('content')
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
        <div class="table-box">
            
            <h2 class="table-title">Estudiantes</h2>
            <div class="d-flex justify-content-center mb-3">
                <a href="{{ route('estudiante.nuevo') }}" class="btn btn-success">Registrar Nuevo Estudiante</a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $est)
                        <tr>
                            <td>{{ $est->id }}</td>
                            <td>{{ $est->nombres }}</td>
                            <td>{{ $est->apellidos }}</td>
                            <td>
                                <a href="{{ route('estudiante.editar', $est->id) }}" class="btn btn-warning">Editar</a>
                                <a href="{{ route('estudiante.borrar', $est->id) }}" class="btn btn-danger">Borrar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
