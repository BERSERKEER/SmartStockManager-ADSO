<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - inicio</title>
    <!-- Libreries -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Routes CSS -->
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/styles.css">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css">
    <link id="favicon" rel="icon" type="image/png" href="/SmartStockManager-ADSO/public/images/short_lg-dark.png">
    <!-- Routes JS -->
    <script src="/SmartStockManager-ADSO/public/js/icon-theme.js"></script>
    <script src="/SmartStockManager-ADSO/public/js/menu_nofi.js"></script>
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SmartStockManager-ADSO/app/views/shared/sidebar.php'; ?>
    <main>
        <div class="container">
            <h3>Acciones Rápidas</h3>
            <div class="data-container">
                <div class="stats-cards">
                    <!-- Card:1 -->
                    <div class="stat-card active">
                        <div class="stat-info">
                            <h3>150</h3>
                            <p>Usuarios registrados</p>
                        </div>
                        <a href="#">
                            <img src="/SmartStockManager-ADSO/public/images/icon/icon_groups.svg" alt="Usuarios" class="iconbox">
                        </a>
                    </div>

                    <!-- Card:2 -->
                    <div class="stat-card active">
                        <div class="stat-info">
                            <h3>25</h3>
                            <p>Proveedores</p>
                        </div>
                        <a href="#">
                            <img src="/SmartStockManager-ADSO/public/images/icon/icon-person.svg" alt="Más vendidos" class="iconbox">
                        </a>
                    </div>

                    <!-- Card:3 -->
                    <div class="stat-card active">
                        <div class="stat-info">
                            <h3>$5,230</h3>
                            <p>Ventas del día</p>
                        </div>
                        <a href="#">
                            <img src="/SmartStockManager-ADSO/public/images/icon/icon_money.svg" alt="Ventas" class="iconbox">
                        </a>
                    </div>

                    <!-- Card:4 -->
                    <div class="stat-card active">
                        <div class="stat-info">
                            <h3>320</h3>
                            <p>Productos en stock</p>
                        </div>
                        <a href="#">
                            <img src="/SmartStockManager-ADSO/public/images/icon/icon_stock.svg" alt="Stock" class="iconbox">
                        </a>
                    </div>

                    <!-- Card:5 -->
                    <div class="stat-card active">
                        <div class="stat-info">
                            <h3>8</h3>
                            <p>Existencia total</p>
                        </div>
                        <a href="#">
                            <img src="/SmartStockManager-ADSO/public/images/icon/icon_support.svg" alt="Soporte" class="iconbox">
                        </a>
                    </div>

                    <!-- Card:6 -->
                    <div class="stat-card active">
                        <div class="stat-info">
                            <h3>$45,700</h3>
                            <p>Existencia vendida</p>
                        </div>
                        <a href="#">
                            <img src="/SmartStockManager-ADSO/public/images/icon/icon_revenue.svg" alt="Ingresos" class="iconbox">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>