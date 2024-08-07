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
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

</head>

<body>

    <?php include '../modulos/HeaderUsuario.php' ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="profile-container p-4">


                    <div class="text-center mb-4">
                        <i class="fas fa-user-circle fa-5x"></i>

                        <h2 class="mt-2">
                            <?php echo htmlspecialchars($user['nombre'] . ' ' . $user['apellido1'] . ' ' . $user['apellido2']); ?>
                        </h2>
                        <p><?php echo htmlspecialchars($user['email']); ?><br>
                            Cédula: <?php echo htmlspecialchars($user['cedula']); ?></p>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Usuario</label>
                            <input type="text" class="form-control"
                                value="<?php echo htmlspecialchars($user['usuario']); ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control"
                                value="<?php echo htmlspecialchars($user['nombre']); ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Primer Apellido</label>
                            <input type="text" class="form-control"
                                value="<?php echo htmlspecialchars($user['apellido1']); ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Segundo Apellido</label>
                            <input type="text" class="form-control"
                                value="<?php echo htmlspecialchars($user['apellido2'] ?? ''); ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control"
                                value="<?php echo htmlspecialchars($user['email']); ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="tel" class="form-control"
                                value="<?php echo htmlspecialchars($user['telefono'] ?? ''); ?>" readonly>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Rol</label>
                            <input type="text" class="form-control"
                                value="<?php echo htmlspecialchars($user['rol']); ?>" readonly>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <a href="editar-perfil.php" class="btn btn-primary">Editar Perfil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var navbarToggler = document.querySelector('.navbar-toggler');
            var navbarCollapse = document.querySelector('.navbar-collapse');

            navbarToggler.addEventListener('click', function (e) {
                e.preventDefault();
                if (navbarCollapse.style.display === 'block') {
                    navbarCollapse.style.display = 'none';
                } else {
                    navbarCollapse.style.display = 'block';
                }
            });
        });
    </script>
</body>

</html>