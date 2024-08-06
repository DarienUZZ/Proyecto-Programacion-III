<?php
session_start();
include 'db.php';

$cedula = $_SESSION['usuario_cedula']; // Ajusta este nombre de variable según cómo guardes la cédula en la sesión

// Consulta para obtener las citas del usuario
$sql = "SELECT citas.fecha, 
               DATE_FORMAT(citas.fecha, '%H:%i') AS hora, 
               servicios.nombre AS especialidad, 
               servicios.enfermera_a_cargo AS doctor, 
               citas.estado 
        FROM citas 
        JOIN servicios ON citas.id_servicio = servicios.id 
        WHERE citas.cedula = ?"; // Cambiar 'id_usuario' a 'cedula'
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $cedula); // Cambiar 'i' a 's' para cédula (VARCHAR)
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