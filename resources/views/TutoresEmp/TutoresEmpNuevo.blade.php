@extends('layouts.app')

@section('content')

<header class="header">
    <h1>Agregar Tutor Empresarial</h1>
</header>

<div class="container">
    <div class="table-box">
        <form action="{{ route('tutoresEmp.guardar') }}" method="POST">
            @csrf
            <label for="id_empresa">Empresa:</label>
            <select name="id_empresa" id="id_empresa" required>
                <option value="">Seleccionar Empresa</option>
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                @endforeach
            </select>

            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" id="nombres" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" required>

            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" id="cargo" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" required>

            <button type="submit">Guardar</button>
        </form>
    </div>
</div>

@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/tutores_emp_nuevo.css') }}">
@endsection
