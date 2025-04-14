<?php
session_start();
require_once("php/db.php");

// Verificar si el cliente ha iniciado sesión
if (!isset($_SESSION['cliente_id'])) {
    echo "Debes iniciar sesión para hacer una reserva.";
    exit;
}

// Obtener datos del formulario
$cliente_id = $_SESSION['cliente_id'];
$servicio = $_POST['servicio'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

// Validar que los datos no estén vacíos
if (empty($servicio) || empty($fecha) || empty($hora)) {
    echo "Todos los campos son obligatorios.";
    exit;
}

// Insertar la reserva en la base de datos
$sql = "INSERT INTO reservas (cliente_id, servicio, fecha, hora)
        VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("isss", $cliente_id, $servicio, $fecha, $hora);

if ($stmt->execute()) {
    echo "Reserva realizada con éxito.";
    // Redirigir de vuelta a servicios.php o a una página de confirmación
    header("Location: ../servicios.php?reserva=ok");
    exit;
} else {
    echo "Error al registrar la reserva: " . $conn->error;
}
?>
