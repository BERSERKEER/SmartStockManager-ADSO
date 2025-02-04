<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Productos</title>
    <link rel="stylesheet" href="../../../public/css/admin_product_style.css">
    <link rel="stylesheet" href="../../../public/css/normalize.css">
    <link rel="icon" href="../../../public/images/short_logo.png">
</head>

<body>
    <!-- Incluyendo la barra lateral -->
    <?php include '../../../app/views/shared/aside.php'; ?>

    <!-- Incluyendo el header -->
    <?php include '../../../app/views/shared/header.php'; ?>

    <!-- Contenido Principal -->
    <main>
        <div class="container">
            <div class="stats-cards">
                <div class="stat-card">
                    <div class="stat-info">
                        <h3>$53,000</h3>
                        <p>Today's Money <span class="positive">+55%</span></p>
                    </div>
                    <img src="../../../public/images/icon/icon-shopping-cart.svg" alt="coins" class="iconbox iconb1">
                </div>
                <div class="stat-card">
                    <div class="stat-info">
                        <h3>2,300</h3>
                        <p>Today's Users <span class="positive">+5%</span></p>
                    </div>
                    <img src="../../../public/images/icon/icon_groups.svg" alt="coins" class="iconbox iconb1">
                </div>
                <div class="stat-card">
                    <div class="stat-info">
                        <h3>+3,020</h3>
                        <p>New Clients <span class="negative">-14%</span></p>
                    </div>
                    <img src="../../../public/images/icon/icon-person.svg" alt="coins" class="iconbox iconb1">
                </div>
                <div class="stat-card">
                    <div class="stat-info">
                        <h3>$173,000</h3>
                        <p>Total Sales <span class="positive">+8%</span></p>
                    </div>
                    <img src="../../../public/images/icon/icon_money.svg" alt="coins" class="iconbox iconb1">
                </div>
            </div>
        </div>

        <!--Base-->
        <div class="welcome-section">
            <h3>Welcome back, Mark Johnson</h3>
            <p>Glad to see you again!</p>
            <a href="#" class="enlace-con-imagen"> Tab to record
                <img src="../../../public/images/icon/icon-arrow-forward.svg" alt="Icono">
            </a>
        </div>

        <div class="grid-container">
            <!-- Tarjetas de productos -->
            <div class="product-card">
                <img src="https://via.placeholder.com/150" alt="Producto">
                <h3>Producto 1</h3>
                <p>Descripción breve del producto.</p>
                <p class="price">$19.99</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/150" alt="Producto">
                <h3>Producto 2</h3>
                <p>Descripción breve del producto.</p>
                <p class="price">$24.99</p>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/150" alt="Producto">
                <h3>Producto 3</h3>
                <p>Descripción breve del producto.</p>
                <p class="price">$29.99</p>
            </div>
            <!-- Agrega más tarjetas hasta completar 18 -->

        </div>
    </main>
</body>

</html>