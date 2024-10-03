<?php
// Archivo de conexión a la base de datos: conexion.php
$host = "127.0.0.1";
$user = "root";
$password = "Genius2017";
$database = "BD_NOTA";

$con = mysqli_connect($host, $user, $password, $database);

// Verificamos la conexión
if (!$con) {
    die("Conexión fallida: " . mysqli_connect_error());
}
