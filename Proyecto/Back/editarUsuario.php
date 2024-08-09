<?php
session_start();
include 'db.php';

if (!isset($_SESSION['usuario_cedula'])) {
    die("No se ha iniciado sesión.");
}

if (isset($_GET['cedula']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $cedula = $_GET['cedula'];

    // Obtener los valores enviados por el formulario
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // Preparar la consulta SQL para actualizar los datos del usuario
    $sql = "UPDATE usuarios SET usuario = ?, nombre = ?, apellido1 = ?, apellido2 = ?, email = ?, telefono = ? WHERE cedula = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $usuario, $nombre, $apellido1, $apellido2, $email, $telefono, $cedula);

    if ($stmt->execute()) {
        // Redirigir al usuario a la página de vista después de la actualización
        header("Location: ../Front/vista-admin/vistaAdminClientes.php");
        exit();
    } else {
        die("Error al actualizar el usuario: " . $stmt->error);
    }

    $stmt->close();
} else {
    die("Datos no proporcionados.");
}

$conn->close();
?>