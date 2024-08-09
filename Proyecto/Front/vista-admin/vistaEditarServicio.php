<?php
session_start();
include 'C:/xampp/htdocs/Proyecto-Programacion-III/Proyecto/Back/db.php';

if (!isset($_SESSION['usuario_cedula'])) {
    die("No se ha iniciado sesión.");
}

if (!isset($_GET['codigo'])) {
    die("Código de servicio no proporcionado.");
}

$codigo = $_GET['codigo'];

// Obtener datos del servicio
$sql = "SELECT id, codigo, nombre, especialidad, enfermera_a_cargo, costo FROM servicios WHERE codigo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $codigo);
$stmt->execute();
$result = $stmt->get_result();
$servicio = $result->fetch_assoc();

if (!$servicio) {
    die("Servicio no encontrado.");
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Servicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include '../modulos/HeaderAdmin.php'; ?>

    <div class="container my-5">
        <h1 class="h2">Editar Servicio</h1>
        <form
            action="/Proyecto-Programacion-III/Proyecto/Back/editarServicio.php?codigo=<?php echo urlencode($codigo); ?>"
            method="post">
            <div class="mb-3">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" id="codigo" name="codigo"
                    value="<?php echo htmlspecialchars($codigo); ?>" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre"
                    value="<?php echo htmlspecialchars($servicio['nombre']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="especialidad" class="form-label">Especialidad</label>
                <input type="text" class="form-control" id="especialidad" name="especialidad"
                    value="<?php echo htmlspecialchars($servicio['especialidad']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="enfermera_a_cargo" class="form-label">Enfermera a Cargo</label>
                <input type="text" class="form-control" id="enfermera_a_cargo" name="enfermera_a_cargo"
                    value="<?php echo htmlspecialchars($servicio['enfermera_a_cargo']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="costo" class="form-label">Costo</label>
                <input type="number" step="0.01" class="form-control" id="costo" name="costo"
                    value="<?php echo htmlspecialchars($servicio['costo']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Servicio</button>
            <a href="vistaServicios.php" class="btn btn-secondary">Volver</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>



</html>