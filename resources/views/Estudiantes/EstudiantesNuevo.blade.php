<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Estudiante</title>
    <link rel="stylesheet" href="{{ asset('css/EmpresasNuevo.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center" style="background-image: url('../img/Fondo2.jpg'); background-size: cover;">
        <div class="table-box bg-white p-4 rounded shadow" style="width: 100%; max-width: 600px;">
            <h2 class="text-center" style="font-weight: bold;">Registrar Estudiante</h2>

            <form action="{{ route('estudiante.guardar') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombres:</label>
                    <input type="text" id="nombres" name="nombres" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Registrar</button>
                    <a href="{{ route('estudiante.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
