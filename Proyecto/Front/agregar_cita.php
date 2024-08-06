<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar Cita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
    <!-- Botón para mostrar/ocultar la barra lateral -->
    <div class="btn-toggle" id="btnToggle">
        <button class="btn btn-primary" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Barra lateral -->
    <div class="sidebar" id="sidebar">
        <div class="d-flex flex-column p-3">
            <span class="close-btn" id="sidebarClose">
                <i class="fas fa-chevron-left"></i>
            </span>
            <h4>Menú</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="VistaCliente.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="historial-citas.php">Historial de Citas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="agregar_cita.php">Agendar Cita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Back/cerrar-sesion.php">Cerrar Sesión</a>
                </li>
                <!-- Añadir más elementos aquí -->
            </ul>
        </div>
    </div>
    <div class="container">
        <h2>Agregar Cita</h2>
        <form action="../back/agregar_cita.php" method="POST">
            <div class="form-group">
                <label for="servicio">Servicio:</label>
                <select name="servicio" id="servicio" class="form-control">
                    <!-- Las opciones se cargarán aquí desde obtener_servicios.php -->
                </select>
            </div>
            <div class="form-group mt-5">
                <label for="fecha">Fecha y Hora:</label>
                <input type="datetime-local" name="fecha" id="fecha" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Programar Cita</button>
        </form>
    </div>
    <script src="Scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetch('../Back/obtener_servicios.php')
                .then(response => response.json())
                .then(data => {
                    const select = document.getElementById('servicio');
                    data.forEach(servicio => {
                        const option = document.createElement('option');
                        option.value = servicio.id;
                        option.textContent = servicio.nombre; // Muestra el nombre del servicio
                        select.appendChild(option);
                    });
                })
                .catch(error => console.error('Error al cargar servicios:', error));
        });
    </script>
</body>

</html>