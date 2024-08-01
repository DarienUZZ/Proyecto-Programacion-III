<?php

//credenciales de la base de datos
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "clinica"; 

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
