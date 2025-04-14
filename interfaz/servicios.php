<?php
session_start();
if (!isset($_SESSION['cliente_id'])) {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servicios del Spa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Nuestros Servicios</h2>

    <?php
    $servicios = [
        "Masajes",
        "Manicure",
        "Pedicure",
        "Sauna",
        "Limpieza Facial"
    ];

    foreach ($servicios as $servicio) {
        echo '
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">' . $servicio . '</h5>
                <p class="card-text">Duración: 1 hora</p>
                <p class="card-text">Costo: $20</p>
                <form action="php/reservar.php" method="POST" class="row g-3">
                    <input type="hidden" name="servicio" value="' . $servicio . '">
                    <div class="col-md-6">
                        <label for="fecha_' . $servicio . '" class="form-label">Fecha:</label>
                        <input type="date" class="form-control" name="fecha" required>
                    </div>
                    <div class="col-md-6">
                        <label for="hora_' . $servicio . '" class="form-label">Hora:</label>
                        <input type="time" class="form-control" name="hora" required>
                    </div>
                    <div class="col-12 text-end mt-3">
                        <button type="submit" class="btn btn-success">Reservar</button>
                    </div>
                </form>
            </div>
        </div>';
    }
    ?>
</div>
</body>
</html>