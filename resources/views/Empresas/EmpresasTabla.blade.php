<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    <link rel="stylesheet" href="{{ asset('css/EmpresasTabla.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
</head>
<body>
    <div class="container-fluid min-vh-100 d-flex flex-column align-items-center" style="background-image: url('../img/nubes.jpg'); background-size: cover;">
        <div class="table-box">
            <h2 class="table-title">Empresas</h2>
            <div class="d-flex justify-content-start mb-3">
                <a href="{{ route('empresa.nuevo') }}" class="btn btn-success me-2">
                    <i class="fas fa-building"></i> Registrar Nueva Empresa
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th> <!-- Columna para el ID -->
                        <th>Nombre</th>
                        <th>NIT</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empresa as $emp)
                        <tr>
                            <td>{{ $emp->id }}</td> <!-- Mostrar el ID aquí -->
                            <td>{{ $emp->nombre }}</td>
                            <td>{{ $emp->nit }}</td>
                            <td>{{ $emp->direccion }}</td>
                            <td>{{ $emp->telefono }}</td>
                            <td>{{ $emp->email }}</td>
                            <td>
                                <a href="{{ route('empresa.editar', $emp->id) }}" class="btn btn-warning">Editar</a>
                                <a href="{{ route('empresas.borrar', $emp->id) }}" class="btn btn-danger">Borrar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
