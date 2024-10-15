<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutores Académicos</title>
    <link rel="stylesheet" href="{{ asset('css/EmpresasTabla.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container-fluid min-vh-100 d-flex flex-column align-items-center" style="background-image: url('../img/nubes.jpg'); background-size: cover;">
        <div class="table-box">
            <h2 class="table-title">Tutores Académicos</h2>
            <div class="d-flex justify-content-start mb-3">
                <a href="{{ route('tutor.nuevo') }}" class="btn btn-success me-2">
                    <i class="fas fa-user-tie"></i> Registrar Nuevo Tutor
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
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Programa</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tutores as $tutor)
                        <tr>
                            <td>{{ $tutor->id }}</td>
                            <td>{{ $tutor->nombres }}</td>
                            <td>{{ $tutor->apellidos }}</td>
                            <td>{{ $tutor->programa }}</td>
                            <td>{{ $tutor->email }}</td>
                            <td>{{ $tutor->telefono }}</td>
                            <td>
                                <a href="{{ route('tutor.editar', $tutor->id) }}" class="btn btn-warning">Editar</a>
                                <a href="{{ route('tutor.borrar', $tutor->id) }}" class="btn btn-danger">Borrar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
