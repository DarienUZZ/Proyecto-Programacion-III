<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST['NombreContacto'];
    $email = $_POST['EmailContacto'];
    $tema = $_POST['SubjetoContacto'];
    $mensaje = $_POST['MensajeContacto'];

    $to = "dariumana04@gmail.com";
    $subject = "Asunto: $tema";
    $message = "Nombre: $nombre\nCorreo: $email\nMensaje: $mensaje\n";
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Correo enviado exitosamente.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al enviar el correo.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método no válido']);
}
?>