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
    <main class="auth-container" id="login">
        <div class="logo-container">
            <img src="/SmartStockManager-ADSO/public/images/large_lg-light.png" alt="Logo" />
        </div>

        <!--Mensaje de error_ -->
        <?php if (isset($_GET['error'])) echo "<p style='color:red;'>Usuario o contraseña incorrectos</p>"; ?>

        <form class="login-form" action="../../config/validate.php" method="POST">
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