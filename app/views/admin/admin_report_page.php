<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="vi ewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <!-- Ruta de librerias-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Ruta de estilos -->
    <link rel="stylesheet" href="../../../public/css/admin_dashboard.css">
    <link rel="icon" href="../../../public/images/short_logo.png">
    <!--Rutas de js-->
    <script src="../../../public/js/admin_functions.js" defer></script>
</head>

<body>
    <!-- Incluyendo la barra lateral -->
    <?php include '../../../app/views/shared/aside.php'; ?>

    <!-- Incluyendo el header -->
    <?php include '../../../app/views/shared/header.php'; ?>

    <!-- Contenido Principal -->
    <main class="dashboard-main">
        <div class="card card-2">
            <h2>Actualizaciones</h2>
            <div class="stats">
                <div class="stat">
                    <h3>$120,000</h3>
                    <p>Ventas Totales</p>
                </div>
                <div class="stat">
                    <h3>350</h3>
                    <p>Productos Vendidos</p>
                </div>
                <div class="stat">
                    <h3>15</h3>
                    <p>Empleados Activos</p>
                </div>
            </div>
        </div>

        <div class="card">
            <h2>Gráfica de Ventas</h2>
            <div class="chart">
                <p>Aquí va la gráfica (puede integrarse una gráfica dinámica con librerías como Chart.js).</p>
            </div>
        </div>

        <div class="card card-2">
            <h2>Orders - 2</h2>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Cliente</th>
                        <th>Estado</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>John Doe</td>
                        <td>Completado</td>
                        <td>$150.00</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Jane Smith</td>
                        <td>Pendiente</td>
                        <td>$200.00</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Peter Parker</td>
                        <td>Cancelado</td>
                        <td>$0.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card">
            <h2>Lista de Productos</h2>
            <ul class="list">
                <li>Producto 1 - $100</li>
                <li>Producto 2 - $200</li>
                <li>Producto 3 - $300</li>
            </ul>
        </div>

        <div class="card">
            <h2>Información Adicional</h2>
            <div class="info">
                <div class="stat">
                    <h3>5</h3>
                    <p>Promociones Activas</p>
                </div>
                <div class="stat">
                    <h3>20</h3>
                    <p>Categorías Disponibles</p>
                </div>
            </div>
        </div>
    </main>

    <!--Graficas de produccion-->
    <script>
        const xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    borderColor: "red",
                    fill: false
                }, {
                    data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                    borderColor: "green",
                    fill: false
                }, {
                    data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                    borderColor: "blue",
                    fill: false
                }]
            },
            options: {
                legend: {
                    display: false
                }
            }
        });
    </script>

    <!--Pie de pagina-->
    <?php include '../../../app/views/shared/footer.php'; ?>

</body>

</html>