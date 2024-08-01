<?php
include 'db.php';
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT); // Encriptar la contraseña
$rol = "cliente"; // Asignar el rol de "cliente"

// Preparar y ejecutar la consulta
$sql = "INSERT INTO usuarios (usuario, nombre, apellido1, apellido2, email, telefono, contraseña, rol) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $usuario, $nombre, $apellido1, $apellido2, $email, $telefono, $contraseña, $rol);

if ($stmt->execute()) {
    echo "Nuevo usuario creado con éxito.";
    header("Location:../Front/Login.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
