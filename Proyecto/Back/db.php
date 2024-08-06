<?php

//credenciales de la base de datos
$servername = "localhost:3305";
$username = "root";
$password = "";
$dbname = "Clinicaa";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
