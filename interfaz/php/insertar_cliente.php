<?php
require_once "db.php";

$correo = $_POST['correo'];
$celular = $_POST['celular'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
$fecha_nacimiento = $_POST['fecha_nacimiento'];

$sql = "INSERT INTO clientes (correo, celular, nombre, apellido, edad, sexo, contrasena, fecha_nacimiento) 
        VALUES ('$correo', '$celular', '$nombre', '$apellido', '$edad', '$sexo', '$contrasena', '$fecha_nacimiento')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php?registro=exitoso");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

