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
                    <a class="nav-link active" href="VistaCliente.php">Inicio</a>
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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content" id="mainContent">
                <h1 class="mt-4">Bienvenido</h1>

                <h2 class="mt-4">Mis Citas</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Especialidad</th>
                            <th>Doctor</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="citas-tbody">
                        <!-- Las citas se cargarán aquí dinámicamente -->
                    </tbody>
                </table>

                <!-- Botón para eliminar todas las citas -->
                <button class="btn btn-danger" id="deleteAllCitas">Eliminar Todas las Citas</button>

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

            // Cargar citas
            fetch('../Back/obtener_citas.php')
                .then(response => response.json())
                .then(data => {
                    const tbody = document.getElementById('citas-tbody');
                    data.forEach(cita => {
                        const row = document.createElement('tr');
                        row.setAttribute('data-id', cita.id);
                        row.innerHTML = `
                            <td>${cita.fecha.split(' ')[0]}</td>
                            <td>${cita.hora}</td>
                            <td>${cita.especialidad}</td>
                            <td>${cita.doctor}</td>
                            <td>${cita.estado}</td>
                            <td>
                                <button class="btn btn-danger btn-cancelar" data-id="${cita.id}">Cancelar Cita</button>
                            </td>
                        `;
                        tbody.appendChild(row);
                    });

                    // Manejar el clic en los botones de cancelar cita
                    const cancelarButtons = document.querySelectorAll('.btn-cancelar');
                    cancelarButtons.forEach(button => {
                        button.addEventListener('click', function () {
                            const id = this.getAttribute('data-id');
                            if (confirm('¿Estás seguro de que deseas cancelar esta cita?')) {
                                fetch('../Back/eliminar_cita.php', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                    },
                                    body: JSON.stringify({ id: id })
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.success) {
                                            alert(data.message);
                                            // Recargar la tabla de citas después de la eliminación
                                            this.closest('tr').remove();
                                        } else {
                                            alert('Error: ' + data.message);
                                        }
                                    })
                                    .catch(error => console.error('Error al eliminar la cita:', error));
                            }
                        });
                    });
                })
                .catch(error => console.error('Error al cargar citas:', error));

            // Eliminar todas las citas
            const deleteAllCitasButton = document.getElementById('deleteAllCitas');
            deleteAllCitasButton.addEventListener('click', function () {
                if (confirm('¿Estás seguro de que deseas eliminar todas las citas?')) {
                    fetch('../Back/eliminar_citas.php', {
                        method: 'POST',
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert(data.message);
                                // Recargar la tabla de citas después de la eliminación
                                document.getElementById('citas-tbody').innerHTML = '';
                            } else {
                                alert('Error: ' + data.message);
                            }
                        })
                        .catch(error => console.error('Error al eliminar citas:', error));
                }
            });
        });
    </script>
</body>

</html>