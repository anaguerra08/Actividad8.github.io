<?php
$servername = "localhost";
$username = "root";  // Usuario predeterminado de XAMPP
$password = "";      // Contraseña predeterminada (vacía en XAMPP)
$dbname = "usuario_db";  // Nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>