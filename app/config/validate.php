<?php
$conexion = mysqli_connect("localhost", "root", "", "register_users");

// Verifica si se envió el formulario
if (isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    //$telefono = $_POST['telefono'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encriptar contraseña
    // $fecha = $_POST['fecha'];
    $rol = $_POST['rol'];

    // Consulta SQL para insertar datos
    $consulta = "INSERT INTO empleados (nombre, correo, password, telefono, fecha, rol) 
                 VALUES ('$nombre', '$correo', '$password', '$telefono', '$fecha', '$rol')";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $consulta)) {
        header("Location: index.php"); // Redirigir a otra página
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}
