<?php
require_once __DIR__ . '/../models/UserModel.php';
session_start();

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
                    ? "/SmartStockManager-ADSO/app/views/admin/admin_dashboard.php"
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
        header("Location: ./../views/auth/login.php");
        exit();
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
