<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Telepsicología</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="/Proyecto/Front/Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5 mb-5">
    <section>
      <h2 class="TituloServiciosE text-center">Telepsicología</h2>

      <p class="ParrafoServiciosE">
        Definimos la psicología en línea como los servicios brindados mediante herramientas tecnológicas como:
        dispositivos móviles (teléfonos y tabletas) y computadoras personales (portátiles o de escritorio), además del
        uso de videollamadas o videoconferencias, correos electrónicos, sitios web o blogs de internet, plataformas de
        mensajería instantánea, llamadas telefónicas, entre otras que puedan surgir en el futuro que utilicen redes de
        comunicación o de internet (APA, 2013; Consejo General de la Psicología de España [CGPE], 2017).
      </p>
      <p class="ParrafoServiciosE">
        Desde el 2019, el Colegio de Profesionales en Psicología de Costa Rica, emitió un criterio para la utilización
        de la psicología a través de medios virtuales.
      </p>
      <p class="ParrafoServiciosE">
        En PerteneSer contamos con una plataforma diseñada para consultas de salud mental, total y completamente segura
        de punto a punto y que cumple las normas solicitadas por el Gobierno de USA para brindar telesalud.
      </p>
      <div class="text-center mt-4">
        <img src="../img/imgServicios/imgServicioTelepsicología.jpg" alt="Telepsicología" class="img-fluid"
          style="max-width: 50%; height: auto;" />
      </div>
    </section>
  </div>

  <?php include '../modulos/Footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
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