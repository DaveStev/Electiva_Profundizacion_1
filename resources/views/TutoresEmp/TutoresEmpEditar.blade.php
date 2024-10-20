@extends('layouts.app')

    <link rel="stylesheet" href="{{ asset('css/tutor_emp_editar.css') }}">
    <style>
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-image: url('{{ asset('img/nubes.jpg') }}'); 
            background-size: cover; 
        }

        
    </style>

@section('content')

<header class="header">
    <h1>Editar Tutor Empresarial</h1>
</header>

<div class="container">
    <div class="table-box">
        <form action="{{ route('tutoresEmp.actualizar', $tutor->id) }}" method="POST">
            @csrf
            @method('PUT') 

            <table>
                <tr>
                    <td>
                        <label for="id_empresa">Empresa:</label>
                    </td>
                    <td>
                        <select name="id_empresa" id="id_empresa" required>
                            <option value="">Seleccionar Empresa</option>
                            @foreach ($empresas as $empresa)
                                <option value="{{ $empresa->id }}" {{ $empresa->id == $tutor->id_empresa ? 'selected' : '' }}>
                                    {{ $empresa->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nombres">Nombres:</label>
                    </td>
                    <td>
                        <input type="text" name="nombres" id="nombres" value="{{ $tutor->nombres }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="apellidos">Apellidos:</label>
                    </td>
                    <td>
                        <input type="text" name="apellidos" id="apellidos" value="{{ $tutor->apellidos }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cargo">Cargo:</label>
                    </td>
                    <td>
                        <input type="text" name="cargo" id="cargo" value="{{ $tutor->cargo }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email:</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" value="{{ $tutor->email }}" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="telefono">Teléfono:</label>
                    </td>
                    <td>
                        <input type="text" name="telefono" id="telefono" value="{{ $tutor->telefono }}" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="button-container">
                        <button type="submit" class="btn-guardar">Actualizar</button>
                        <a href="{{ url('/tutores-empresariales/tabla') }}" class="btn-cancelar">Cancelar</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection
