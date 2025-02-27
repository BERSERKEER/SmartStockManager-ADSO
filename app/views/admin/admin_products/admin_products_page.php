<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - productos</title>
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
            <h2>Productos</h2>
            <div class="search-filter-container">
                <input type="text" id="search-bar" placeholder="Buscar..." />
                <p>Button</p>
                <!-- Categorías -->
                <select id="category-filter">
                    <option value="all">Todas las categorías</option>
                    <option value="ventas">Ventas</option>
                    <option value="usuarios">Usuarios</option>
                    <option value="clientes">Clientes</option>
                    <option value="productos">Productos</option>
                </select>

                <!-- Filtros -->
                <select id="sort-filter">
                    <option value="recientes">Más recientes</option>
                    <option value="populares">Más populares</option>
                    <option value="mayor-precio">Mayor precio</option>
                    <option value="menor-precio">Menor precio</option>
                </select>

                <div class="icon-container">
                    <p>Button</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="product-grid">
                <!--Card:1-->
                <div class="product-card">
                    <img src="https://www.goodwood.com/globalassets/.road--racing/road/news/2024/10-october/best-muscle-cars-update/2025-cadillac-ct4-v-blackwing-copy.jpg?rxy=0.5,0.5&width=1280&height=720" alt="Producto" class="product-img">
                    <div class="product-info">
                        <h3>Nombre del Producto</h3>
                        <p>Descripción corta del producto.</p>
                        <span class="price">$99.99</span>
                        <span class="stock">Stock: 15</span>
                        <div class="product-actions">
                            <p>Button</p>
                            <p>Button</p>
                        </div>
                    </div>
                </div>
                <!--Card:2-->
                <div class="product-card">
                    <img src="https://www.goodwood.com/globalassets/.road--racing/road/news/2024/10-october/best-muscle-cars-update/2025-cadillac-ct4-v-blackwing-copy.jpg?rxy=0.5,0.5&width=1280&height=720" alt="Producto" class="product-img">
                    <div class="product-info">
                        <h3>Nombre del Producto</h3>
                        <p>Descripción corta del producto.</p>
                        <span class="price">$99.99</span>
                        <span class="stock">Stock: 15</span>
                        <div class="product-actions">
                            <p>Button</p>
                            <p>Button</p>
                        </div>
                    </div>
                </div>
                <!--Card:0-->
            </div>
        </div>
    </main>
</body>

</html>