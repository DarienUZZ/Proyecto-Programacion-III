<?php
session_start();
include '../Back/db.php';

$cedula = $_SESSION['usuario_cedula']; // Si no se usa en esta consulta, puedes omitirla.

$sql = "SELECT codigo, nombre, especialidad, enfermera_a_cargo, costo FROM servicios";
$result = $conn->query($sql);

$servicios = [];
while ($row = $result->fetch_assoc()) {
    $servicios[] = $row;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Servicios Disponibles</title>
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php include '../modulos/HeaderUsuario.php' ?>
    <div class="container my-5">
        <h2 class="my-4">Servicios Disponibles</h2>
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
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        });
    </script>
</body>

</html>