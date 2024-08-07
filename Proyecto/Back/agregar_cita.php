<?php
session_start();
include 'db.php';

// Obtener datos del formulario
$cedula = $_SESSION['usuario_cedula']; // Ajusta este nombre de variable según cómo guardes la cédula en la sesión
$id_servicio = $_POST['servicio'];
$fechaHora = $_POST['fechaHora'];
$estado = 'pendiente';

// Preparar la consulta SQL
$sql = "INSERT INTO citas (cedula, id_servicio, fecha, estado) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Verificar si la preparación de la consulta fue exitosa
if ($stmt === false) {
    die('Error en la preparación de la consulta: ' . $conn->error);
}

// Enlazar los parámetros
$stmt->bind_param("siss", $cedula, $id_servicio, $fechaHora, $estado);

// Ejecutar la consulta
if ($stmt->execute()) {
    header("Location: ../Front/VistaCliente.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la consulta y la conexión
$stmt->close();
$conn->close();
?>