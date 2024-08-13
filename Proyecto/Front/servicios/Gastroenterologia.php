<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gastroenterología</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="/Proyecto/Front/Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5 mb-5">
    <section>
      <h2 class="TituloServiciosE">¿Qué es la Gastroenterología?</h2>
      <p class="ParrafoServiciosE">
        La gastroenterología se ocupa de las enfermedades de todo el tracto gastrointestinal, que va desde la boca hasta
        el ano, incluyendo varios tipos de cáncer. Los tumores pueden afectar a toda la región, pero la mayoría se
        producen en el estómago o el intestino.
      </p>
      <p class="ParrafoServiciosE">
        ¿Qué hacen los gastroenterólogos?
      </p>
      <p class="ParrafoServiciosE">
        Se ocupa de las enfermedades del aparato digestivo y órganos asociados, conformado por: esófago, estómago,
        hígado y vías biliares, intestino delgado (duodeno, yeyuno, íleon), colon y recto. El médico de esta
        especialidad se llama gastroenterólogo o especialista en aparato digestivo.
      </p>
      <div class="text-center mt-4">
        <img src="../img/imgServicios/imgServicioGastroenterología.jpg" alt="Gastroenterología" class="img-fluid"
          style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5">
      <h2 class="TituloServiciosE">¿Quiénes necesitan ir al Gastroenterólogo?</h2>
      <p class="ParrafoServiciosE">
        Debes acudir a él cuando sientas síntomas relacionados con el aparato digestivo como náuseas, dolores
        abdominales constantes, diarrea, sensaciones de quemazón en el estómago o inflamaciones constantes.
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