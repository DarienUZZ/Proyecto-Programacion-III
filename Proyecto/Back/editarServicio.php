<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir datos del formulario
    $codigo = $_POST['codigo'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $especialidad = $_POST['especialidad'] ?? '';
    $enfermera_a_cargo = $_POST['enfermera_a_cargo'] ?? '';
    $costo = $_POST['costo'] ?? '';

    // Validar datos
    if (empty($codigo) || empty($nombre) || empty($especialidad) || empty($enfermera_a_cargo) || empty($costo)) {
        echo "Todos los campos son requeridos.";
        exit;
    }

    // Actualizar datos en la base de datos
    $sql = "UPDATE servicios SET codigo = ?, nombre = ?, especialidad = ?, enfermera_a_cargo = ?, costo = ? WHERE codigo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssss', $codigo, $nombre, $especialidad, $enfermera_a_cargo, $costo, $codigo);

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