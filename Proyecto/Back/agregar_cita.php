<?php
session_start();
include 'db.php';

// Obtener datos del formulario
$cedula = $_SESSION['usuario_cedula'];
$id_servicio = $_POST['servicio'];
$fechaHora = $_POST['fechaHora'];
$estado = 'pendiente';

$sql = "INSERT INTO citas (cedula, id_servicio, fecha, estado) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die('Error en la preparación de la consulta: ' . $conn->error);
}

$stmt->bind_param("siss", $cedula, $id_servicio, $fechaHora, $estado);

if ($stmt->execute()) {
    header("Location: ../Front/vista-usuario/historial-citas.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>