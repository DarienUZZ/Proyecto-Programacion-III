<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pediatría</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="/Proyecto/Front/Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5 mb-5">
    <section>
      <h2 class="TituloServiciosE">¿Qué es la Pediatría?</h2>
      <p class="ParrafoServiciosE">
        A la Pediatría le incumbe todo cuanto se refiere a los cuidados del niño y adolescente sano (Pediatría
        Preventiva),
        a los modos de asistencia médica integral, total y continuada en el niño y el adolescente en estado de
        enfermedad
        (Pediatría Clínica), y a cuanto atañe al niño y adolescente sano y enfermo en sus interrelaciones individuales y
        con la comunidad en el medio físico y humano en que de manera ininterrumpida y con características propias se
        desarrolla (Pediatría Social).
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicioConfianzaPositiva.jpg" alt="Pediatría" class="img-fluid mt-4"
          style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5 mb-5">
      <h2 class="TituloServiciosE">¿Cuándo debo ir?</h2>
      <p class="ParrafoServiciosE">
        Los niños y las niñas tienen controles de salud con mayor frecuencia cuando son más jóvenes que cuando son
        adolescentes.
        Esto se debe a que el desarrollo es más rápido durante estos años. Cada control con el pediatra incluye un
        examen físico
        completo, donde se verifica el crecimiento y desarrollo del bebé o del niño o niña y el adolescente con el fin
        de encontrar
        o prevenir problemas. Asimismo, la valoración de estudios de la audición y la visión y otros exámenes serán
        parte de algunas
        de las consultas o controles. Incluso, si su hijo o hija está saludable, los controles con el pediatra son un
        buen momento
        para enfocarse en su bienestar integral.
      </p>
      <p class="ParrafoServiciosE">
        A veces para los padres es difícil saber si su hijo está enfermo o no. Muchas veces, no es necesario acudir de
        urgencia a la
        clínica o el hospital, y la consulta de pediatría le permite la valoración por enfermedades comunes de la
        infancia, que se
        pueden presentar como tos y secreción nasal, congestión, dolor de garganta, dolor de oídos, alergias y brotes en
        la piel,
        fiebre, vómitos, diarrea, dolor abdominal, entre otros. Una valoración apropiada por el pediatra en un ambiente
        seguro y
        cálido para su hijo o hija permitirá establecer un diagnóstico y tratamiento adecuado en el manejo de la
        enfermedad detectada.
      </p>
      <p class="ParrafoServiciosE">
        De igual manera, estas visitas al pediatra (de seguimiento, rutinario o por enfermedad), se deben aprovechar
        para consultarle
        al pediatra sobre las preocupaciones o problemas notados en el desarrollo, comportamiento o aprendizaje de sus
        hijos o hijas,
        ya que se pueden detectar de manera temprana algunas condiciones médicas tales como el trastorno de déficit
        atencional con
        inatención, impulsividad o hiperactividad, trastornos de conducta o trastornos del espectro autista, entre
        otros; en los cuales,
        una intervención multidisciplinaria pronta podría ayudar a buscar los enfoques que funcionan mejor para el
        diagnóstico de su
        hijo o hija, y poder colaborarle a mejorar y salir adelante, y que sea feliz en todos sus entornos, y por
        consiguiente sus
        familias y profesorado.
      </p>
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
  <script src="/Proyecto/Front/Scripts.js"></script>
</body>

</html>