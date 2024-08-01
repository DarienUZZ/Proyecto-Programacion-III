<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contactos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>

    <?php include 'modulos/Header.php'?>
    
    <section class="PaginaContactos py-5">
        <div class="container">
            <h2 class="text-center tituloContacto">
                Para Contactarnos, Por Favor Complete El Siguiente Formulario
            </h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.4626129269773!2d-84.14927172414434!3d9.978591573401044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fae88df8c0c7%3A0x7c70bba80caa3281!2sCl%C3%ADnica%20PerteneSer!5e0!3m2!1sen!2scr!4v1722301057775!5m2!1sen!2scr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6 mb-4">
                    <form>
                        <div class="mb-3">
                            <label for="contactName" class="form-label EtiquetaContacto">Nombre*</label>
                            <input type="text" class="form-control InputsContacto" id="contactName" placeholder="Tu Nombre*" required>
                        </div>
                        <div class="mb-3">
                            <label for="contactEmail" class="form-label EtiquetaContacto">Correo Electrónico</label>
                            <input type="email" class="form-control InputsContacto" id="contactEmail" placeholder="nombre@gmail.com*" required>
                        </div>
                        <div class="mb-3">
                            <label for="contactSubject" class="form-label EtiquetaContacto">Tema de Consulta</label>
                            <input type="text" class="form-control InputsContacto" id="contactSubject" placeholder="Tu Consulta*" required>
                        </div>
                        <div class="mb-3">
                            <label for="contactMessage" class="form-label EtiquetaContacto">Mensaje</label>
                            <textarea class="form-control InputsContacto" id="contactMessage" rows="5" placeholder="Tu Mensaje*" required></textarea>
                        </div>
                        <button type="submit" class="btnContacto">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'modulos/Footer.php'; ?>
    <script>
        src = "Scripts.js";
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>