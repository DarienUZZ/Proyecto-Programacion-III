<?php
session_start();
include 'C:/xampp/htdocs/Proyecto-Programacion-III/Proyecto/Back/db.php';

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

$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $update_sql = "UPDATE usuarios SET usuario = ?, email = ?, telefono = ? WHERE cedula = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("ssss", $usuario, $email, $telefono, $cedula);


    if ($stmt->execute()) {
        $success = true;
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="../Style.css">
</head>

<body>

    <?php include '../modulos/HeaderUsuario.php' ?>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="edit-profile-card">
                    <div class="edit-profile-header">
                        <h2 class="text-center">Editar Perfil</h2>
                    </div>
                    <div class="edit-profile-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label edit-profile-label">Usuario</label>
                                <input type="text" class="form-control edit-profile-input" name="usuario"
                                    value="<?php echo htmlspecialchars($user['usuario']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label edit-profile-label">Email</label>
                                <input type="email" class="form-control edit-profile-input" name="email"
                                    value="<?php echo htmlspecialchars($user['email']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label edit-profile-label">Teléfono</label>
                                <input type="tel" class="form-control edit-profile-input" name="telefono"
                                    value="<?php echo htmlspecialchars($user['telefono'] ?? ''); ?>">
                            </div>
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn edit-profile-submit-btn">Guardar Cambios</button>
                                <button type="reset" class="btn edit-profile-reset-btn">Cancelar</button>
                                <a href="VistaPerfilUsuario.php" class="btnRegresar">Volver</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            <?php if ($success): ?>
                Swal.fire({
                    title: '¡Éxito!',
                    text: 'Cambios guardados correctamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'VistaPerfilUsuario.php'; // Redirige a la vista de perfil
                    }
                });
            <?php endif; ?>
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>