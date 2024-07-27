<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Servicios</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="Style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
  <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#mainCarousel"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#mainCarousel"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="img/slider-01.jpg"
            class="d-block w-100"
            alt="Dental Clinic 1"
          />
          <div class="carousel-caption">
            <h2>Appointments</h2>
            <p>
              Booking an appointment at our dental clinic is as easy as it
              gets...
            </p>
            <p>
              You will be able to schedule a convenient time for your meeting
              with our dentists with just 2 clicks!
            </p>
            <button class="btn btn-primary">Book an Appointment</button>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="img/slider-03.jpg"
            class="d-block w-100"
            alt="Dental Clinic 2"
          />
          <div class="carousel-caption">
            <h2>Our Services</h2>
            <p>
              We offer a wide range of dental services to keep your smile
              healthy and bright.
            </p>
            <button class="btn btn-primary">Learn More</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      src = "Scripts.js";
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
