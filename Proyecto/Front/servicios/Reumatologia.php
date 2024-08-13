<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reumatología</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5">
    <section>
      <h2 class="TituloServiciosE text-center">¿Qué es la Reumatología?</h2>
      <p class="ParrafoServiciosE">
        La Reumatología es la especialidad médica que se encarga de prevenir, diagnosticar y tratar las enfermedades
        musculoesqueléticas y autoinmunes sistémicas. Se trata de una de las especialidades que más avances en
        diagnóstico y tratamiento ha experimentado en los últimos años.
      </p>
      <p class="ParrafoServiciosE">
        Existen más de 200 enfermedades reumáticas y pueden afectar a cualquier rango de edad, desde niños hasta
        ancianos. Son la segunda causa de consulta, tras las infecciones respiratorias agudas, en Atención Primaria y la
        primera causa de incapacidad en nuestro medio. Además, las enfermedades del aparato locomotor son las que más
        deterioran la calidad de vida de las personas, por encima de las enfermedades de pulmón y corazón.
      </p>
      <p class="ParrafoServiciosE">
        Las enfermedades musculoesqueléticas afectan a huesos, músculos y articulaciones, así como a los tejidos que los
        rodean, pudiendo producir dolor, inflamación, rigidez, limitación de movimiento y deformidad. Por otra parte,
        las enfermedades autoinmunes sistémicas, como el lupus, el síndrome de Sjögren, la esclerodermia o la
        dermatomiositis, pueden afectar a cualquier órgano del cuerpo, como los riñones, el pulmón, la piel, el corazón
        o el cerebro. Estas enfermedades suelen ser crónicas, por lo que precisan de seguimiento por el reumatólogo a lo
        largo de toda la vida.
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicioReumatología.jpg" alt="Reumatologia" class="img-fluid mt-4"
          style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5 mb-5">
      <h2 class="TituloServiciosE text-center">¿Cuándo acudir al reumatólogo?</h2>
      <p class="ParrafoServiciosE">
        Al ser una consulta de atención especializada, generalmente será el médico de atención primaria quien derive al
        paciente. Retrasar la visita al reumatólogo puede generar lesiones irreversibles. En cambio, un tratamiento
        temprano puede evitar que aparezcan lesiones graves, evitando a su vez la discapacidad que estas pueden generar.
        Por eso es muy importante la detección precoz de estas enfermedades.
      </p>
      <p class="ParrafoServiciosE">
        El reumatólogo es el médico más capacitado para tratar las enfermedades del aparato locomotor y autoinmunes
        sistémicas. En la mayoría de las enfermedades reumáticas no es necesario el tratamiento quirúrgico.
      </p>
      <p class="ParrafoServiciosE">
        Generalmente, el síntoma más importante que lleva a una persona a acudir al reumatólogo es el dolor en alguna
        zona del aparato locomotor. Pero también pueden ser otros como hinchazón, rigidez matutina o disminución de la
        movilidad, por citar algunos.
      </p>
      <p class="ParrafoServiciosE">
        Si presenta inflamación de las articulaciones no causada por un golpe, sospecha que puede estar sufriendo una
        enfermedad reumática, o siente dolor muscular u óseo, acuda al reumatólogo lo antes posible.
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
  <script src="Scripts.js"></script>
</body>

</html>