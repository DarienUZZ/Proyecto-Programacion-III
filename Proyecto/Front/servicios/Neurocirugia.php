<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Neurocirugía</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="/Proyecto/Front/Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5 mb-5">
    <section>
      <h2 class="TituloServiciosE">¿Qué es la Neurocirugía?</h2>
      <p class="ParrafoServiciosE">
        La neurocirugía es una especialidad médica que se enfoca en el diagnóstico y tratamiento de enfermedades del
        sistema nervioso central y periférico. Los neurocirujanos utilizan técnicas quirúrgicas avanzadas para tratar
        una amplia variedad de afecciones, desde tumores cerebrales hasta trastornos de la columna vertebral y
        enfermedades del sistema nervioso periférico.
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicioNeurocirugía.jpg" alt="Neurocirugía" class="img-fluid mt-4"
          style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5">
      <h2 class="TituloServiciosE">¿Cuándo debo ir a consulta con el Neurocirujano?</h2>
      <p class="ParrafoServiciosE">
        Existen determinados indicativos que muestran el momento oportuno para acudir a un neurocirujano.
      </p>
      <p class="ParrafoServiciosE">
        Así, el dolor en la parte craneal, el cuello y la espalda pueden representar la presencia de una enfermedad
        neurológica, siendo necesario obtener un diagnóstico por el médico especialista para su recuperación.
      </p>
      <p class="ParrafoServiciosE">
        Igualmente, hay que prestar atención a nuestro cuerpo si comenzamos a sentir debilidad en brazos o piernas ya
        que es uno de los síntomas comunes de ciertas patologías como podría ser la ciática. También es posible sentir
        calambres en la parte posterior de la cadera hasta la rodilla.
      </p>
      <p class="ParrafoServiciosE">
        La existencia de adormecimiento continuo en ciertas partes del cuerpo puede relacionarse con una afección que
        daña a algunos nervios, perdiendo así sensibilidad.
      </p>
      <p class="ParrafoServiciosE">
        Por otro lado, si en algún momento sufrimos un accidente o un golpe en la cabeza, el cuello o la espalda, es
        imprescindible visitar a nuestro neurocirujano para realizar una exploración y conocer los efectos de tales
        impactos.
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