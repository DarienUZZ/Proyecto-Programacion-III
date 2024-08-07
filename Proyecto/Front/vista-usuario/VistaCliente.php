<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Historial de Citas Médicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>

    <?php include '../modulos/HeaderUsuario.php' ?>s

    <section id="featuresSection" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 tituloVistaCliente">Nuestros Servicios</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 cardCardVistaCliente">
                        <div class="card-body text-center">
                            <i class="fas fa-calendar-alt fa-3x mb-3 iconoVistaCliente1"></i>
                            <h3 class="tituloCardVistaCliente">Historial de Citas</h3>
                            <p class="textoCardVistaCliente">Accede a tu historial completo de citas médicas y mantén un
                                registro de
                                tus consultas anteriores.</p>
                            <a href="historial-citas.php" class="btnVistaCliente1">Ver Historial</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 cardCardVistaCliente">
                        <div class="card-body text-center">
                            <i class="fas fa-clock fa-3x mb-3 iconoVistaCliente2"></i>
                            <h3 class="tituloCardVistaCliente">Agendar Cita</h3>
                            <p class="textoCardVistaCliente">Programa fácilmente tus próximas citas médicas con nuestro
                                sistema de
                                agendamiento en línea.</p>
                            <a href="agregar_cita.php" class="btnVistaCliente2">Agendar Ahora</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 cardCardVistaCliente">
                        <div class="card-body text-center">
                            <i class="fas fa-list-alt fa-3x mb-3 iconoVistaCliente3"></i>
                            <h3 class="tituloCardVistaCliente">Servicios Disponibles</h3>
                            <p class="textoCardVistaCliente">Explora nuestra amplia gama de servicios médicos y
                                especialidades
                                disponibles para ti.</p>
                            <a href="VistaClienteServicio.php" class="btnVistaCliente3">Ver Servicios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var navbarToggler = document.querySelector('.navbar-toggler');
            var navbarCollapse = document.querySelector('.navbar-collapse');

            navbarToggler.addEventListener('click', function (e) {
                e.preventDefault();
                if (navbarCollapse.style.display === 'block') {
                    navbarCollapse.style.display = 'none';
                } else {
                    navbarCollapse.style.display = 'block';
                }
            });
        });
    </script>
</body>

</html>