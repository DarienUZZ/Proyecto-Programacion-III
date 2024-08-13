<?php
session_start();
include 'C:/xampp/htdocs/Proyecto-Programacion-III/Proyecto/Back/db.php';

if (!isset($_SESSION['usuario_cedula'])) {
    die("No se ha iniciado sesión.");
}

$sql = "SELECT cedula, usuario, nombre, apellido1, apellido2, email, telefono FROM usuarios WHERE rol = 'cliente'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

$usuarios = [];
while ($row = $result->fetch_assoc()) {
    $usuarios[] = $row;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Disponibles</title>
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php include '../modulos/HeaderAdmin.php'; ?>

    <div class="contenedorClientes container">
        <div class="col-12 mb-4">
            <div class="d-flex justify-content-between align-items-center border-bottom">
                <h1 class="tituloDashboard">Listado Clientes</h1>
            </div>
        </div>
        <main class="row">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="serviciosTable" class="table table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Cédula</th>
                                    <th>Usuario</th>
                                    <th>Nombre</th>
                                    <th>Primer Apellido</th>
                                    <th>Segundo Apellido</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($usuarios as $usuario): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($usuario['cedula']); ?></td>
                                        <td><?php echo htmlspecialchars($usuario['usuario']); ?></td>
                                        <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                                        <td><?php echo htmlspecialchars($usuario['apellido1']); ?></td>
                                        <td><?php echo htmlspecialchars($usuario['apellido2']); ?></td>
                                        <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                                        <td><?php echo htmlspecialchars($usuario['telefono']); ?></td>
                                        <td class="action-icons">
                                            <a href="verPerfil.php?cedula=<?php echo $usuario['cedula']; ?>"
                                                title="Ver Perfil" class="view-icon">
                                                <i class="fas fa-user"></i>
                                            </a>
                                            <a href="editarUsuario.php?cedula=<?php echo $usuario['cedula']; ?>"
                                                title="Editar" class="edit-icon">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="/Proyecto-Programacion-III/Proyecto/Back/eliminar-usuario.php"
                                                method="POST" style="display:inline-block;">
                                                <input type="hidden" name="cedula"
                                                    value="<?php echo $usuario['cedula']; ?>">
                                                <button type="submit" class="btn btn-link p-0 delete-icon"
                                                    onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');"
                                                    title="Eliminar">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </main>
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
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#serviciosTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    { extend: 'copy', className: 'btn btn-copy' },
                    { extend: 'csv', className: 'btn btn-csv' },
                    { extend: 'excel', className: 'btn btn-excel' },
                    { extend: 'pdf', className: 'btn btn-pdf' },
                    { extend: 'print', className: 'btn btn-print' }
                ]
            });
        });
    </script>
</body>

</html>