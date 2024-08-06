<?php
session_start();
include 'db.php';

// Consulta para obtener todos los servicios
$sql = "SELECT id, codigo, nombre, especialidad, enfermera_a_cargo, costo FROM servicios";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    // Manejo de errores en la preparación de la consulta
    http_response_code(500);
    echo json_encode(['error' => 'Error en la consulta: ' . $conn->error]);
    exit;
}

$stmt->execute();
$result = $stmt->get_result();

$servicios = [];
while ($row = $result->fetch_assoc()) {
    $servicios[] = $row;
}

$stmt->close();
$conn->close();

header('Content-Type: application/json');
echo json_encode($servicios);
?>