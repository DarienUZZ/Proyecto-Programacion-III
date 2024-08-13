<?php
session_start();
include 'C:/xampp/htdocs/Proyecto-Programacion-III/Proyecto/Back/db.php';

if (!isset($_SESSION['usuario_cedula'])) {
    die("No se ha iniciado sesión.");
}

if (isset($_POST['accion']) && isset($_POST['id_cita'])) {
    $id_cita = $_POST['id_cita'];
    $accion = $_POST['accion'];

    if ($accion === 'atendida' || $accion === 'cancelada') {
        $update_sql = "UPDATE citas SET estado = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("si", $accion, $id_cita);
        $update_stmt->execute();
        $update_stmt->close();
    }
}

// Obtener los datos del usuario
if (isset($_GET['cedula'])) {
    $id = $_GET['cedula'];

    $sql = "SELECT cedula, usuario, nombre, apellido1, apellido2, email, telefono FROM usuarios WHERE cedula = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
    } else {
        die("Usuario no encontrado.");
    }

    $stmt->close();

    // Obtener las citas del usuario
    $sql_citas = "SELECT citas.id, citas.fecha, 
                DATE_FORMAT(citas.fecha, '%d/%m/%Y') AS fecha_formateada,
                DATE_FORMAT(citas.fecha, '%H:%i') AS hora, 
                  servicios.nombre AS especialidad, servicios.enfermera_a_cargo AS doctor, 
                  citas.estado 
                  FROM citas 
                  JOIN servicios ON citas.id_servicio = servicios.id 
                  WHERE citas.cedula = ?";
    $stmt_citas = $conn->prepare($sql_citas);
    $stmt_citas->bind_param("s", $id);
    $stmt_citas->execute();
    $result_citas = $stmt_citas->get_result();

    $citas = [];
    while ($row = $result_citas->fetch_assoc()) {
        $citas[] = $row;
    }

    $stmt_citas->close();
    $conn->close();
} else {
    die("ID no proporcionado.");
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php include '../modulos/HeaderAdmin.php'; ?>

    <div class="contendorPerfil container">
        <div class="profile-card p-4">
            <div class="profile-header text-center mb-4">
                <i class="fas fa-user-circle fa-5x"></i>
                <h2 class="mt-2 profile-name">
                    <?php echo htmlspecialchars($usuario['nombre'] . ' ' . $usuario['apellido1'] . ' ' . $usuario['apellido2']); ?>
                </h2>
                <p class="profile-email">
                    <?php echo htmlspecialchars($usuario['email']); ?><br>
                    Cédula: <?php echo htmlspecialchars($usuario['cedula']); ?>
                </p>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="etiquetasPerfil form-label">Usuario</label>
                    <input type="text" class="form-control profile-input"
                        value="<?php echo htmlspecialchars($usuario['usuario']); ?>" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="etiquetasPerfil form-label">Nombre</label>
                    <input type="text" class="form-control profile-input"
                        value="<?php echo htmlspecialchars($usuario['nombre']); ?>" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="etiquetasPerfil form-label">Primer Apellido</label>
                    <input type="text" class="form-control profile-input"
                        value="<?php echo htmlspecialchars($usuario['apellido1']); ?>" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="etiquetasPerfil form-label">Segundo Apellido</label>
                    <input type="text" class="form-control profile-input"
                        value="<?php echo htmlspecialchars($usuario['apellido2'] ?? ''); ?>" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="etiquetasPerfil form-label">Email</label>
                    <input type="email" class="form-control profile-input"
                        value="<?php echo htmlspecialchars($usuario['email']); ?>" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="etiquetasPerfil form-label">Teléfono</label>
                    <input type="tel" class="form-control profile-input"
                        value="<?php echo htmlspecialchars($usuario['telefono'] ?? ''); ?>" readonly>
                </div>
            </div>
        </div>

        <div class="col-12 mb-4 mt-4">
            <div class="d-flex justify-content-between align-items-center border-bottom">
                <h2 class="tituloDashboard">Listado de Citas</h2>
            </div>
        </div>
        <div class="table-responsive">
            <table id="citasTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Especialidad</th>
                        <th>Doctor</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($citas as $cita): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($cita['fecha_formateada']); ?></td>
                            <td><?php echo htmlspecialchars($cita['hora']); ?></td>
                            <td><?php echo htmlspecialchars($cita['especialidad']); ?></td>
                            <td><?php echo htmlspecialchars($cita['doctor']); ?></td>
                            <td><?php echo htmlspecialchars($cita['estado']); ?></td>
                            <td>
                                <?php if ($cita['estado'] == 'pendiente'): ?>
                                    <form method="post"
                                        action="<?php echo $_SERVER['PHP_SELF'] . '?cedula=' . $_GET['cedula']; ?>"
                                        onsubmit="return confirm('¿Está seguro de que desea realizar esta acción?');">
                                        <input type="hidden" name="id_cita"
                                            value="<?php echo htmlspecialchars($cita['id']); ?>">
                                        <button type="submit" name="accion" value="atendida"
                                            class="btn btn-success btn-sm">Atendida</button>
                                        <button type="submit" name="accion" value="cancelada"
                                            class="btn btn-danger btn-sm">Cancelar</button>
                                    </form>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


        <a href="vistaAdminClientes.php" class="btn btn-secondary">Volver</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#citasTable').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.11.5/i18n/es_es.json"
                },
                "paging": true,
                "searching": true
            });
        });
    </script>
</body>

</html>