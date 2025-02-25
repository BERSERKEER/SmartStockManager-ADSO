<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Reportes</title>
    <!-- Librerías -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Estilos -->
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/styles.css">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css">
    <link id="favicon" rel="icon" type="image/png" href="/SmartStockManager-ADSO/public/images/short_lg-dark.png">

    <script src="/SmartStockManager-ADSO/public/js/icon-theme.js"></script>
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SmartStockManager-ADSO/app/views/shared/sidebar.php'; ?>

    <!-- Contenido Principal -->
    <main class="dashboard-main">
        <!-- Estadísticas Principales -->
        <div class="dashboard-stats">
            <div class="stat-card">
                <h3>$120,000</h3>
                <p>Ventas Totales</p>
            </div>
            <div class="stat-card">
                <h3>350</h3>
                <p>Productos Vendidos</p>
            </div>
            <div class="stat-card">
                <h3>15</h3>
                <p>Empleados Activos</p>
            </div>
        </div>
        <!-- Tabla de Órdenes -->
        <div class="container">
            <h2>Últimas Órdenes</h2>
            <table>
                <thead>
                    <tr>
                        <th>Orden ID</th>
                        <th>Cliente</th>
                        <th>Estado</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#001</td>
                        <td>Juan Pérez</td>
                        <td><span class="status completed">Completado</span></td>
                        <td>$150.00</td>
                    </tr>
                    <tr>
                        <td>#002</td>
                        <td>Maria López</td>
                        <td><span class="status pending">Pendiente</span></td>
                        <td>$200.00</td>
                    </tr>
                    <tr>
                        <td>#003</td>
                        <td>Carlos Díaz</td>
                        <td><span class="status canceled">Cancelado</span></td>
                        <td>$0.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Productos Más Vendidos -->
        <div class="container">
            <h2>Productos Más Vendidos</h2>
            <ul class="product-list">
                <li>Pastillas de freno - <span class="price">$120</span></li>
                <li>Batería 12V - <span class="price">$200</span></li>
                <li>Aceite sintético 5W-30 - <span class="price">$300</span></li>
            </ul>
        </div>
        <!-- Información Extra -->
        <div class="container">
            <h2>Información Adicional</h2>
            <div class="extra-stats">
                <div class="stat-card">
                    <h3>5</h3>
                    <p>Promociones Activas</p>
                </div>
                <div class="stat-card">
                    <h3>20</h3>
                    <p>Categorías de Productos</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>