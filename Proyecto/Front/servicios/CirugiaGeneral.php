<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cirugía General</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="/Proyecto/Front/Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5 mb-5">
    <section>
      <h2 class="TituloServiciosE text-center">¿Qué es la Cirugía General?</h2>
      <p class="ParrafoServiciosE">
        La cirugía general es la especialidad médico-quirúrgica que estudia y maneja en forma multidisciplinaria temas
        como el trauma, el shock, el balance hidroelectrolítico, la infección, la nutrición y la cicatrización. Se ocupa
        de forma específica del tratamiento quirúrgico de los tumores y demás enfermedades orgánicas que comprometen el
        cuello, el sistema digestivo y glándulas anexas, los procesos herniarios de la pared abdominal y lesiones
        quirúrgicas de los tejidos blandos. Algunos procedimientos se manejan con la técnica de laparoscopia que es una
        alternativa mínimamente invasiva a la cirugía abierta convencional, ofreciendo grandes ventajas en la
        recuperación del paciente.
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicioCirugíaGeneral.jpg" alt="Cirugía General" class="img-fluid mt-4"
          style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5">
      <h2 class="TituloServiciosE text-center">¿Cómo me puede ayudar el cirujano general?</h2>
      <ul class="ParrafoServiciosE">
        <li><strong>Cirugía de estómago:</strong> Tumores benignos de estómago, tumores malignos de estómago,
          piloroplastías</li>
        <li><strong>Cirugía de hígado:</strong> Tumores benignos, tumores malignos, trasplante hepático</li>
        <li><strong>Cirugía de las vías biliares:</strong> Piedras en la vesícula, tumores benignos de la vesícula
          biliar, tumores malignos de la vesícula biliar, tumores benignos de los conductos biliares, conductos malignos
          de las vías biliares, estrecheces de las vías biliares, reconstrucción de las vías biliares</li>
        <li><strong>Cirugía de páncreas:</strong> Tumores benignos, tumores malignos</li>
        <li><strong>Cirugía de colon:</strong> Tumores benignos, tumores malignos, hemorroides, fisuras anales, fístulas
          anales</li>
        <li><strong>Hernias:</strong> Umbilicales, inguinales, incisionales</li>
        <li><strong>Laparoscopia:</strong> Estómago, hígado, vesícula biliar, páncreas y colon</li>
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