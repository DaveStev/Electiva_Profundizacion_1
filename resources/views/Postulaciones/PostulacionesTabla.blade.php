@extends('layouts.app')

@section('title', 'Tabla de Postulaciones')

<link rel="stylesheet" href="{{ asset('css/tablaPostulaciones.css') }}">
@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-image: url('{{ asset('img/nubes.jpg') }}'); 
        background-size: cover; 
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
                <td>{{ $postulacion->estudiante->nombres }} {{ $postulacion->estudiante->apellidos }}</td>
                <td>{{ $postulacion->oferta->titulo }}</td>
                <td>{{ $postulacion->fecha_postulacion }}</td>
                <td>{{ $postulacion->estado }}</td>
                <td>
                    <form action="{{ route('postulaciones.eliminar', $postulacion->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar esta postulación?');" class="btn btn-danger">
                            Borrar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
