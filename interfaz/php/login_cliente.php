<?php
session_start();
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT id, contrasena FROM clientes WHERE correo = '$correo'";
    $resultado = $conn->query($sql);

    if ($resultado && $resultado->num_rows === 1) {
        $fila = $resultado->fetch_assoc();
        if (password_verify($contrasena, $fila['contrasena'])) {
            $_SESSION['cliente_id'] = $fila['id'];
            header("Location: ../servicios.php"); // ✅ Redirección correcta al módulo de servicios
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Correo no encontrado.";
    }
}

$conn->close();
?>
