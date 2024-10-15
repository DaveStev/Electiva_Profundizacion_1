<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Tutor</title>
    <link rel="stylesheet" href="{{ asset('css/tutornuevo.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="form-container">
        <h2 class="mb-4">Registrar Nuevo Tutor Académico</h2>

        <form action="{{ route('tutor.guardar') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" required>
            </div>

            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>

            <div class="mb-3">
                <label for="programa" class="form-label">Programa</label>
                <input type="text" class="form-control" id="programa" name="programa" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="{{ route('tutor.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
