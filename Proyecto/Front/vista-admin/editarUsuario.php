<?php session_start();
include 'C:/xampp/htdocs/Proyecto-Programacion-III/Proyecto/Back/db.php';
if (!isset($_SESSION['usuario_cedula'])) {
    die("No se ha iniciado sesión.");
}
if (isset($_GET['cedula'])) {
    $cedula = $_GET['cedula'];
    $sql = "SELECT cedula, usuario, nombre, apellido1, apellido2, email, telefono FROM usuarios WHERE cedula = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $cedula);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
    } else {
        die("Usuario no encontrado.");
    }
    $stmt->close();
} else {
    die("ID no proporcionado.");
} ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body> <?php include '../modulos/HeaderAdmin.php'; ?>
    <div class="contenedorEditarPerfil container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="edit-profile-card">
                    <div class="edit-profile-header">
                        <h2 class="tituloCar0 text-center">Editar Usuario</h2>
                    </div>
                    <div class="edit-profile-body">
                        <form method="POST"
                            action="/Proyecto-Programacion-III/Proyecto/Back/editarUsuario.php?cedula=<?php echo $cedula; ?>">
                            <div class="mb-3"> <label class="form-label">Usuario</label> <input type="text"
                                    class="form-control edit-profile-input" name="usuario"
                                    value="<?php echo htmlspecialchars($usuario['usuario']); ?>" required> </div>
                            <div class="mb-3"> <label class="form-label">Nombre</label> <input type="text"
                                    class="form-control edit-profile-input" name="nombre"
                                    value="<?php echo htmlspecialchars($usuario['nombre']); ?>" required> </div>
                            <div class="mb-3"> <label class="form-label">Primer Apellido</label> <input type="text"
                                    class="form-control edit-profile-input" name="apellido1"
                                    value="<?php echo htmlspecialchars($usuario['apellido1']); ?>" required> </div>
                            <div class="mb-3"> <label class="form-label">Segundo Apellido</label> <input type="text"
                                    class="form-control edit-profile-input" name="apellido2"
                                    value="<?php echo htmlspecialchars($usuario['apellido2']); ?>"> </div>
                            <div class="mb-3"> <label class="form-label">Email</label> <input type="email"
                                    class="form-control edit-profile-input" name="email"
                                    value="<?php echo htmlspecialchars($usuario['email']); ?>" required> </div>
                            <div class="mb-3"> <label class="form-label">Teléfono</label> <input type="text"
                                    class="form-control edit-profile-input" name="telefono"
                                    value="<?php echo htmlspecialchars($usuario['telefono']); ?>"> </div>
                            <div class="d-flex justify-content-start"> <button type="submit"
                                    class="btn edit-profile-submit-btn">Guardar Cambios</button> <button type="reset"
                                    class="btn edit-profile-reset-btn">Cancelar</button> <a
                                    href="vistaAdminClientes.php" class="btnRegresar">Volver</a> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script> document.addEventListener('DOMContentLoaded', function () { <?php if ($success): ?> Swal.fire({ title: '¡Éxito!', text: 'Cambios guardados correctamente.', icon: 'success', confirmButtonText: 'Aceptar' }).then((result) => { if (result.isConfirmed) { window.location.href = 'vistaAdminClientes.php'; } }); <?php endif; ?> }); </script>
</body>

</html>