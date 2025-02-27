<?php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../controllers/AuthController.php';

$controller = new AuthController($pdo);
$controller->autenticación();

// Si el usuario ya inició sesión, redirigir según su rol
if (isset($_SESSION["user"])) {
    if ($_SESSION["user"]["rol"] == 1) {
        header("Location: /SmartStockManager-ADSO/app/views/admin/admin_home_page.php");
    } elseif ($_SESSION["user"]["rol"] == 2) {
        header("Location: /SmartStockManager-ADSO/app/views/employee/employ_home_page.php");
    } else {
        header("Location: /SmartStockManager-ADSO/app/views/auth/login.php");
    }
    exit();
}


// Capturar errores de sesión
$error = isset($_SESSION["error"]) ? $_SESSION["error"] : "";
unset($_SESSION["error"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <!-- Routes CSS Styles -->
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/login_style.css">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css">
    <!--Routes JS-->
    <link id="favicon" rel="icon" type="image/png" href="/SmartStockManager-ADSO/public/images/short_lg-dark.png">
    <script src="/SmartStockManager-ADSO/public/js/icon-theme.js"></script>

</head>

<body>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
    <main class="auth-container" id="login">
        <div class="logo-container">
            <img src="/SmartStockManager-ADSO/public/images/large_lg-light.png" alt="Logo" />
        </div>

        <?php if (isset($_GET['error'])): ?>
            <p style="color:red;">
                <?php
                switch ($_GET['error']) {
                    case "empty":
                        echo "Por favor, completa todos los campos.";
                        break;
                    case "invalid":
                        echo "Correo o contraseña incorrectos.";
                        break;
                }
                ?>
            </p>
        <?php endif; ?>

        <form action="/SmartStockManager-ADSO/app/controllers/AuthController.php?action=autenticación" method="POST">

            <input type="hidden" name="action" value="login">

            <div class="form-field">
                <input class="form-input" type="email" id="correo" name="correo" required placeholder=" ">
                <label class="input-label" for="correo">Correo electrónico</label>
            </div>

            <div class="form-field">
                <input type="password" class="form-input" id="password" name="password" required placeholder=" ">
                <label class="input-label" for="password">Contraseña</label>
            </div>

            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>

    </main>
</body>

</html>