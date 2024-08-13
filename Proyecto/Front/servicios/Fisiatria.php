<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fisiatría</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="/Proyecto/Front/Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5 mb-5">
    <section>
      <h2 class="TituloServiciosE text-center">¿Qué es la Fisiatría?</h2>
      <p class="ParrafoServiciosE">
        La Medicina Física y Rehabilitación es una especialidad médica que se ocupa de la evaluación y el tratamiento de
        los pacientes con una enfermedad, un trastorno o una lesión que deterioran las funciones normales. Para esto
        trabaja básicamente tres grandes áreas: La Medicina Física, la Medicina de Rehabilitación y los estudios
        electrofisiológicos.
      </p>
      <p class="ParrafoServiciosE">
        El médico especializado en medicina física y rehabilitación recibe el nombre de Fisiatra, es una especialidad
        médica que se ocupa de la restauración de las capacidades perdidas a causa de una enfermedad, trastorno o
        lesión.
      </p>
      <p class="ParrafoServiciosE">
        El Fisiatra realiza sus diagnósticos tal como cualquier otro médico, agregando algunas técnicas especiales como
        la electromiografía, la neuroconducción y los potenciales evocados, para los que está entrenado.
      </p>
      <p class="ParrafoServiciosE">
        Se dedican a diversos trastornos musculoesqueléticos (de los músculos y los huesos), cardiovasculares (del
        corazón y los vasos sanguíneos), pulmonares (de los pulmones y la respiración) y neurológicos (del sistema
        nervioso), incluidas las condiciones como la artritis, el dolor de espalda, las lesiones laborales y deportivas
        y las lesiones cerebrales o de la médula espinal. El Fisiatra actúa a nivel de enfermedades en fase aguda,
        crónica y secuelar, tratando y evitando complicaciones a nivel del aparato musculoesquelético y visceral,
        fundamentalmente aquellos derivados del síndrome de inmovilización y procesos deformantes musculoesqueléticos.
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicioFisiatría.jpg" alt="Fisiatría" class="img-fluid mt-4"
          style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5">
      <h2 class="TituloServiciosE text-center">Preguntas y Respuestas de la Especialidad</h2>
      <div class="ParrafoServiciosE mt-4">
        <h4>¿Qué tipo de procedimientos realiza un fisiatra?</h4>
        <p>
          Los médicos fisiatras realizan consulta médica para evaluar la función y reestablecer la calidad de vida que
          pierden los pacientes por determinadas enfermedades. Realizan estudios de electrofisiología a los nervios
          periféricos que se llama estudio de electromiografía. También utilizan toxina botulínica para tratar
          trastornos del tono y movimientos anormales.
        </p>
        <p>
          Los fisiatras también realizan intervenciones y liberación de fascias, percusión muscular y algunos
          procedimientos que están encaminados a devolver la función del sistema muscular a los pacientes.
        </p>
      </div>
      <div class="ParrafoServiciosE mt-4">
        <h4>¿Por qué es importante la fisiatría en el cuidado de la salud?</h4>
        <p>
          Los médicos fisiatras son médicos que acompañan el proceso del tratamiento de las diferentes enfermedades.
          Normalmente trabajan de la mano con las demás especialidades y acompañan a los pacientes en el proceso de
          rehabilitación para disminuir el impacto que tienen las enfermedades en los diferentes sistemas,
          específicamente en el sistema osteomuscular y en el sistema nervioso.
        </p>
      </div>
      <div class="ParrafoServiciosE mt-4">
        <h4>¿Cómo se diferencia la fisiatría de la fisioterapia?</h4>
        <p>
          La fisiatría es una especialidad médica, la fisioterapia es una carrera profesional. Los fisiatras realizan
          una evaluación de los pacientes como médicos y establecen un protocolo de rehabilitación. Los fisioterapeutas
          trabajan en sinergia con los fisiatras porque aplican o desarrollan los procesos de rehabilitación, aplicando
          las técnicas de fisioterapia para desarrollar esos programas.
        </p>
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