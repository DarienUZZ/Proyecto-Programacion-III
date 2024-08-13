<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Urología</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5">
    <section>
      <h2 class="TituloServiciosE">¿Qué es la Urología?</h2>
      <p class="ParrafoServiciosE">
        La Urología es la especialidad médico quirúrgica que se encarga de la prevención, diagnóstico y tratamiento de
        enfermedades morfológicas renales, de las del aparato urinario y retro-peritoneo que afectan a ambos sexos, así
        como las enfermedades del aparato genital masculino, sin diferencia de edad.
      </p>
      <p class="ParrafoServiciosE">
        Cómo ámbito anatómico de actuación, contempla el riñón y sus estructuras adyacentes, las vías urinarias y el
        aparato genital masculino, atendiendo las disfunciones de los siguientes órganos y estructuras:
      </p>
      <ul class="list-group list-group-flush ListaServiciosE">
        <li class="list-group-item">Vejiga</li>
        <li class="list-group-item">Riñón</li>
        <li class="list-group-item">Glándula suprarrenal</li>
        <li class="list-group-item">Próstata</li>
        <li class="list-group-item">Pene</li>
        <li class="list-group-item">Escroto</li>
        <li class="list-group-item">Testículo</li>
        <li class="list-group-item">Epidídimo</li>
        <li class="list-group-item">Uréter</li>
        <li class="list-group-item">Vía seminal</li>
        <li class="list-group-item">Uretra</li>
        <li class="list-group-item">Estructuras del suelo pelviano</li>
      </ul>
      <p class="ParrafoServiciosE">
        La urología puede abordar, desde un punto de vista quirúrgico, médico e integral, todas las dolencias de su área
        de influencia nosológica (enfermedades, signos clínicos, síndrome y síntomas) y anatómica (órganos, sistemas y
        aparatos), pudiendo dar respuesta a nuestros pacientes del GAM, desde un conocimiento completo y profundo de la
        especialidad.
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicioUrologia.jpg" alt="Urología" class="img-fluid mt-4"
          style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5 mb-5">
      <h2 class="TituloServiciosE">¿Cuándo acudir a urología?</h2>
      <p class="ParrafoServiciosE">
        Visitar al urólogo es algo que se debe hacer periódicamente para prevenir y asegurar el correcto funcionamiento
        de nuestro organismo, no obstante hay algunas enfermedades que suelen ser motivo de consulta inmediata:
      </p>
      <ul class="list-group list-group-flush ListaServiciosE">
        <li class="list-group-item">Sangre en la orina</li>
        <li class="list-group-item">Presencia de cálculos (piedras) en el riñón</li>
        <li class="list-group-item">Fimosis</li>
        <li class="list-group-item">Incontinencia</li>
        <li class="list-group-item">Infecciones urológicas</li>
        <li class="list-group-item">Eyaculación precoz</li>
        <li class="list-group-item">Disfunción eréctil</li>
      </ul>
      <p class="ParrafoServiciosE">
        En el caso de los hombres, se recomienda visitar al urólogo con más frecuencia a partir de los 45 años, pues es
        cuando el riesgo de padecer en enfermedades propias de la próstata como lo es el cáncer o el crecimiento
        prostático.
      </p>
      <p class="ParrafoServiciosE">
        Este especialista puede ayudarte también a disipar cualquier duda que surja sobre sexualidad o el funcionamiento
        del sistema urinario, no importa la edad que tengas; el conocimiento es crucial para la prevención y asegurar
        una vida sana.
      </p>
      <p class="ParrafoServiciosE">
        Si percibes anomalías en el funcionamiento de tu sistema urinario o genital, no dudes en acudir con un experto,
        evita la posibilidad de que los síntomas se compliquen.
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