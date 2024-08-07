<?php
// Conectar a la base de datos
include 'db.php';

// Contraseña en texto plano
$contraseña_plano = '123'; // Reemplaza esto con la contraseña que quieras hashear

// Hashear la contraseña
$contraseña_hash = password_hash($contraseña_plano, PASSWORD_DEFAULT);

// ID del admin o condición para identificar el admin
$cedula_admin = '123456789'; // Reemplaza con la cédula del admin

// Actualizar la contraseña en la base de datos
$sql = "UPDATE usuarios SET contraseña = ? WHERE cedula = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $contraseña_hash, $cedula_admin);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Contraseña actualizada correctamente.";
} else {
    echo "Error al actualizar la contraseña.";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>