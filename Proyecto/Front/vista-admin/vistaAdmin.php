<?php
session_start();
include 'C:/xampp/htdocs/Proyecto-Programacion-III/Proyecto/Back/db.php';

if (!isset($_SESSION['usuario_cedula'])) {
    die("No se ha iniciado sesión.");
}

$sql = "SELECT COUNT(*) as total FROM usuarios
WHERE usuarios.rol = 'cliente'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$ConteoTotalUsuarios = $row['total'];

$sql = "SELECT codigo, nombre, especialidad, enfermera_a_cargo, costo FROM servicios";
$result = $conn->query($sql);

$servicios = [];
while ($row = $result->fetch_assoc()) {
    $servicios[] = $row;
}

$stmt->close();
$conn->close();
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

    <div class="contenedorVistaAdmin container">
        <main class="row">
            <div class="col-12 mb-4">
                <div class="d-flex justify-content-between align-items-center border-bottom">
                    <h1 class="tituloDashboard">Dashboard</h1>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4 mb-3">
                    <div class="card cardVistaAdmin">
                        <div class="card-body">
                            <h5 class="card-title cardTituloVistaAdmin">Total Clientes</h5>
                            <p class="card-text cardTextoVistaAdmin">
                                <?php echo htmlspecialchars($ConteoTotalUsuarios); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card cardVistaAdmin">
                        <div class="card-body">
                            <h5 class="card-title cardTituloVistaAdmin">Administrar Clientes</h5>
                            <a href="../vista-admin/vistaAdminClientes.php" class="btn btnVistaAdmin">Leer Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card cardVistaAdmin">
                        <div class="card-body">
                            <h5 class="card-title cardTituloVistaAdmin">Administrar Servicios</h5>
                            <a href="../vista-admin/vistaServicios.php" class="btn btnVistaAdmin">Leer Más</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Lista Servicios</h5>
                    <div class="table-responsive">
                        <table id="serviciosTable" class="table table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Especialidad</th>
                                    <th>Enfermera a Cargo</th>
                                    <th>Costo</th>
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