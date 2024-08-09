<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cedula = $_POST['cedula'];

    $sql = "DELETE FROM usuarios WHERE cedula = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $cedula);

    if ($stmt->execute()) {
        $_SESSION['mensaje'] = "Usuario eliminado correctamente.";
    } else {
        $_SESSION['mensaje'] = "Error al eliminar el usuario.";
    }


    $stmt->close();
    $conn->close();

    header("Location: ../Front/vista-admin/vistaAdminClientes.php");
    exit();
} else {
    die("Método no permitido.");
}
?>