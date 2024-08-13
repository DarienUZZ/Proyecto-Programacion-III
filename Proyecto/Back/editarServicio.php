<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $especialidad = $_POST['especialidad'] ?? '';
    $enfermera_a_cargo = $_POST['enfermera_a_cargo'] ?? '';
    $costo = $_POST['costo'] ?? '';
    $codigo = $_GET['codigo'] ?? '';

    // Validar datos
    if (empty($nombre) || empty($especialidad) || empty($enfermera_a_cargo) || empty($costo)) {
        echo "Todos los campos son requeridos.";
        exit;
    }

    // Actualizar datos en la base de datos
    $sql = "UPDATE servicios SET nombre = ?, especialidad = ?, enfermera_a_cargo = ?, costo = ? WHERE codigo = ?";
    $stmt = $conn->prepare($sql);

    // Usa 'd' para el costo si es un número decimal
    $stmt->bind_param('ssssd', $nombre, $especialidad, $enfermera_a_cargo, $costo, $codigo);

    if ($stmt->execute()) {
        echo "Servicio actualizado con éxito.";
        header('Location: ../Front/vista-admin/vistaServicios.php');
        exit;
    } else {
        echo "Error al actualizar el servicio: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
