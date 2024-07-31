<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VIVIRBIEN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Inicio</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="Contacto.php">Acerca de Nosotros</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="PaginaServicios.php">Servicios</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="Contacto.php">Contacto</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="Error404.php">Pages</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Inicio sesión/Registro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <?php include 'header.php'; ?>

  <section id="SeccionBienvenida" class="SeccionBienvenida py-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 d-flex justify-content-center">
          <img src="img/imgBienvenida.jpg" alt="Dentist in clinic" class="bienvenida rounded img-fluid" />
        </div>
        <div class="col-lg-6 col-md-12">
          <h2 class="TituloSeccionBienvenida">Clinica VivirBien</h2>
          <h3 class="SubtituloSeccionBienvenida">
            Dental clinic BeDentist welcomes you!
          </h3>

          <p>
            Profesionales en salud en Heredia capacitados para brindarle la
            ayuda que usted necesita y a la vez apoyarlo en todo el proceso
            del tratamiento, pues lo importante para nosotros es lograr ese
            anhelado Bienestar, que solo se logra con cambios positivos y
            actitudes proactivas en nuestras vidas.
          </p>
          <div class="ContenedorBtn">
            <button class="btnSeccionBienvenida">Leer más</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="SeccionValores" class="SeccionValores text-white">
    <div class="container">
      <h2 class="tituloSeccionValores text-center">
        Valores De Nuestra Clinica
      </h2>
      <div class="row justify-content-center filaSeccionValores">
        <div class="col-md-6 col-lg-3">
          <div class="feature text-center">
            <div class="icon-circle mb-3">
              <i class="fa-regular fa-heart fa-3x"></i>
            </div>
            <h3 class="subtituloSeccionValores">Amor</h3>
            <p class="parrafoSeccionValores">
              Cada tratamiento se realiza con dedicación y amor, asegurándonos de que cada paciente se sienta valorado y cuidado en todo momento. </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="feature text-center">
            <div class="icon-circle mb-3">
              <i class="fa-regular fa-handshake fa-3x"></i>
            </div>
            <h3 class="subtituloSeccionValores">Respeto</h3>
            <p class="parrafoSeccionValores">
              Tratamos a cada paciente con el máximo respeto, reconociendo y valorando sus necesidades y preocupaciones individuales.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="feature text-center">
            <div class="icon-circle mb-3">
              <i class="fa-regular fa-eye fa-3x"></i>
            </div>
            <h3 class="subtituloSeccionValores">Confidencialidad</h3>
            <p class="parrafoSeccionValores">
              Mantenemos la confidencialidad de la información de nuestros pacientes en todo momento, garantizando la discreción en cada consulta. </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="feature text-center">
            <div class="icon-circle mb-3">
              <i class="fa-regular fa-comments fa-3x"></i>
            </div>
            <h3 class="subtituloSeccionValores">Comunicación</h3>
            <p class="parrafoSeccionValores">
              Fomentamos una comunicación abierta y transparente con nuestros pacientes, asegurándonos de que entiendan cada aspecto de su tratamiento. </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="SeccionServicios" class="SeccionServicios text-white">
    <div class="container">
      <h2 class="tituloServicios text-center">Nuestros Servicios</h2>
      <div class="row justify-content-center SeccionFilaServicios">
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="feature text-center">
            <div class="icon-circle mb-3">
              <img class="imgServicio" src="img/imgServicios/imgServicio1.jpg" alt="" />
            </div>
            <h3 class="subtituloSeccionServicios">Medicina General</h3>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="feature text-center">
            <div class="icon-circle mb-3">
              <img class="imgServicio" src="img/imgServicios/imgServicio2.jpg" alt="" />
            </div>
            <h3 class="subtituloSeccionServicios">Pediatria</h3>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="feature text-center">
            <div class="icon-circle mb-3">
              <img class="imgServicio" src="img/imgServicios/imgServicio3.webp" alt="" />
            </div>
            <h3 class="subtituloSeccionServicios">Ortopedia</h3>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="feature text-center">
            <div class="icon-circle mb-3">
              <img class="imgServicio" src="img/imgServicios/imgServicioCirugíaGeneral.jpg" alt="" />
            </div>
            <h3 class="subtituloSeccionServicios">Cirugía General</h3>
          </div>
        </div>
      </div>
      <div class="ContenedorBtn text-center">
        <a href="PaginaServicios.php" class="btnSeccionServicios">Todos los servicios</a>
      </div>
    </div>
  </section>


  <section id="SeccionTestimonios" class="SeccionTestimonios text-white">
    <div class="container">
      <h2 class="tituloTestimonios text-center mb-5">
        Lo que Dicen Nuestros Pacientes
      </h2>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="testimonial text-center">
            <img src="img/imgTestimonios/ImgTestimonios01.jpg" alt="Patient 1" class="rounded-circle mb-3" width="100" />
            <p class="mb-3">
              "I urgently required dental help last 4th of July. And despite
              all other clinics being closed, BeDentist took my appointment!"
            </p>
            <h5>Herbert Wallace</h5>
            <small class="text-muted">May 10, 2018</small>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="testimonial text-center">
            <img src="img/imgTestimonios/ImgTestimonios02.jpg" alt="Patient 2" class="rounded-circle mb-3" width="100" />
            <p class="mb-3">
              "Comparing teeth whitening prices here and elsewhere, I picked
              BeDentist. The result was beyond my expectations!"
            </p>
            <h5>Gary Growles</h5>
            <small class="text-muted">May 10, 2018</small>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="testimonial text-center">
            <img src="img/imgTestimonios/ImgTestimonios03.webp" alt="Patient 3" class="rounded-circle mb-3" width="100" />
            <p class="mb-3">
              "Taking my kids to a dentist has never been easier. They just
              loved the welcoming and warm atmosphere in there!"
            </p>
            <h5>Daniela Robbery</h5>
            <small class="text-muted">May 10, 2018</small>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'Footer.php'; ?>
  <script>
    src = "Scripts.js";
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>