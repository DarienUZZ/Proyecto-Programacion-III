<?php
include 'db.php';

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT); // Encriptar la contraseña
$cedula = $_POST['cedula']; // Obtener la cédula del formulario
$rol = "cliente"; // Asignar el rol de "cliente"

// Verificar si la cédula ya existe en la base de datos
$sql = "SELECT COUNT(*) AS count FROM usuarios WHERE cedula = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $cedula);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row['count'] > 0) {
    // La cédula ya existe
    header("Content-Type: application/json");
    echo json_encode([
        'status' => 'error',
        'message' => 'La cédula ya está registrada.'
    ]);
    exit();
}

// Preparar y ejecutar la consulta para insertar el nuevo usuario
$sql = "INSERT INTO usuarios (cedula, usuario, nombre, apellido1, apellido2, email, telefono, contraseña, rol) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssss", $cedula, $usuario, $nombre, $apellido1, $apellido2, $email, $telefono, $contraseña, $rol);

if ($stmt->execute()) {
    // Usuario creado con éxito
    header("Content-Type: application/json");
    echo json_encode([
        'status' => 'success',
        'message' => 'Nuevo usuario creado con éxito.'
    ]);
} else {
    // Error al crear el usuario
    header("Content-Type: application/json");
    echo json_encode([
        'status' => 'error',
        'message' => 'Error: ' . $stmt->error
    ]);
}

$stmt->close();
$conn->close();
?>