<?php
$host = "localhost";
$user = "TU USUARIO";
$pass = "TU PASS";
$dbname = "EL NOMBRE DE TU DDBB";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
