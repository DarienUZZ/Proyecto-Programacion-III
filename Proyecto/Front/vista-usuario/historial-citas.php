<?php
session_start();
include 'C:/xampp/htdocs/Proyecto-Programacion-III/Proyecto/Back/db.php';

if (!isset($_SESSION['usuario_cedula'])) {
    die("No se ha iniciado sesión.");
}

$cedula = $_SESSION['usuario_cedula']; // Asegúrate de que la cédula esté definida

// cancelart
if (isset($_POST['cancelar'])) {
    $cita_id = $_POST['cita_id'];
    $update_sql = "UPDATE citas SET estado = 'cancelada' WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("i", $cita_id);
    $update_stmt->execute();
    $update_stmt->close();
}

// Cons
$sql = "SELECT citas.id, 
               citas.fecha, 
               DATE_FORMAT(citas.fecha, '%d/%m/%Y') AS fecha_formateada, 
               DATE_FORMAT(citas.fecha, '%H:%i') AS hora, 
               servicios.nombre AS especialidad, 
               servicios.enfermera_a_cargo AS doctor, 
               citas.estado 
        FROM citas 
        JOIN servicios ON citas.id_servicio = servicios.id 
        WHERE citas.cedula = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $cedula);
$stmt->execute();
$result = $stmt->get_result();

$citas = [];
while ($row = $result->fetch_assoc()) {
    $fecha_cita = new DateTime($row['fecha']);
    $fecha_actual = new DateTime();
    $intervalo = $fecha_actual->diff($fecha_cita);

    if ($fecha_actual > $fecha_cita) {
        $row['tiempo_restante'] = 'Ya pasó';
    } else {
        $row['tiempo_restante'] = $intervalo->format('%a días, %h horas, %i minutos');
    }

    $citas[] = $row;
}

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Historial de Citas</title>
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">



</head>

<body>
    <?php include '../modulos/HeaderUsuario.php' ?>
    <div class="container my-5">
        <h2 class="mb-4 tituloAgregarCitas">Mis Citas</h2>
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width: 100%">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Especialidad</th>
                        <th>Doctor</th>
                        <th>Estado</th>
                        <th>Acción</th>
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
                                <?php if ($cita['estado'] === 'pendiente'): ?>
                                    <form onsubmit="cancelarCita(event, <?php echo $cita['id']; ?>)">
                                        <button type="button" class="btn btn-danger"
                                            onclick="cancelarCita(event, <?php echo $cita['id']; ?>)">Cancerlar
                                        </button>
                                    </form>

                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


        <h2 class="my-5 tituloAgregarCitas">Tiempo Restante para las Citas</h2>
        <div class="table-responsive">
            <table id="tiempoRestante" class="table table-striped" style="width: 100%">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Especialidad</th>
                        <th>Tiempo Restante</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($citas as $cita): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($cita['fecha_formateada']); ?></td>
                            <td><?php echo htmlspecialchars($cita['hora']); ?></td>
                            <td><?php echo htmlspecialchars($cita['especialidad']); ?></td>
                            <td><?php echo htmlspecialchars($cita['tiempo_restante']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    { extend: 'copy', className: 'btn btn-copy' },
                    { extend: 'csv', className: 'btn btn-csv' },
                    { extend: 'excel', className: 'btn btn-excel' },
                    { extend: 'pdf', className: 'btn btn-pdf' },
                    { extend: 'print', className: 'btn btn-print' }
                ]
            });

            $('#tiempoRestante').DataTable({
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


        function cancelarCita(event, citaId) {
            event.preventDefault(); // Previene el envío del formulario por defecto

            Swal.fire({
                title: '¿Está seguro?',
                text: "Esta acción no se puede deshacer.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#003f5c',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, cancelar',
                cancelButtonText: 'No, mantener'
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.createElement('form');
                    form.method = 'POST';

                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'cita_id';
                    input.value = citaId;

                    const button = document.createElement('button');
                    button.type = 'submit';
                    button.name = 'cancelar';
                    button.style.display = 'none';

                    form.appendChild(input);
                    form.appendChild(button);

                    document.body.appendChild(form);
                    button.click();
                }
            });
        }
    </script>
</body>

</html>