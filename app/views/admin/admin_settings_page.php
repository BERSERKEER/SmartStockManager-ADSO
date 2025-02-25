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

            <form class="config-form">
                <div class="form-group">
                    <label for="company-name">Nombre de la Empresa</label>
                    <input type="text" id="company-name" name="company-name" placeholder="Ingrese el nombre">
                </div>

                <div class="form-group">
                    <label for="company-phone">Teléfono</label>
                    <input type="tel" id="company-phone" name="company-phone" placeholder="Ingrese el teléfono">
                </div>

                <div class="form-group">
                    <label for="company-address">Dirección</label>
                    <input type="text" id="company-address" name="company-address" placeholder="Ingrese la dirección">
                </div>

                <div class="form-group">
                    <label for="company-nit">NIT / Identificación Fiscal</label>
                    <input type="text" id="company-nit" name="company-nit" placeholder="Ingrese el NIT">
                </div>

                <div class="form-group">
                    <label for="company-email">Correo Electrónico</label>
                    <input type="email" id="company-email" name="company-email" placeholder="Ingrese el correo">
                </div>

                <div class="form-group">
                    <label for="company-timezone">Zona Horaria</label>
                    <select id="company-timezone" name="company-timezone">
                        <option value="GMT-5">GMT -5 (Colombia, Perú, Ecuador)</option>
                        <option value="GMT-6">GMT -6 (México, Costa Rica)</option>
                        <option value="GMT-3">GMT -3 (Argentina, Chile)</option>
                    </select>
                </div>
            </form>
        </div>

        <div class="container">
            <h2>
                <img src="/SmartStockManager-ADSO/public/images/apariencia.png" alt="Apariencia" width="30">
                Apariencia
            </h2>
            <p>Personaliza el tema del sistema, cambia los colores y la tipografía.</p>

            <form class="config-form">
                <!-- Selector de Tema -->
                <div class="form-group">
                    <label for="theme">Tema del Sistema</label>
                    <select id="theme">
                        <option value="light">Claro</option>
                        <option value="dark">Oscuro</option>
                        <option value="custom">Personalizado</option>
                    </select>
                </div>

                <!-- Tamaño de Fuente -->
                <div class="form-group">
                    <label for="font-size">Tamaño de Fuente</label>
                    <input type="range" id="font-size" min="12" max="24" value="16">
                    <span id="font-size-value">16px</span>
                </div>
            </form>
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

            <form class="config-form">
                <!-- Cambio de Contraseña -->
                <div class="form-group">
                    <label for="current-password">Contraseña Actual</label>
                    <input type="password" id="current-password" placeholder="Ingresa tu contraseña actual">
                </div>

                <div class="form-group">
                    <label for="new-password">Nueva Contraseña</label>
                    <input type="password" id="new-password" placeholder="Ingresa la nueva contraseña">
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirmar Nueva Contraseña</label>
                    <input type="password" id="confirm-password" placeholder="Repite la nueva contraseña">
                </div>

                <!-- Activar Autenticación en Dos Pasos -->
                <div class="form-group">
                    <label for="enable-2fa">Autenticación en Dos Pasos (2FA)</label>
                    <select id="enable-2fa">
                        <option value="disabled">Desactivado</option>
                        <option value="sms">SMS</option>
                        <option value="email">Correo Electrónico</option>
                        <option value="authenticator">App Autenticadora</option>
                    </select>
                </div>

                <!-- Sesiones Activas -->
                <div class="form-group">
                    <label>Sesiones Activas</label>
                    <ul class="session-list">
                        <li>📍 Dispositivo: Windows PC - Ubicación: Colombia <button class="btn-logout">Cerrar Sesión</button></li>
                        <li>📍 Dispositivo: iPhone - Ubicación: México <button class="btn-logout">Cerrar Sesión</button></li>
                    </ul>
                </div>

                <!-- Gestión de Permisos -->
                <div class="form-group">
                    <label for="user-role">Rol de Usuario</label>
                    <select id="user-role">
                        <option value="admin">Administrador</option>
                        <option value="editor">Editor</option>
                        <option value="viewer">Solo Lectura</option>
                    </select>
                </div>
            </form>
        </div>
    </main>
</body>

</html>