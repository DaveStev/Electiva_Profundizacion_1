@section('title', 'Postularse a Oferta')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-image: url('{{ asset('img/Fondo2.jpg') }}'); 
        background-size: cover; 
    }
</style>
<link rel="stylesheet" href="{{ asset('css/postularOfertaEst.css') }}">

<div class="container">
    <form action="{{ route('postulacion.guardar') }}" method="POST">
        @csrf
        <input type="hidden" name="id_oferta" value="{{ $oferta->id }}">

        
        <h1>Postularse a: {{ $oferta->titulo }}</h1>

        <div class="mb-3">
            <label for="id_estudiante" class="form-label">Seleccionar Estudiante:</label>
            <select id="id_estudiante" name="id_estudiante" class="form-control" required>
                <option value="">Seleccione un estudiante</option>
                @foreach ($estudiantes as $estudiante)
                    <option value="{{ $estudiante->id }}">{{ $estudiante->nombres }} {{ $estudiante->apellidos }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="fecha_postulacion" class="form-label">Fecha de Postulación:</label>
            <input type="date" id="fecha_postulacion" name="fecha_postulacion" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado:</label>
            <input type="text" id="estado" name="estado" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Postular</button>
        <br>
        <br>
        <a href="{{ route('oferta.index') }}" class="btn btn-danger">Cancelar</a> 
    </form>
</div>
