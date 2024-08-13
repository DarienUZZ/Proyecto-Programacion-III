<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Endocrinología</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="/Proyecto/Front/Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <?php include '../modulos/HeaderServicios.php'; ?>

  <div class="container mt-5">
    <section>
      <h2 class="TituloServiciosE text-center">¿Qué es la Endocrinología?</h2>
      <p class="ParrafoServiciosE">
        La endocrinología es la rama de la medicina que se especializa en el diagnóstico y tratamiento de trastornos del
        sistema endocrino, que incluye las glándulas y órganos que elaboran hormonas. Estos trastornos incluyen
        diabetes, infertilidad, y problemas tiroideos, suprarrenales y de la hipófisis.
      </p>
      <p class="ParrafoServiciosE">
        Nuestro equipo de endocrinos de alto nivel evalúa la relación entre la nutrición y las enfermedades de las
        personas para mejorar y mantener su salud, y están equipados para tratar diversas disfunciones y trastornos
        endocrinos. Trabajan en estrecha colaboración con otros especialistas a fin de proporcionar un enfoque
        multidisciplinario para los problemas médicos de las personas.
      </p>
      <p class="ParrafoServiciosE">
        El sistema endocrino del cuerpo comprende el páncreas, la tiroides, la glándula paratiroidea, la glándula
        pineal, el hipotálamo, la hipófisis y las glándulas suprarrenales, además de los ovarios y los testículos.
        También abarca muchos otros órganos que responden a las hormonas, que las modifican o que las metabolizan.
      </p>
      <div class="text-center">
        <img src="../img/imgServicios/imgServicioEndocrinología.jpg" alt="Endocrinología" class="img-fluid mt-4"
          style="max-width: 40%; height: auto;" />
      </div>
    </section>

    <section class="mt-5">
      <h2 class="TituloServiciosE text-center">¿Qué padecimientos se tratan con frecuencia?</h2>
      <ul class="ParrafoServiciosE">
        <li>Diabetes</li>
        <li>Obesidad y trastornos de la alimentación</li>
        <li>Lípidos (colesterol y triglicéridos elevados)</li>
        <li>Enfermedades en la glándula tiroides</li>
        <li>Enfermedades del metabolismo mineral (osteoporosis)</li>
        <li>Esteatosis hepática no alcohólica (hígado graso)</li>
      </ul>
      <p class="ParrafoServiciosE">
        Sin embargo, también atendemos padecimientos del hipotálamo, hipófisis, glándulas paratiroides, páncreas,
        glándulas suprarrenales, ovarios, testículos, entre otras.
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