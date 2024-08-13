<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Medicina Interna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5 mb-5">
    <section>
      <h2 class="TituloServiciosE">¿Qué es la Medicina Interna?</h2>
      <p class="ParrafoServiciosE">
        La medicina interna es una especialidad médica que se enfoca en la atención primaria integral solo para adultos.
        La atención primaria incluye el diagnóstico, el tratamiento y la prevención de una amplia gama de enfermedades,
        padecimientos y lesiones que afectan a los adultos jóvenes y adultos mayores.
      </p>
      <p class="ParrafoServiciosE">
        Los médicos internistas están certificados en medicina interna y tienen experiencia especial en el manejo de la
        atención de personas con afecciones crónicas (a largo plazo) complejas.
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicioNeurocirugía.jpg" alt="Medicina Interna" class="img-fluid mt-4"
          style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5 mb-5">
      <h2 class="TituloServiciosE">¿Cuándo debe ver a su médico?</h2>
      <p class="ParrafoServiciosE">
        Para la mayoría de las personas saludables, las visitas anuales a sus internistas, a su médico de familia o a su
        médico de atención primaria son recomendadas para hacerse exámenes físicos, pruebas de sangre y laboratorios, y
        pruebas basadas en su sexo, edad, historial de familia y otros factores. Sin embargo, si usted es diagnosticado
        con una condición crónica como la presión alta, la diabetes u otros factores de riesgo para la enfermedad
        cardiaca, su médico probablemente recomendará que se haga consultas más frecuentemente.
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