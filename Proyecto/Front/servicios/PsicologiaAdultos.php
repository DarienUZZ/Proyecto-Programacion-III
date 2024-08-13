<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Psicología para Adultos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="/Proyecto/Front/Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>

  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5 mb-5">
    <section>
      <h2 class="TituloServiciosE">Psicología para Adultos</h2>
      <p class="ParrafoServiciosE">
        En muchas ocasiones los adultos encontramos que nuestro equilibrio emocional se resiente y que nuestra calidad
        de vida se deteriora por problemas o situaciones difíciles que nos suceden. A veces, intentamos salir adelante
        por nuestros medios y nos sentimos frustrados al no conseguirlo. En esos momentos, es cuando se puede acudir a
        un psicólogo para que pueda ayudarnos a restablecer el bienestar y el equilibrio emocional perdido, todo ello
        mediante una psicoterapia para adultos.
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicioPsicologíaAdultos.jpg" alt="Psicología para Adultos"
          class="img-fluid mt-4" style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5">
      <h2 class="TituloServiciosE">Nuestros Servicios</h2>
      <ul class="ParrafoServiciosE">
        <li>Escuela para padres en crianza de los hijos</li>
        <li>Talleres y charlas de Disciplina Positiva</li>
        <li>Psicodiagnóstico</li>
        <li>Diagnóstico del trastorno del espectro autista y déficit de atención</li>
        <li>Prueba de cociente intelectual (IQ)</li>
        <li>Evaluación Neuropsicológica</li>
        <li>Evaluación Psicopedagógica</li>
        <li>Estimulación cognitiva del adulto mayor</li>
        <li>Evaluación para portación de armas</li>
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