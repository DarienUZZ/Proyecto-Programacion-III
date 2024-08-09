<?php

session_start();
include 'db.php';

if (!isset($_SESSION['usuario_cedula'])) {
    die("No se ha iniciado sesión.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir datos del formulario
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $especialidad = $_POST['especialidad'];
    $enfermera_a_cargo = $_POST['enfermera_a_cargo'];
    $costo = $_POST['costo'];

    // Validar datos
    if (empty($codigo) || empty($nombre) || empty($especialidad) || empty($enfermera_a_cargo) || empty($costo)) {
        echo "Todos los campos son requeridos.";
        exit;
    }

    // Insertar datos en la base de datos
    $sql = "INSERT INTO servicios (codigo, nombre, especialidad, enfermera_a_cargo, costo) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssi', $codigo, $nombre, $especialidad, $enfermera_a_cargo, $costo);

    if ($stmt->execute()) {
        header('Location: ../Front/vista-admin/vistaServicios.php');
        exit;
    } else {
        echo "Error al agregar el servicio: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>