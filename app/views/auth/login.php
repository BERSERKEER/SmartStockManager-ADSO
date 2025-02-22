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
    <main class="auth-container">
        <div class="logo-container">
            <img src="/SmartStockManager-ADSO/public/images/large_lg-light.png" alt="Logo" />
        </div>

        <!-- Formulario de inicio de sesión -->
        <form class="login-form" action="/core/" method="POST">
            <!-- Mostrar mensaje de error si existe -->
            <?php
            session_start();
            if (isset($_SESSION['error_message'])) {
                echo "<div class='form-error'>";
                echo $_SESSION['error_message'];
                echo "</div>";
                // Limpiar mensaje de error después de mostrarlo
                unset($_SESSION['error_message']);
            }
            ?>

            <div class="form-field">
                <input
                    class="form-input"
                    type="text"
                    id="correo"
                    name="usuario"
                    required
                    placeholder=" ">
                <label class="input-label" for="correo">Correo electrónico</label>
            </div>

            <div class="form-field">
                <input
                    type="password"
                    class="form-input"
                    id="password"
                    name="password"
                    required
                    placeholder=" ">
                <label class="input-label" for="password">Contraseña</label>
            </div>

            <button type="submit" class="btn btn-primary">Ingresar</button>

            <div class="form-link">
                <a href="./account_recovery_page.php">Olvidé mi contraseña</a>
            </div>
        </form>
    </main>
</body>

</html>