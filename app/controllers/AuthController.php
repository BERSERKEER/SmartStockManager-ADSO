<?php
require_once __DIR__ . '/../models/UserModel.php';
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);


class AuthController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new UserModel($pdo);
    }

    public function autenticación()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo = $_POST["correo"];
            $password = $_POST["password"];
            $user = $this->model->autenticación($correo, $password);

            if ($user) {
                $_SESSION["user"] = $user;
                $redirect_url = ($user["rol"] == 1)
                    ? "/SmartStockManager-ADSO/app/views/admin/admin_home_page.php"
                    : "/SmartStockManager-ADSO/app/views/employeer/employ_home_page.php";

                header("Location: $redirect_url");
                exit();
            } else {
                $_SESSION["error"] = "Usuario o contraseña incorrectos";
                header("Location: /SmartStockManager-ADSO/app/views/auth/login.php");
                exit();
            }
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: /SmartStockManager-ADSO/app/views/auth/login.php");
        exit();
    }

    public function solicitarRecuperacion()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo = $_POST["correo"];
            $user = $this->model->buscarPorCorreo($correo);

            if ($user) {
                $token = bin2hex(random_bytes(6));
                $this->model->guardarToken($correo, $token);

                // Enviar el código por correo (usaremos mail() por ahora)
                $asunto = "Código de recuperación de contraseña";
                $mensaje = "Tu código de recuperación es: " . $token;
                $cabeceras = "From: tuemail@tudominio.com";

                if (mail($correo, $asunto, $mensaje, $cabeceras)) {
                    $_SESSION["mensaje"] = "Se ha enviado un código a tu correo.";
                } else {
                    $_SESSION["error"] = "Hubo un error al enviar el correo.";
                }
            } else {
                $_SESSION["error"] = "Correo no registrado.";
            }
            header("Location: /SmartStockManager-ADSO/app/views/auth/account_code_auth_page.php");
            exit();
        }
    }

    public function verificarCodigo()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo = $_POST["correo"];
            $codigo = $_POST["codigo"];
            if ($this->model->verificarToken($correo, $codigo)) {
                header("Location: /SmartStockManager-ADSO/app/views/auth/account_new_password.php?correo=" . $correo);
            } else {
                $_SESSION["error"] = "Código incorrecto o expirado.";
                header("Location: /SmartStockManager-ADSO/app/views/auth/account_code_auth_page.php");
            }
            exit();
        }
    }

    public function cambiarContrasena()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo = $_POST["correo"];
            $nuevaContrasena = password_hash($_POST["password"], PASSWORD_BCRYPT);
            $this->model->actualizarContrasena($correo, $nuevaContrasena);
            $_SESSION["mensaje"] = "Contraseña actualizada correctamente.";
            header("Location: /SmartStockManager-ADSO/app/views/auth/login.php");
            exit();
        }
    }
}

if (isset($_GET["action"])) {
    require_once __DIR__ . '/../config/database.php';
    $controller = new AuthController($pdo);

    if ($_GET["action"] == "autenticación") {
        $controller->autenticación();
    } elseif ($_GET["action"] == "logout") {
        $controller->logout();
    }
}
