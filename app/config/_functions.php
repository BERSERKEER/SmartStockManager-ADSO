<?php
require_once("./database.php");

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
            // Casos de registros
        case 'editar_registro':
            //editar_registro();
            break;

        case 'eliminar_registro':
            // eliminar_registro();
            break;

        case 'acceso_user':
            acceso_user();
            break;
    }
}

// function editar_registro()
// {
//     $conexion = mysqli_connect("localhost", "root", "", "register_users");
//     extract($_POST);
//     $consulta = "UPDATE user SET nombre = '$nombre', correo = '$correo', telefono = '$telefono', password = '$password' WHERE id = '$id'";

//     mysqli_query($conexion, $consulta);

//     header('Location: ../views/user.php');
// }

// function eliminar_registro()
// {
//     $conexion = mysqli_connect("localhost", "root", "", "r_user");
//     extract($_POST);
//     $id = $_POST['id'];
//     $consulta = "DELETE FROM user WHERE id = $id";

//     mysqli_query($conexion, $consulta);

//     header('Location: ../views/user.php');
// }

function acceso_user()
{
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    session_start();
    $_SESSION['nombre'] = $nombre;

    $conexion = mysqli_connect("localhost", "root", "", "register_users");
    $consulta = "SELECT * FROM empleados WHERE nombre = '$nombre' AND password = '$password'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);

    if ($filas) {
        header('Location: ./app/views/admin/dashboard.php');
    } else {
        header('Location: login.php');
        session_destroy();
    }
}
