<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <!-- Ruta de Estilos -->
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/login_style.css">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/root.css">
    <link rel="icon" href="/SmartStockManager-ADSO/public/images/short_logo.png">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css">
</head>

<body>
    <main class="auth-container">
        <div class="logo-container">
            <img src="/public/images/large_logo.png" alt="Logo" />
        </div>

        <!-- Formulario de inicio de sesión -->
        <form class="login-form" action="_functions.php" method="POST">
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

            <!-- Campo de correo -->
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

            <!-- Campo de contraseña -->
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

            <!-- Botón de inicio de sesión -->
            <button type="submit" class="btn btn-primary">Ingresar</button>

            <!-- Enlace de recuperación de contraseña -->
            <div class="form-link">
                <a href="./app/views/auth/account_recovery_page.php">Olvidé mi contraseña</a>
            </div>
        </form>
    </main>
</body>

</html>