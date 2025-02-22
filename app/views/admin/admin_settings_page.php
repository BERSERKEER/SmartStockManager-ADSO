<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuraciones</title>
    <!-- Librerías -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Rutas CSS -->
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/styles.css">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css">
    <link id="favicon" rel="icon" type="image/png" href="/SmartStockManager-ADSO/public/images/short_lg-dark.png">
    <!-- Rutas JS -->
    <script src="/SmartStockManager-ADSO/public/js/icon-theme.js"></script>
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SmartStockManager-ADSO/app/views/shared/sidebar.php'; ?>

    <main>
        <div class="container">
            <h2>
                <img src="/SmartStockManager-ADSO/public/images/config-general.png" alt="Configuración General" width="30">
                Configuración General
            </h2>
            <p>Administra la configuración principal del sistema, como idioma y zona horaria.</p>
            <button class="btn-config">Editar Configuración General</button>
        </div>

        <div class="container">
            <h2>
                <img src="/SmartStockManager-ADSO/public/images/apariencia.png" alt="Apariencia" width="30">
                Apariencia
            </h2>
            <p>Personaliza el tema del sistema, cambia los colores y la tipografía.</p>
            <button class="btn-config">Configurar Apariencia</button>
        </div>

        <div class="container">
            <h2>
                <img src="/SmartStockManager-ADSO/public/images/notificaciones.png" alt="Notificaciones" width="30">
                Notificaciones
            </h2>
            <p>Configura cómo recibir alertas sobre actividades y eventos importantes.</p>
            <button class="btn-config">Administrar Notificaciones</button>
        </div>

        <div class="container">
            <h2>
                <img src="/SmartStockManager-ADSO/public/images/seguridad.png" alt="Seguridad" width="30">
                Seguridad
            </h2>
            <p>Administra la seguridad de tu cuenta, contraseñas y permisos.</p>
            <button class="btn-config">Configurar Seguridad</button>
        </div>
    </main>
</body>

</html>