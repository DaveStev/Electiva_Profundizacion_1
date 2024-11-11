@extends('layouts.app')

@section('title', 'Tabla de Postulaciones')

<link rel="stylesheet" href="{{ asset('css/tablaPostulaciones_.css') }}">
@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-image: url('{{ asset('img/Fondo2.jpg') }}'); 
        background-size: cover; 
    }
    .table {
    max-width: 800px; 
    margin: 50px auto; 
    padding: 25px;
    margin-top: 180px;
    margin-left: 200px;
    background-color: #fdfdfd; 
    border: 1px solid #e0e0e0; 
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center; 
}
</style>

<table class="table">
    <thead>
        <tr>
            <th colspan="5" style="text-align: center; font-size: 1.8em; color: #000; background: none;">Lista de Postulaciones</th>
        </tr>
        <tr>
            <th>Estudiante</th>
            <th>Oferta</th>
            <th>Fecha de Postulación</th>
            <th>Estado</th>
            <th>Acciones</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($postulaciones as $postulacion)
            <tr>
                <td>{{ $postulacion->estudiante ? $postulacion->estudiante->nombres : 'No asignado' }} {{ $postulacion->estudiante ? $postulacion->estudiante->apellidos : 'No asignado' }}</td>
                <td>{{ $postulacion->oferta ? $postulacion->oferta->titulo : 'No asignado' }}</td>
                <td>{{ $postulacion->fecha_postulacion }}</td>
                <td>{{ $postulacion->estado }}</td>
                <td>
                    <form action="{{ route('postulaciones.eliminar', $postulacion->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar esta postulación?');" class="btn btn-danger" onclick="return confirm('¿Estás seguro de querer borrar esta Postulacion?');">
                            Borrar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
