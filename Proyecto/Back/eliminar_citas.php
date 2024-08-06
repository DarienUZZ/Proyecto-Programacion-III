<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Consulta para eliminar todas las citas
    $sql = "DELETE FROM citas";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Todas las citas han sido eliminadas.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al eliminar citas: ' . $conn->error]);
    }
    $conn->close();
}
?>