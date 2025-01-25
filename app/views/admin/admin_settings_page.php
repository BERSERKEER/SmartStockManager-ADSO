<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuraciones</title>
    <!-- Ruta de librerías -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Ruta de estilos -->
    <link rel="stylesheet" href="../../../public/css/admin_settings_style.css">
    <link rel="stylesheet" href="../../../public/css/normalize.css">
    <link rel="icon" href="../../../public/images/short_logo.png">
</head>

<body>
    <?php include '../../../app/views/shared/aside.php'; ?>
    <?php include '../../../app/views/shared/header.php'; ?>

    <main>
        <section class="banner">
            <div class="user-info">
                <img src="../../../public/images/icon/icon-person.svg" alt="Avatar del Usuario">
                <div class="details">
                    <h3>John Doe</h3>
                    <p>john.doe@example.com</p>
                </div>
            </div>
            <div class="welcome-message">
                <p>¡Bienvenido de nuevo, John!</p>
            </div>
        </section>

        <!-- Ajustes de cuenta -->
        <section class="preferences-section">
            <h2>Ajustes de Cuenta</h2>
            <form action="#">
                <div>
                    <label for="username">Nombres</label>
                    <input type="text" id="username" name="username" value="John Doe">
                </div>
                <div>
                    <label for="username">Apellidos</label>
                    <input type="text" id="username" name="username" value="John Doe">
                </div>
                <div>
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" value="john.doe@example.com">
                </div>
                <div>
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" value="******">
                </div>
                <div>
                    <label for="password">Confirmar contraseña</label>
                    <input type="password" id="password" name="password" value="******">
                </div>
                <button type="submit">Guardar Cambios</button>
            </form>
        </section>

        <!-- Preferencias del sistema -->
        <section class="preferences-section">
            <h2>Preferencias del Sistema</h2>
            <form action="#">
                <div>
                    <label for="theme">Tema</label>
                    <select id="theme" name="theme">
                        <option value="light">Claro</option>
                        <option value="dark">Oscuro</option>
                    </select>
                </div>
                <div>
                    <label for="notifications">Notificaciones</label>
                    <input type="checkbox" id="notifications" name="notifications" checked> Habilitar Notificaciones
                </div>
                <button type="submit">Guardar Preferencias</button>
            </form>
        </section>

        <!-- Seguridad -->
        <section class="security-section">
            <h2>Seguridad</h2>
            <form action="#">
                <div>
                    <label for="two-factor">Autenticación de Dos Factores</label>
                    <input type="checkbox" id="two-factor" name="two-factor"> Habilitar
                </div>
                <button type="submit">Guardar Seguridad</button>
            </form>
        </section>

        <!-- API -->
        <section class="api-section">
            <h2>API Configuración</h2>
            <form action="#">
                <div>
                    <label for="api-key">Clave de API</label>
                    <input type="text" id="api-key" name="api-key" value="sk_test_XXXXXXXXXXXXXXXXX">
                </div>
                <button type="submit">Actualizar API</button>
            </form>
        </section>
    </main>

    <?php include '../../../app/views/shared/footer.php'; ?>
</body>

</html>