<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ortopedia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5">
    <section>
      <h2 class="TituloServiciosE">¿Qué es la Ortopedia?</h2>
      <p class="ParrafoServiciosE">
        La ortopedia es la especialidad médica que se dedica al diagnóstico, tratamiento, rehabilitación y prevención de
        lesiones y enfermedades del sistema musculo esquelético del cuerpo humano. Este complejo sistema incluye los
        huesos, las articulaciones, los ligamentos, los tendones, los músculos y los nervios que le permiten a una
        persona moverse, trabajar y ser activa.
      </p>
      <p class="ParrafoServiciosE">
        Hace tiempo la ortopedia se dedicaba al cuidado de niños con deformaciones de columna o extremidades, pero
        actualmente se dedica a pacientes de todas las edades.
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicio3.webp" alt="Ortopedia" class="img-fluid mt-4"
          style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5 mb-5">
      <h2 class="TituloServiciosE">¿Cómo me puede ayudar el médico ortopedista?</h2>
      <ul class="ParrafoServiciosE">
        <li>El diagnóstico de su lesión o trastorno</li>
        <li>El tratamiento con medicamentos, ejercicios, cirugía u otros planes de tratamiento</li>
        <li>La rehabilitación recomendando ejercicios o terapia física para recuperar el movimiento, la fuerza o el
          funcionamiento</li>
        <li>La prevención brindándole información y planes de tratamiento para evitar lesiones o retrasar el avance de
          las enfermedades</li>
      </ul>
    </section>

  </div>

  <?php include '../modulos/Footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  <script src="Scripts.js"></script>
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