<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Medicina General</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5">
    <section>
      <h2 class="TituloServiciosE">¿Qué es la Medicina General?</h2>
      <p class="ParrafoServiciosE">
        La medicina general constituye el primer nivel de atención médica. El médico general es un profesional
        capacitado para diagnosticar y manejar diferentes patologías comunes y derivar al especialista indicado cuando
        corresponda.
      </p>
      <p class="ParrafoServiciosE">
        Un médico general es el profesional de la medicina que cuenta con los conocimientos necesarios para
        diagnosticar, solucionar con tratamiento médico y con procedimientos quirúrgicos menores las diferentes
        enfermedades, desde recién nacidos hasta los adultos mayores, dándole un enfoque integral y preventivo a las
        patologías.
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicio1.jpg" alt="Medicina General" class="img-fluid mt-4"
          style="width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5 mb-5">
      <h2 class="TituloServiciosE">¿Cómo me puede ayudar el médico general?</h2>
      <p class="ParrafoServiciosE">
        La medicina general constituye el primer nivel de atención médica y es imprescindible para la prevención,
        detección, tratamiento y seguimiento de las enfermedades crónicas estabilizadas, responsabilizándose del
        paciente en su conjunto, para decidir su derivación a los especialistas cuando alguna patología se descompense.
      </p>
      <p class="ParrafoServiciosE">
        En PerteneSer ponemos a disposición de nuestros pacientes, entre otros, los siguientes servicios:
      </p>
      <ul class="ParrafoServiciosE">
        <li>Reconocimientos médicos generales personalizados según edad, antecedentes personales y familiares y
          dependiendo del nivel de riesgo de cada paciente.</li>
        <li>Prevención de enfermedades mediante campañas de vacunación e información (consejos sobre hábitos, normas de
          higiene, alimentación saludable, etc.)</li>
        <li>Control y seguimiento de enfermedades crónicas.</li>
        <li>Controles periódicos de determinados parámetros como glucosa, tensión, colesterol, etc., en personas con
          factores de riesgo para evitar las consecuencias de estas enfermedades.</li>
      </ul>
    </section>

  </div>

  <?php include '../modulos/Footer.php'; ?>
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
  <script src="Scripts.js"></script>
</body>

</html>