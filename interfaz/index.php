<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión - Spa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg rounded">
                <div class="card-header text-center">
                    <h4>Iniciar sesión</h4>
                </div>
                <div class="card-body">
                    <form action="php/login_cliente.php" method="POST">
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo" required>
                        </div>
                        <div class="mb-3">
                            <label for="contrasena" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </div>
                    </form>
                    <div class="mt-3 text-center">
                        <a href="registro.php">¿No tienes cuenta? Regístrate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>