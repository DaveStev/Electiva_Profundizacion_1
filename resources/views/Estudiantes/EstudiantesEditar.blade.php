<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
    <link rel="stylesheet" href="{{ asset('css/EmpresasEditar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-image: url('{{ asset('img/Fondo2.jpg') }}'); 
        background-size: cover; 
    }
</style>
<body>
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
        <div class="table-box bg-white p-4 rounded shadow" style="width: 100%; max-width: 600px;">
            <h2 class="text-center" style="font-weight: bold;">Editar Estudiante</h2>

            <form action="{{ route('estudiante.actualizar', $estudiante->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombres:</label>
                    <input type="text" id="nombres" name="nombres" class="form-control" value="{{ $estudiante->nombres }}" required>
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" class="form-control" value="{{ $estudiante->apellidos }}" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a href="{{ route('estudiante.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
