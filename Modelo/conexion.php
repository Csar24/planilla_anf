<?php


$servername = "localhost"; // Puede ser "localhost" si estás en el mismo servidor
$username = "root";
$password = "";
$database = "planilla_anf";

// Establece la conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Verifica si la conexión fue exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>