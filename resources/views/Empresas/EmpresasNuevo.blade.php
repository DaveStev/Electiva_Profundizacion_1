<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empresa</title>
    <link rel="stylesheet" href="{{ asset('css/EmpresasNuevo.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="{{ asset('js/Nit.js') }}" defer></script> <!-- Llamada al archivo Nit.js -->
</head>
<body>
    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center" style="background-image: url('../img/Fondo2.jpg'); background-size: cover;">
        <div class="table-box bg-white p-4 rounded shadow" style="width: 100%; max-width: 600px;">
            <h2 class="text-center" style="font-weight: bold;">Registrar Empresa</h2>

            <form action="{{ route('guardar_nuevo')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre de la Empresa:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nit" class="form-label">NIT:</label>
                    <input type="text" id="nit" name="nit" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="number" id="telefono" name="telefono" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Registrar</button>
                    <a href="{{ route('empresa.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
