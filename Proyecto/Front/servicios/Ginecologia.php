<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ginecología</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="/Proyecto/Front/Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5">
    <section>
      <h2 class="TituloServiciosE text-center">¿Qué es la Ginecología?</h2>
      <p class="ParrafoServiciosE">
        La ginecología es una especialidad de la medicina que se centra en el estudio del sistema reproductor femenino.
        Los profesionales que se ocupan de esta especialidad se conocen como ginecólogos, que son los especialistas que
        atienden todas las patologías relacionadas con los órganos femeninos como el útero, la vagina y los ovarios, y
        también de la prevención de enfermedades futuras.
      </p>
      <p class="ParrafoServiciosE">
        En el ámbito de la ginecología, se acompaña a la mujer a lo largo de toda su vida, desde la menarquía hasta la
        menopausia, para garantizar el buen funcionamiento de sus órganos reproductivos.
      </p>
      <p class="ParrafoServiciosE">
        Su misión es la atención integral a las mujeres en el proceso del embarazo, parto y puerperio fisiológicos,
        estados patológicos relacionados con el embarazo, parto y puerperio y de pacientes ginecológicas, incluyendo
        patologías oncológicas de una forma integral, centrado en el ciudadano y coordinada con Atención Primaria y
        otros Servicios sanitarios y sociales, considerando aspectos preventivos y rehabilitadores.
      </p>
      <p class="ParrafoServiciosE">
        De esta forma, el Servicio de Ginecología y Obstetricia del Clínica PerteneSer, tiene como objetivo proporcionar
        una atención de máxima calidad a la población atendida, que se adapte en todo momento a las necesidades y
        expectativas de esa población.
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicioGinecología.jpg" alt="Ginecologia" class="img-fluid mt-4"
          style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5 mb-5">
      <h2 class="TituloServiciosE text-center">¿Cuándo acudir al ginecólogo?</h2>
      <p class="ParrafoServiciosE">
        Como norma general, la mujer debe acudir al ginecólogo cuando empieza a mantener relaciones sexuales. La
        exploración ginecológica habitual consistirá en un reconocimiento visual de los genitales externos, la vagina y
        el cuello de la matriz (el cuello del útero).
      </p>
      <p class="ParrafoServiciosE">
        También debes acudir al ginecólogo cuando se te presente algún problema del aparato reproductor: podrás acudir
        ya sea directamente a ella o a través de tu médico de familia, que o bien podrá proponer la solución al
        problema, o bien te derivará al especialista.
      </p>
      <p class="ParrafoServiciosE">
        Finalmente, la obstetra es la especialista que controla el embarazo, el parto y el puerperio, y debes acudir a
        ella cuando pienses que estás embarazada.
      </p>
    </section>

  </div>

  <?php include '../modulos/Footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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