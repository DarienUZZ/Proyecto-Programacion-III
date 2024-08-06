<?php
session_start();
include 'db.php';
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Preparar y ejecutar la consulta
$sql = "SELECT cedula, contraseña, rol FROM usuarios WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    // Verificar la contraseña
    if (password_verify($contraseña, $row['contraseña'])) {
        // Contraseña correcta
        $_SESSION['usuario_cedula'] = $row['cedula'];
        $_SESSION['rol'] = $row['rol'];
        header("Location: ../Front/VistaCliente.php"); // Redirige a la sección privada
        exit();
    } else {
        // Contraseña incorrecta
        header("Location: ../Front/login.php?error=1");
        exit();
    }
} else {
    // Usuario no encontrado
    header("Location: ../Front/login.php?error=1");
    exit();
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>