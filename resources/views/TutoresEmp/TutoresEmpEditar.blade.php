@extends('layouts.app')

@section('content')

<header class="header">
    <h1>Editar Tutor Empresarial</h1>
</header>

<div class="container">
    <div class="table-box">
        <form action="{{ route('tutoresEmp.actualizar', $tutor->id) }}" method="POST">
            @csrf
            @method('PUT') 

            <label for="id_empresa">Empresa:</label>
            <select name="id_empresa" id="id_empresa" required>
                <option value="">Seleccionar Empresa</option>
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}" {{ $empresa->id == $tutor->id_empresa ? 'selected' : '' }}>
                        {{ $empresa->nombre }}
                    </option>
                @endforeach
            </select>

            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" id="nombres" value="{{ $tutor->nombres }}" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" value="{{ $tutor->apellidos }}" required>

            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" id="cargo" value="{{ $tutor->cargo }}" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $tutor->email }}" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" value="{{ $tutor->telefono }}" required>

            <button type="submit">Actualizar</button>
        </form>
    </div>
</div>

@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/tutores_emp_editar.css') }}">
@endsection
