@extends('layouts.app')

@section('title', 'Tabla de Ofertas')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-image: url('{{ asset('img/nubes.jpg') }}'); 
        background-size: cover; 
    }
</style>

<link rel="stylesheet" href="{{ asset('css/ofertas.css') }}">

<div class="container">
    <div class="table-box">
        <h1>Lista de Ofertas</h1>
        
        <div class="btn-container">
            <a href="{{ route('oferta.nuevo') }}" class="btn-success">Crear Nueva Oferta</a>
        </div>

        
        @if (session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

       
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Requisitos</th>
                    <th>Duración (horas)</th>
                    <th>Renumeración (COP)</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Habilidades</th>
                    <th>Empresa</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ofertas as $oferta)
                    <tr>
                        <td>{{ $oferta->titulo }}</td>
                        <td>{{ $oferta->descripcion }}</td>
                        <td>{{ $oferta->requisitos }}</td>
                        <td>{{ $oferta->duracion }}</td>
                        <td>{{ $oferta->renumeracion ? $oferta->renumeracion : 'No hay' }}</td>
                        <td>{{ $oferta->fecha_inicio }}</td>
                        <td>{{ $oferta->fecha_fin }}</td>
                        <td>{{ $oferta->habilidades }}</td>
                        <td>{{ $oferta->empresa->nombre }}</td>
                        <td>
                            <a href="{{ route('oferta.editar', $oferta->id) }}" class="btn-warning">Editar</a>
                            <br><br><br>
                            <a href="{{ route('oferta.borrar', $oferta->id) }}" class="btn-danger">Borrar</a>
                            <br><br><br>
                            <a href="{{ route('postulacion.postular', $oferta->id) }}" class="btn-success">Postúleme</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
