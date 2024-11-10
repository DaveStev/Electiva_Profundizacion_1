
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-image: url('{{ asset('img/Fondo2.jpg') }}'); 
        background-size: cover; 
    }
</style>

<link rel="stylesheet" href="{{ asset('css/ofertaEditar.css') }}">

@section('content')
    <div class="table-box">
        
        <form action="{{ route('oferta.actualizar', $oferta->id) }}" method="POST">
        <h2>Editar Oferta</h2>
            @csrf
            @method('POST')
            <label>Título:</label>
            <input type="text" name="titulo" value="{{ $oferta->titulo }}" required>
            
            <label>Descripción:</label>
            <textarea name="descripcion" required>{{ $oferta->descripcion }}</textarea>
            
            <label>Requisitos:</label>
            <textarea name="requisitos">{{ $oferta->requisitos }}</textarea>
            
            <label>Duración:</label>
            <input type="number" name="duracion" value="{{ $oferta->duracion }}" min="0" required>
            
            <label>Renumeración:</label>
            <input type="number" name="renumeracion" value="{{ $oferta->renumeracion }}" min="0" required>
            
            <label>Fecha Inicio:</label>
            <input type="date" name="fecha_inicio" value="{{ $oferta->fecha_inicio }}" required>
            
            <label>Fecha Fin:</label>
            <input type="date" name="fecha_fin" value="{{ $oferta->fecha_fin }}" required>
            
            <label>Habilidades:</label>
            <textarea name="habilidades">{{ $oferta->habilidades }}</textarea>
            
            <label>Empresa:</label>
            <select name="id_empresa" required>
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}" @if($oferta->id_empresa == $empresa->id) selected @endif>{{ $empresa->nombre }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn-success" style="margin-left: 150px">Actualizar</button>
            <div class="btn-container">
                
                <a href="{{ url('/ofertas/tabla') }}" class="btn-danger" style="margin-left: 150px">Cancelar</a>
            </div>
        </form>
    </div>

