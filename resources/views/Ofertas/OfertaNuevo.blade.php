@extends('layouts.app')

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-image: url('{{ asset('img/nubes.jpg') }}'); 
        background-size: cover; 
    }
</style>

<link rel="stylesheet" href="{{ asset('css/ofertaNuevo.css') }}">

@section('content')
    <div class="table-box">

        <form action="{{ route('oferta.guardar') }}" method="POST">
        <h2>Crear Nueva Oferta</h2>
            @csrf
            <label>Título:</label>
            <input type="text" name="titulo" required>

            <label>Descripción:</label>
            <textarea name="descripcion" required></textarea>

            <label>Requisitos:</label>
            <textarea name="requisitos"></textarea>

            <label>Duración (horas):</label>
            <input type="number" name="duracion" min="0">

            <label>Renumeración (COP):</label>
            <input type="number" name="renumeracion" min="0">

            <label>Fecha Inicio:</label>
            <input type="date" name="fecha_inicio" required>

            <label>Fecha Fin:</label>
            <input type="date" name="fecha_fin" required>

            <label>Habilidades:</label>
            <textarea name="habilidades"></textarea>

            <label>Empresa:</label>
            <select name="id_empresa" required>
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                @endforeach
            </select>
            <br>
            <button type="submit">Guardar</button>
            <br>
            <br>
            <a href="{{ url('/ofertas/tabla') }}" class="btn-cancelar">Cancelar</a>
        </form>
    </div>
@endsection
