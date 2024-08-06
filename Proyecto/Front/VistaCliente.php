<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Historial de Citas Médicas</title>
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
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="historial-citas.php">Historial de Citas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="VistaClienteServicio.php">Servicios</a>
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

    <!-- Contenido principal -->
    <div class="container">
        <div class="row">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9zRvwXKGEhH6blb7Yt8m+4jc2zzK9t6Z1gG7n9G1deW8H5A2Pp"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-GLhlT24x8g5zr8cT70pM6O4mskD1g9tt5aVWzctRmK/htz3E1D0dqaDi8doATvU9"
        crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const btnToggle = document.getElementById('btnToggle');
            const sidebarClose = document.getElementById('sidebarClose');

            // Muestra la barra lateral por defecto en pantallas grandes
            if (window.innerWidth > 768) {
                sidebar.classList.remove('hide');
                btnToggle.classList.add('hide');
            }

            sidebarToggle.addEventListener('click', function () {
                sidebar.classList.add('show');
                mainContent.classList.add('shifted');
                btnToggle.classList.add('hide');
            });

            sidebarClose.addEventListener('click', function () {
                sidebar.classList.remove('show');
                mainContent.classList.remove('shifted');
                btnToggle.classList.remove('hide');
            });

            // Ajustar el estado del botón de alternancia en función del tamaño de la ventana
            window.addEventListener('resize', function () {
                if (window.innerWidth > 768) {
                    sidebar.classList.remove('hide');
                    btnToggle.classList.add('hide');
                } else {
                    sidebar.classList.add('hide');
                    btnToggle.classList.remove('hide');
                }
            });
        });
    </script>
</body>

</html>