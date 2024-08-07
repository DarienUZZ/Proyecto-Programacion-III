<?php
session_start();
include 'db.php';

$cedula = $_SESSION['usuario_cedula'];

// Consulta para obtener las citas del usuario
$sql = "SELECT citas.fecha, 
               DATE_FORMAT(citas.fecha, '%H:%i') AS hora, 
               servicios.nombre AS especialidad, 
               servicios.enfermera_a_cargo AS doctor, 
               citas.estado 
        FROM citas 
        JOIN servicios ON citas.id_servicio = servicios.id 
        WHERE citas.cedula = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $cedula);
$stmt->execute();
$result = $stmt->get_result();

$citas = [];
while ($row = $result->fetch_assoc()) {
    $citas[] = $row;
}

$stmt->close();
$conn->close();

echo json_encode($citas);
?>