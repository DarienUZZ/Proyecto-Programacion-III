<?php
session_start();
include 'C:/xampp/htdocs/Proyecto-Programacion-III/Proyecto/Back/db.php';

if (!isset($_SESSION['usuario_cedula'])) {
    die("No se ha iniciado sesión.");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Servicio</title>
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php include '../modulos/HeaderAdmin.php'; ?>

    <div class="container my-5">
        <h1 class="h2">Agregar Nuevo Servicio</h1>
        <form action="/Proyecto-Programacion-III/Proyecto/Back/crearServicio.php" method="post">
            <div class="mb-3">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" id="codigo" name="codigo" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="especialidad" class="form-label">Especialidad</label>
                <input type="text" class="form-control" id="especialidad" name="especialidad" required>
            </div>
            <div class="mb-3">
                <label for="enfermera_a_cargo" class="form-label">Enfermera a Cargo</label>
                <input type="text" class="form-control" id="enfermera_a_cargo" name="enfermera_a_cargo" required>
            </div>
            <div class="mb-3">
                <label for="costo" class="form-label">Costo</label>
                <input type="number" step="0.01" class="form-control" id="costo" name="costo" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Servicio</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>