<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Servicios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="Index.php">Inicio</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="Acerca-Nosotros.php">Acerca de Nosotros</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="PaginaServicios.php">Servicios</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="Contacto.php">Contacto</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="Login.php">Inicio sesión/Registro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/imgCarusel3.png" class="d-block w-100" alt="Dental Clinic 1" />
        <div class="carousel-caption">
          <div class="caption-content">
            <h2>Dr. JAVIER SEGURA R</h2>
            <p>Médico Cirujano, Especialista en Pediatría y Especialista en Medicina Extracorpórea Pediátrica,</p>
            <button class="btnCaruselSlider1" onclick="location.href='Login.php'">Agenda Tu Cita</button>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/imgCarusel2.webp" class="d-block w-100" alt="Dental Clinic 2" />
      </div>
      <div class="carousel-item">
        <img src="img/imgCarusel1.webp" class="d-block w-100" alt="Dental Clinic 2" />
      </div>
    </div>
  </div>

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