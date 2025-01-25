<?php
include('../config/connection_db.php');
session_start();

if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $_SESSION['usuario'] = $usuario;

    $consulta = "SELECT * FROM user WHERE usuario ='$usuario' AND password='$contraseña' AND estado='activo'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        $filas = mysqli_fetch_array($resultado);

        if ($filas && isset($filas['id_cargo'])) {
            // Redirigir según el rol del usuario
            if ($filas['id_cargo'] == 1) { // Administrador
                header("location: ../views/admin_home_pages.php");
            } elseif ($filas['id_cargo'] == 2) { // empleado
                header("location: ../views/employee_home_page.php");
            } else {
                $_SESSION['error_message'] = "Error en la autenticación. Intente nuevamente.";
                header("location: ../views/login.php");
            }
        } else {
            $_SESSION['error_message'] = "Usuario o contraseña incorrectos.";
            header("location: ../views/login.php");
        }
    } else {
        $_SESSION['error_message'] = "Error en la consulta: " . mysqli_error($conexion);
        header("location: ../views/login.php");
    }

    mysqli_free_result($resultado);
} else {
    $_SESSION['error_message'] = "Complete todos los campos.";
    header("location: ../views/login.php");
}

mysqli_close($conexion);
?>
