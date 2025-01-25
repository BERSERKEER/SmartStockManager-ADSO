<?php
$host = "localhost";
$database = "ssm[adso]";
$username = "root";
$password = "";

// Crear conexión
$conexion = mysqli_connect($host, $username, $password, $database);

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
