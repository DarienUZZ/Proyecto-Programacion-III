<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Geriatría</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="/Proyecto/Front/Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5">
    <section>
      <h2 class="TituloServiciosE text-center">¿Qué es la Geriatría?</h2>
      <p class="ParrafoServiciosE">
        La geriatría es la rama de la medicina que se ocupa de los problemas y enfermedades de los adultos mayores, cómo
        prevenirlas y manejarlas, y del proceso de envejecer. No sólo del aspecto médico, sino también de aspectos
        psicológicos y sociales que habitualmente acompañan este proceso.
      </p>
      <p class="ParrafoServiciosE">
        Los geriatras son médicos expertos en el cuidado de los adultos mayores, de la misma manera que los pediatras lo
        son de los niños. Tienen especial conocimiento de enfermedades que comúnmente aquejan a los ancianos, tales
        como:
      </p>
      <ul class="ParrafoServiciosE">
        <li>Demencia.</li>
        <li>Caídas.</li>
        <li>Incontinencia urinaria.</li>
        <li>Osteoporosis.</li>
        <li>Depresión.</li>
      </ul>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicioGeriatria.jpg" alt="Geriatría" class="img-fluid mt-4"
          style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5 mb-5">
      <h2 class="TituloServiciosE text-center">¿Quiénes necesitan ir al Geriatra?</h2>
      <ul class="ParrafoServiciosE">
        <li>Mayores de 65 años sanos, en los cuales es necesario enfocar actividades preventivas personales para lograr
          un envejecimiento exitoso. El control anual permite la recomendación de estilos de vida, nutrición, ejercicio
          físico y actividad mental, exámenes personalizados y vacunas específicas para este grupo de pacientes.
          Permite, además, la detección precoz de disminución de memoria y capacidad cognitiva, pérdidas insignificantes
          de funcionalidad y estar alerta ante la presencia de signos y síntomas que predicen la aparición de
          enfermedades, sobre todo de algunos cánceres.</li>
        <li>Mayores de 65 años con más de tres enfermedades crónicas, que habitualmente ingieren más de cinco fármacos
          diferentes. El foco en estos pacientes es evitar la interacción de medicamentos que produzcan eventos
          adversos, recomendar actividades para evitar la progresión de las enfermedades o que se agreguen
          complicaciones de las mismas, manteniendo la capacidad para funcionar en forma autónoma.</li>
        <li>Pacientes mayores de 80 años, con o sin patología crónica. Estos pacientes presentan disminución de sus
          capacidades fisiológicas y están expuestos a presentar enfermedades agudas que con facilidad necesitan de
          hospitalización para mejorarlos.</li>
        <li>Pacientes que presentan enfermedades propias del envejecimiento, como demencia, incontinencia urinaria,
          alteraciones de la marcha y osteoporosis, entre otras.</li>
        <li>Adultos mayores institucionalizados en casas de reposo. El uso de un método específico para examinar a estos
          pacientes, el contacto estrecho con la familia y sobre todo con el cuidador principal, les permite preservar
          su funcionalidad física y mental y disminuir la velocidad de declinación a medida que envejecen. Hay una
          mejoría importante en la satisfacción de la familia y reduce la posibilidad de hospitalización.</li>
      </ul>
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