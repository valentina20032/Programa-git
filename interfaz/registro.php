<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Cliente - Spa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg rounded">
                <div class="card-header text-center">
                    <h4>Registro de Cliente</h4>
                </div>
                <div class="card-body">
                    <form action="php/insertar_cliente.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="apellido" required>
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" name="correo" required>
                        </div>
                        <div class="mb-3">
                            <label for="celular" class="form-label">Número de celular</label>
                            <input type="text" class="form-control" name="celular" required>
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="number" class="form-control" name="edad" required>
                        </div>
                        <div class="mb-3">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select class="form-select" name="sexo" required>
                                <option value="">Selecciona una opción</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" required>
                        </div>
                        <div class="mb-3">
                            <label for="contrasena" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="contrasena" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Siguiente</button>
                        </div>
                    </form>
                    <div class="mt-3 text-center">
                        <a href="index.php">¿Ya tienes cuenta? Inicia sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>