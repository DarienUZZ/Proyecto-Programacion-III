<?php
session_start();
include 'C:/xampp/htdocs/Proyecto-Programacion-III/Proyecto/Back/db.php';

if (!isset($_SESSION['usuario_cedula'])) {
    die("No se ha iniciado sesión.");
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];

    // Eliminar servicio
    $sql = "DELETE FROM servicios WHERE codigo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $codigo);
    $stmt->execute();
    $stmt->close();
}

$sql = "SELECT codigo, nombre, especialidad, enfermera_a_cargo, costo FROM servicios";
$result = $conn->query($sql);

$servicios = [];
while ($row = $result->fetch_assoc()) {
    $servicios[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">

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

    <div class="contenedorVistaPerfil container">
        <main class="row">
            <div class="col-12 mb-4">
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center border-bottom">
                    <h1 class="tituloDashboard mb-2 mb-md-0">Listado Servicios</h1>
                    <a href="vistaCrearServicio.php" class="btnAgregarServicio">Agregar Nuevo
                        Servicio</a>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="serviciosTable" class="table table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Especialidad</th>
                                    <th>Enfermera a Cargo</th>
                                    <th>Costo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($servicios as $servicio): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($servicio['codigo']); ?></td>
                                        <td><?php echo htmlspecialchars($servicio['nombre']); ?></td>
                                        <td><?php echo htmlspecialchars($servicio['especialidad']); ?></td>
                                        <td><?php echo htmlspecialchars($servicio['enfermera_a_cargo']); ?></td>
                                        <td><?php echo htmlspecialchars(number_format($servicio['costo'], 2)); ?></td>
                                        <td>
                                            <a href="vistaEditarServicio.php?codigo=<?php echo urlencode($servicio['codigo']); ?>"
                                                class="btn btn-warning btn-sm">Editar</a>
                                            <form method="post" action="" style="display:inline;"
                                                onsubmit="return confirm('¿Está seguro de que desea eliminar este servicio?');">
                                                <input type="hidden" name="codigo"
                                                    value="<?php echo htmlspecialchars($servicio['codigo']); ?>">
                                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
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