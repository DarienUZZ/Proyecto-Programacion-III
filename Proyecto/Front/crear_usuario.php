<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

</head>

<body class="Registro d-flex justify-content-center align-items-center vh-100">
    <div class="cardResgistro">
        <div class="cardBodyResgistro">
            <div class="logo-container">
                <div class="logo">
                    <img src="../Front/img/Logo-clinica.webp" alt="Logo de la empresa">
                </div>
            </div>
            <form action="../Back/Register.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control InputRegistroUsuario" id="usuario" name="usuario" placeholder="Nombre de Usuario" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control InputRegistroUsuario" id="nombre" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control InputRegistroUsuario" id="apellido1" name="apellido1" placeholder="Primer Apellido" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control InputRegistroUsuario" id="apellido2" name="apellido2" placeholder="Segundo Apellido">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control InputRegistroUsuario" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control InputRegistroUsuario" id="telefono" name="telefono" placeholder="Teléfono" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control InputRegistroUsuario " id="contraseña" name="contraseña" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btnRegistroUsuario">Crear Usuario</button>
            </form>
            <div class="mt-3 text-center">
                <p>Ya tienes cuenta? <a href="Login.php">¡Inicia Sesion aquí!</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>