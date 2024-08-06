<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Servicios Disponibles</title>
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

    <!-- Contenido principal -->
    <div class="container">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content" id="mainContent">
                <!-- Tabla de Servicios -->
                <h2 class="mt-4">Servicios Disponibles</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Especialidad</th>
                            <th>Enfermera a Cargo</th>
                            <th>Costo</th>

                        </tr>
                    </thead>
                    <tbody id="servicios-tbody">
                        <!-- Los servicios se cargarán aquí dinámicamente -->
                    </tbody>
                </table>
            </main>
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
            fetch('../Back/obtener_servicios.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Datos recibidos:', data); // Imprime los datos recibidos para depurar
                    const tbody = document.getElementById('servicios-tbody');
                    if (Array.isArray(data) && data.length > 0) {
                        data.forEach(servicio => {
                            const row = document.createElement('tr');
                            row.innerHTML = `
                        <td>${servicio.codigo}</td>
                        <td>${servicio.nombre}</td>
                        <td>${servicio.especialidad}</td>
                        <td>${servicio.enfermera_a_cargo}</td>
                        <td>${parseFloat(servicio.costo).toFixed(2)}</td>
                    `;
                            tbody.appendChild(row);
                        });
                    } else {
                        tbody.innerHTML = '<tr><td colspan="7">No hay servicios disponibles.</td></tr>';
                    }
                })
                .catch(error => console.error('Error al cargar servicios:', error));
        });

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