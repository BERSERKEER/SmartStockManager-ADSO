<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Reportes</title>
    <!-- Libraries -->
    <!-- CSS Styles -->
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/styles.css">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css">
    <!-- Favicon/images -->
    <link id="favicon" rel="icon" type="image/png" href="/SmartStockManager-ADSO/public/images/short_lg-dark.png">
    <!-- JS Scripts -->
    <script src="/SmartStockManager-ADSO/public/js/icon-theme.js"></script>
</head>

<body>
    <!--Include componenet: Sidebar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SmartStockManager-ADSO/app/views/shared/sidebar.php'; ?>
    <main>
        <div class="container">
            <div class="stats-cards">
                <!-- Card:1 -->
                <div class="stat-card active">
                    <div class="stat-info">
                        <h3>150</h3>
                        <p>Empleados activos</p>
                    </div>
                    <a href="#" class="button-box">
                        <img src="/SmartStockManager-ADSO/public/images/icon/icon_groups.svg" alt="Usuarios">
                    </a>
                </div>

                <!-- Card:2 -->
                <div class="stat-card active">
                    <div class="stat-info">
                        <h3>25</h3>
                        <p>Ventas totales</p>
                    </div>
                    <a href="#" class="button-box">
                        <img src="/SmartStockManager-ADSO/public/images/icon/icon-person.svg" alt="Más vendidos" class="iconbox">
                    </a>
                </div>

                <!-- Card:3 -->
                <div class="stat-card active">
                    <div class="stat-info">
                        <h3>0</h3>
                        <p>Generar reporte</p>
                    </div>
                    <a href="#" class="button-box">
                        <img src="/SmartStockManager-ADSO/public/images/icon/icon_money.svg" alt="Ventas" class="iconbox">
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <h2>Últimas Órdenes</h2>
            <table class="user-table">
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
        <div class="container">
            <h2>Productos Más Vendidos</h2>
            <ul class="product-list">
                <li>Pastillas de freno - <span class="price">$120</span></li>
                <li>Batería 12V - <span class="price">$200</span></li>
                <li>Aceite sintético 5W-30 - <span class="price">$300</span></li>
            </ul>
        </div>
    </main>
</body>

</html>