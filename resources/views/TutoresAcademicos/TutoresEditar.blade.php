<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tutor Académico</title>
    <link rel="stylesheet" href="{{ asset('css/TutoresAcademicoEditar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<style>
    .container {
    background-color: white;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 500px;  /* Ancho reducido */
    width: 100%;
    margin: 20px;
}
</style>
<body>
    <div class="container">
        <h2 class="mt-5">Editar Tutor Académico</h2>

        <form action="{{ route('tutor.actualizar', $tutor->id) }}" method="POST">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $tutor->nombres }}" required>
            </div>

            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $tutor->apellidos }}" required>
            </div>

            <div class="mb-3">
                <label for="programa" class="form-label">Programa</label>
                <input type="text" class="form-control" id="programa" name="programa" value="{{ $tutor->programa }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $tutor->email }}" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $tutor->telefono }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('tutor.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
