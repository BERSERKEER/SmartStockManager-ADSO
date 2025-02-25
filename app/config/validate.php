<?php
session_start();
require_once '../config/database.php';

function autenticarUsuario($correo, $password, $conn)
{
    $result = $conn->query("SELECT nombre, rol FROM user WHERE correo = '$correo' AND password = '$password'");

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        $_SESSION['user'] = $usuario['nombre'];

        // Redirigir dependiendo del rol
        if ($usuario['rol'] == 1) {
            header("Location: ../views/admin/admin_home_page.php");
        } elseif ($usuario['rol'] == 2) {
            header("Location: ../views/employeer/employ_home_page.php");
        }
    } else {
        header("Location: ../views/auth/login.php");
        session_destroy();
    }

    $conn->close();
    exit();
}

autenticarUsuario($_POST['correo'] ?? '', $_POST['password'] ?? '', $conn);
