<?php
session_start();
include 'db.php';

$cedula = $_SESSION['usuario_cedula']; // Ajusta este nombre de variable según cómo guardes la cédula en la sesión
$id_servicio = $_POST['servicio'];
$fecha = $_POST['fecha'];
$estado = 'pendiente';

// Preparar y ejecutar la consulta para insertar la cita
$sql = "INSERT INTO citas (cedula, id_servicio, fecha, estado) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siss", $cedula, $id_servicio, $fecha, $estado);

if ($stmt->execute()) {
    header("Location: ../Front/VistaCliente.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>