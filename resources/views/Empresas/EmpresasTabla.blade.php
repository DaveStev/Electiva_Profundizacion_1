@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/Empresas_Tabla.css') }}">
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-image: url('{{ asset('img/Fondo2.jpg') }}'); 
        background-size: cover; 
    }

    .table thead th {
    background-color: #000000;
    color: white;
    font-family: 'Barlow Condensed', sans-serif;
    font-size: 18px;
    text-align: center; /* Asegura que los encabezados de la tabla estén centrados */
    padding: 10px;
    border: 1px solid #ddd;
}

</style>

@section('content')
    <div class="table-box" style="margin-top: 30px;">
        <h2 class="table-title" style="text-align: center; font-size: 30px;">Empresas</h2> 
        <div class="btn-container" style="text-align: center; margin-bottom: 20px;  margin-left: 20px;">
            <a href="{{ route('empresa.nuevo') }}" class="btn btn-success">
                <i class="fas fa-building"></i> Registrar Nueva Empresa
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
                    <th>Nombre</th>
                    <th>NIT</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empresa as $emp)
                    <tr>
                        <td>{{ $emp->id }}</td>
                        <td>{{ $emp->nombre }}</td>
                        <td>{{ $emp->nit }}</td>
                        <td>{{ $emp->direccion }}</td>
                        <td>{{ $emp->telefono }}</td>
                        <td>{{ $emp->email }}</td>
                        <td>
                            <a href="{{ route('empresa.editar', $emp->id) }}" class="btn btn-warning">Editar</a>
                            <a href="{{ route('empresas.borrar', $emp->id) }}" class="btn btn-danger" onclick="return confirm('¿Estás seguro de querer borrar esta Empresa?');">Borrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
