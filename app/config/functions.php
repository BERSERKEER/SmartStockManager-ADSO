<?php

function acceso_user()
{
    // Se obtienen los valores enviados por POST
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    // Se inicia la sesión
    session_start();
    $_SESSION['nombre'] = $nombre;

    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "register_users");

    // Consulta para verificar el usuario y contraseña
    $consulta = "SELECT * FROM empleados WHERE nombre = '$nombre' AND password='$password'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);

    // Si se encuentra el usuario, se redirige al panel de administración,
    // de lo contrario, se redirige al login y se destruye la sesión
    if ($filas) {
        header('Location: ../../views/admin/index.php');
    } else {
        header('Location: ../../views/auth/login.php?error=1');
        session_destroy();
    }
}

acceso_user();
