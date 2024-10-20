@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/Empresas_Tabla.css') }}">
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-image: url('{{ asset('img/nubes.jpg') }}'); 
        background-size: cover; 
    }
</style>

@section('content')
    <div class="container-fluid min-vh-100 d-flex flex-column align-items-center">
        <div class="table-box">
            <h2 class="table-title" style="text-align: center; font-size: 30px;">Estudiantes</h2>
            <div class="d-flex justify-content-start mb-3" style="text-align: center; margin-bottom: 20px;">
                <a href="{{ route('estudiante.nuevo') }}" class="btn btn-success me-2">Registrar Nuevo Estudiante</a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-striped" style="margin-top: 10px;">
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
