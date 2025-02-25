<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Inicio</title>
    <!-- Libraries -->
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
    <!--Include side -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SmartStockManager-ADSO/app/views/shared/employ_side.php'; ?>
    <main>
        <div class="container">
            <div class="dashboard-container">
                <!-- Stats Cards -->
                <div class="stats-cards">
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>$500,000</h3>
                            <p>Ventas del día <span class="positive">+10%</span></p>
                        </div>
                        <img src="/SmartStockManager-ADSO/public/images/icon/icon_money.svg" alt="ventas" class="iconbox">
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>120</h3>
                            <p>Productos en stock</p>
                        </div>
                        <img src="/SmartStockManager-ADSO/public/images/icon/icon-shopping-cart.svg" alt="inventario" class="iconbox">
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>8</h3>
                            <p>Clientes actuales</p>
                        </div>
                        <img src="/SmartStockManager-ADSO/public/images/icon/icon-shopping-cart.svg" alt="pedidos" class="iconbox">
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>8</h3>
                            <p>Notificaciones</p>
                        </div>

                        <a href="#" class="notification-btn">
                            <img src="/SmartStockManager-ADSO/public/images/icon/icon_notifications.svg" alt="Notificaciones" class="iconbox">
                            <span class="notification-count">8</span>
                        </a>

                        <div class="notification-menu">
                            <h4><img src="/SmartStockManager-ADSO/public/images/icon/bell.svg" alt="campana" class="menu-icon"> Notificaciones</h4>
                            <ul>
                                <li>
                                    <img src="/SmartStockManager-ADSO/public/images/icon/order.svg" alt="orden" class="notif-icon">
                                    <span>Nueva orden recibida</span>
                                    <small>Hace 2 min</small>
                                </li>
                                <li>
                                    <img src="/SmartStockManager-ADSO/public/images/icon/stock.svg" alt="stock" class="notif-icon">
                                    <span>Producto agotado: Filtro de Aire</span>
                                    <small>Hace 10 min</small>
                                </li>
                                <li>
                                    <img src="/SmartStockManager-ADSO/public/images/icon/delivery.svg" alt="entrega" class="notif-icon">
                                    <span>Pedido entregado con éxito</span>
                                    <small>Hace 1 hora</small>
                                </li>
                                <li>
                                    <img src="/SmartStockManager-ADSO/public/images/icon/reminder.svg" alt="recordatorio" class="notif-icon">
                                    <span>Recordatorio: Inventario mensual</span>
                                    <small>Hace 3 horas</small>
                                </li>
                            </ul>
                            <a href="#" class="view-all">Ver todas</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="welcome-section">
                <h3>Bienvenido de nuevo, Vendedor</h3>
                <p>¡Esperamos que tengas un gran día de ventas!</p>
                <a href="#" class="link-icon"> Ir a registrar reporte
                    <img src="/SmartStockManager-ADSO/public/images/icon/icon-arrow-forward.svg" alt="Icono">
                </a>
            </div>
        </div>

        <div class="container">
            <h3>Productos Más Vendidos</h3>
            <div class="product-grid">
                <div class="product-card">
                    <img src="images/aceite.jpg" alt="Aceite de Motor" class="product-img">
                    <div class="product-info">
                        <h3>Aceite de Motor</h3>
                        <p class="price">$20.00</p>
                        <p class="stock">50 unidades vendidas</p>
                    </div>
                </div>

                <div class="product-card">
                    <img src="images/bateria.jpg" alt="Batería" class="product-img">
                    <div class="product-info">
                        <h3>Baterías</h3>
                        <p class="price">$120.00</p>
                        <p class="stock">30 unidades vendidas</p>
                    </div>
                </div>

                <div class="product-card">
                    <img src="images/filtro.jpg" alt="Filtro de Aire" class="product-img">
                    <div class="product-info">
                        <h3>Filtros de Aire</h3>
                        <p class="price">$15.00</p>
                        <p class="stock">20 unidades vendidas</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
                datasets: [{
                    label: 'Ventas en $',
                    data: [10000, 15000, 8000, 12000, 20000, 25000, 22000],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
</body>

</html>