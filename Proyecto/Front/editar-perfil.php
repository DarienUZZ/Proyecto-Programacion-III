<?php
session_start();
include '../Back/db.php';

if (!isset($_SESSION['usuario_cedula'])) {
    die("No se ha iniciado sesión.");
}

$cedula = $_SESSION['usuario_cedula'];

$sql = "SELECT * FROM usuarios WHERE cedula = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $cedula);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    die("Usuario no encontrado");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $update_sql = "UPDATE usuarios SET usuario = ?, nombre = ?, apellido1 = ?, apellido2 = ?, email = ?, telefono = ? WHERE cedula = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("sssssss", $usuario, $nombre, $apellido1, $apellido2, $email, $telefono, $cedula);

    if ($stmt->execute()) {
        header("Location: VistaPerfilUsuario.php");
        exit();
    } else {
        echo "Error al actualizar el perfil.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Style.css">
</head>

<body>

    <?php include '../modulos/HeaderUsuario.php' ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mb-4">Editar Perfil</h2>
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="usuario"
                            value="<?php echo htmlspecialchars($user['usuario']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre"
                            value="<?php echo htmlspecialchars($user['nombre']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Primer Apellido</label>
                        <input type="text" class="form-control" name="apellido1"
                            value="<?php echo htmlspecialchars($user['apellido1']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Segundo Apellido</label>
                        <input type="text" class="form-control" name="apellido2"
                            value="<?php echo htmlspecialchars($user['apellido2'] ?? ''); ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email"
                            value="<?php echo htmlspecialchars($user['email']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" name="telefono"
                            value="<?php echo htmlspecialchars($user['telefono'] ?? ''); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>