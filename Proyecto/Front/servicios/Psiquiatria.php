<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Psiquiatría</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5">
    <section>
      <h2 class="TituloServiciosE">¿Qué es la Psiquiatría?</h2>
      <p class="ParrafoServiciosE">
        Es una especialidad médica que se dedica a la prevención, diagnóstico y tratamiento de los trastornos del estado
        de ánimo (depresión y trastorno bipolar), de la ansiedad (ataques de pánico y trastorno de ansiedad
        generalizada),
        del pensamiento (esquizofrenia y otras psicosis), de las habilidades cognitivas (demencias), trastornos de la
        alimentación, trastornos por uso y abuso de licor y drogas. Algunos ejemplos de las enfermedades abordadas son:
        depresión, trastorno bipolar, ataques de pánico y esquizofrenia, abarcando poblaciones que van desde la infancia
        hasta el adulto mayor.
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicioPsiquiatria.jpg" alt="Psiquiatra" class="img-fluid mt-4"
          style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5 mb-5">
      <h2 class="TituloServiciosE">¿Cuándo debo ir al Psiquiatra?</h2>
      <p class="ParrafoServiciosE">
        <strong>Ir al psiquiatra cuando se tengan cambios en la vida cotidiana:</strong> Las alteraciones en la vida
        cotidiana son síntomas que en un primer momento se puede pensar que se deben a otras patologías que no sean
        mentales, pero realmente sí tienen una relación. Los principales síntomas son:
      </p>
      <ul class="ParrafoServiciosE">
        <li>Cambios en los hábitos alimenticios: adelgazamiento, dieta excesiva, ingesta de comida excesiva, etc.</li>
        <li>Cambios en los hábitos de descanso: exceso o falta de sueño, despertar por la noche, tardar mucho en
          conciliar el sueño, cansancio sin motivo, etc.</li>
        <li>Falta de concentración</li>
        <li>Problemas de memoria</li>
      </ul>
      <p class="ParrafoServiciosE">
        <strong>Ir al psiquiatra cuando se tengan cambios en el estado de ánimo:</strong> Los cambios en el estado de
        ánimo, en la personalidad o en el comportamiento, es más fácil que lo vean los familiares y amigos del paciente
        que él mismo.
      </p>
      <ul class="ParrafoServiciosE">
        <li>Dificultad para superar problemas o tomar decisiones</li>
        <li>Ansiedad o exceso de preocupación anormal por alguno o varios temas</li>
        <li>Pensamiento acelerado o enlentecido</li>
        <li>Cambios de ánimo muy extremos</li>
        <li>Ira y/o susceptibilidad con los amigos, familiares o la pareja</li>
        <li>Indiferencia hacia el futuro: falta de ilusiones y de proyecto de vida</li>
        <li>Incapacidad para ilusionarse ni disfrutar con nada</li>
        <li>Ideas extrañas</li>
      </ul>
      <p class="ParrafoServiciosE">
        <strong>Ir al psiquiatra cuando se tengan ideas extrañas:</strong> Los pensamientos extraños, como manías y
        miedos
        excesivos o alucinaciones, son signos muy frecuentes en enfermedades mentales. Las más destacadas son:
      </p>
      <ul class="ParrafoServiciosE">
        <li>Pensamiento paranoide: pensar que todos actúan contra la persona</li>
        <li>Obsesiones desmesuradas: lavarse las manos compulsivamente, hacer colecciones absurdas, comprobar una y otra
          vez las cosas, exceso de perfeccionismo y meticulosidad, etc.</li>
        <li>Alucinaciones: sensación de haber oído o visto algo sin que los demás se den cuenta, como sombras, figuras
          extrañas, voces, apariciones misteriosas, etc.</li>
        <li>Miedo excesivo: a salas de cine, campos de fútbol, ascensores, autobuses, conciertos, fiestas, que provoca
          sensación de asfixia, taquicardias, mareos, vómitos o incluso desmayos.</li>
      </ul>
    </section>
  </div>

  <?php include '../modulos/Footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  <script src="Scripts.js"></script>
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