<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Terapia de Pareja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="/Proyecto/Front/Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5 mb-5">
    <section>
      <h2 class="TituloServiciosE text-center">Terapia de Pareja</h2>

      <h3 class="SubtituloServiciosE">¿Cuándo asistir a terapia de pareja?</h3>
      <p class="ParrafoServiciosE">
        Si te has sentido frustrado por los mismos problemas en tu relación y estás empezando a perder el compromiso,
        eso podría ser una señal. Si la pareja descubre que se están alejando el uno del otro, eso también podría ser
        una señal. Y si hubo varios intentos de reparar cosas que terminaron en fallas de comunicación, eso podría ser
        otra una señal. Hay más señales, sin embargo, a terapia de pareja no solo se viene cuando la relación está en
        crisis, es ideal que las parejas se acerquen a un terapeuta certificado incluso desde su fase de noviazgo.
      </p>

      <div class="text-center">
        <img src="../img/imgServicios/imgServicioTerapiadeParejas.jpg" alt="Terapia de Pareja" class="img-fluid mt-4"
          style="max-width: 60%; height: auto;" />
      </div>

      <h3 class="SubtituloServiciosE mt-5">¿Qué método utilizamos?</h3>
      <p class="ParrafoServiciosE">
        El método de terapia de John Gottman es uno de los enfoques de terapia de pareja más reconocidos y validados
        internacionalmente, principalmente porque está basado en la evidencia científica. Esto quiere decir que los
        datos en los que se sustenta son el resultado de muchas investigaciones y lo que les ocurre a parejas reales
        (más de 40 años de investigación, realizada con más de 3.000 parejas), y ha demostrado los más altos índices de
        efectividad.
      </p>
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