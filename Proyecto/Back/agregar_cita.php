<?php
session_start();
include 'db.php';

$cedula = $_SESSION['usuario_cedula'];
$id_servicio = $_POST['servicio'];
$fecha = $_POST['fecha']; // echa del formulario
$hora = $_POST['hora']; // hora del formulario

// Combinar fecha y hora en un solo valor de datetime
$fechaHora = $fecha . ' ' . $hora;

$estado = 'pendiente';

// consulta
$sql = "INSERT INTO citas (cedula, id_servicio, fecha, estado) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die('Error en la preparación de la consulta: ' . $conn->error);
}

// Enlazar parámetros
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