<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Tutor Empresarial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-image: url('../img/Fondo2.jpg'); 
            background-size: cover; 
        }

        .header {
            color: black; 
            padding: 20px; 
            text-align: center; 
        }

        .container {
            max-width: 800px;
            margin: auto; 
            padding: 20px; 
        }

        .table-box {
            padding: 20px; 
            background-color: #f9f9f9; 
            border: 2px solid #ccc; 
            border-radius: 10px; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
            margin-top: 20px; 
        }

        label {
            display: block; 
            margin-bottom: 5px; 
        }

        input, select {
            width: 100%; 
            padding: 10px; 
            margin-bottom: 15px; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
        }

        button, .btn-cancelar {
            font-family: 'Barlow Condensed', sans-serif; 
            font-size: 18px; 
            padding: 10px 20px;
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            transition: background-color 0.3s ease; 
            margin: 5px; 
        }

        .btn-guardar {
            background-color: #28a745; 
            color: white; 
        }

        .btn-guardar:hover {
            background-color: #218838;
        }

        .btn-cancelar {
            background-color: #dc3545;
            color: white; 
        }

        .btn-cancelar:hover {
            background-color: #c82333; 
        }

        .button-container {
            text-align: center; 
            margin-top: 20px; 
        }
    </style>
</head>
<body>


<div class="container">
    <div class="table-box">
    <h1 style="text-align: center;">Agregar Tutor Empresarial</h1>
        <form action="{{ route('tutoresEmp.guardar') }}" method="POST">
            @csrf
            <label for="id_empresa">Empresa:</label>
            <select name="id_empresa" id="id_empresa" required>
                <option value="">Seleccionar Empresa</option>
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                @endforeach
            </select>

            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" id="nombres" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" required>

            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" id="cargo" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" required>

            <div class="button-container">
                <button type="submit" class="btn-guardar">Guardar</button>
                <a href="{{ url('/tutores-empresariales/tabla') }}" class="btn-cancelar">Cancelar</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>


