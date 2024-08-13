<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Identidad Mental</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="/Proyecto/Front/Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5 mb-5">
    <section>
      <h2 class="TituloServiciosE text-center">¿Qué es la Identidad Mental?</h2>
      <p class="ParrafoServiciosE">
        La identidad mental se refiere al sentido de quién eres y cómo te ves a ti mismo en términos de tus
        pensamientos, creencias y emociones. Es la manera en que entiendes tu propia mente y tu percepción de ti mismo.
        Incluye aspectos como tus valores, tus intereses, tus objetivos y tu autoconcepto.
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicioIdentidadMental.jpg" alt="Identidad Mental" class="img-fluid mt-4"
          style="max-width: 60%; height: auto;" />
      </div>
    </section>

    <section class="mt-5">
      <h2 class="TituloServiciosE text-center">¿Cómo podemos ayudar?</h2>
      <ul class="list-unstyled">
        <li><strong>Exploración del Autoconcepto:</strong> Ayuda a la persona a explorar y entender su autoconcepto,
          identificando creencias y percepciones sobre sí misma que pueden influir en su identidad.</li>
        <li><strong>Terapia Cognitivo-Conductual:</strong> Utiliza técnicas para identificar y modificar patrones de
          pensamiento negativos o distorsionados que afectan la autoimagen y el sentido de identidad.</li>
        <li><strong>Autoconocimiento:</strong> Facilita el proceso de autoconocimiento a través de la reflexión sobre
          experiencias pasadas, valores, intereses y metas, ayudando a la persona a construir una identidad más sólida y
          coherente.</li>
        <li><strong>Desarrollo de Habilidades de Afrontamiento:</strong> Enseña habilidades para manejar el estrés y las
          emociones, que pueden contribuir a una mejor comprensión y aceptación de uno mismo.</li>
        <li><strong>Exploración de Identidad Social:</strong> Ayuda a entender cómo las relaciones y el entorno social
          influyen en la identidad, trabajando para mejorar la forma en que la persona se relaciona con los demás y con
          su entorno.</li>
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