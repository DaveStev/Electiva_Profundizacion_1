<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="{{ asset('css/EmpresasTabla.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid min-vh-100 d-flex flex-column align-items-center" style="background-image: url('../img/nubes.jpg'); background-size: cover;">
        <div class="table-box">
            <h2 class="table-title">Estudiantes</h2>
            <div class="d-flex justify-content-start mb-3">
                <a href="{{ route('estudiante.nuevo') }}" class="btn btn-success me-2">Registrar Nuevo Estudiante</a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $est)
                        <tr>
                            <td>{{ $est->id }}</td>
                            <td>{{ $est->nombres }}</td>
                            <td>{{ $est->apellidos }}</td>
                            <td>
                                <a href="{{ route('estudiante.editar', $est->id) }}" class="btn btn-warning">Editar</a>
                                <a href="{{ route('estudiante.borrar', $est->id) }}" class="btn btn-danger">Borrar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
