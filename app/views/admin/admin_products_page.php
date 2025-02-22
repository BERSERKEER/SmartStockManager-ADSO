<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - productos</title>
    <!-- Libreries -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Routes CSS Styles -->
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/styles.css">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css">
    <link id="favicon" rel="icon" type="image/png" href="/SmartStockManager-ADSO/public/images/short_lg-dark.png">
    <!-- Routes JS -->
    <script src="/SmartStockManager-ADSO/public/js/icon-theme.js"></script>
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SmartStockManager-ADSO/app/views/shared/sidebar.php'; ?>
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

        <div class="container">
            <!-- Barra de búsqueda y filtros -->
            <h1>Productos</h1>
            <div class="search-filter-container">
                <!-- Barra de búsqueda -->

                <input type="text" id="search-bar" placeholder="Buscar..." />
                <button id="search-btn">Buscar</button>

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
                    <a href="">
                        <img src="facebook-icon.png" alt="" class="icon">
                    </a>
                    <a href="./SmartStockManager-ADSO/public/images/icon/icon-clould.svg">
                        <img src="twitter-icon.png" alt="" class="icon">
                    </a>
                    <a href="../../../public/images/icon/icon-clould.svg">
                        <img src="instagram-icon.png" alt="" class="icon">
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="product-grid">
                <!-- Tarjeta de Producto -->
                <div class="product-card">
                    <img src="/ruta-del-producto.jpg" alt="Producto" class="product-img">
                    <div class="product-info">
                        <h3>Nombre del Producto</h3>
                        <p>Descripción corta del producto.</p>
                        <span class="price">$99.99</span>
                        <span class="stock">Stock: 15</span>
                        <div class="product-actions">
                            <button class="edit-btn">Editar</button>
                            <button class="delete-btn">Eliminar</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <img src="/ruta-del-producto.jpg" alt="Producto" class="product-img">
                    <div class="product-info">
                        <h3>Producto 2</h3>
                        <p>Otra descripción.</p>
                        <span class="price">$59.99</span>
                        <span class="stock">Stock: 30</span>
                        <div class="product-actions">
                            <button class="edit-btn">Editar</button>
                            <button class="delete-btn">Eliminar</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <img src="/ruta-del-producto.jpg" alt="Producto" class="product-img">
                    <div class="product-info">
                        <h3>Producto 2</h3>
                        <p>Otra descripción.</p>
                        <span class="price">$59.99</span>
                        <span class="stock">Stock: 30</span>
                        <div class="product-actions">
                            <button class="edit-btn">Editar</button>
                            <button class="delete-btn">Eliminar</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <img src="/ruta-del-producto.jpg" alt="Producto" class="product-img">
                    <div class="product-info">
                        <h3>Producto 2</h3>
                        <p>Otra descripción.</p>
                        <span class="price">$59.99</span>
                        <span class="stock">Stock: 30</span>
                        <div class="product-actions">
                            <button class="edit-btn">Editar</button>
                            <button class="delete-btn">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

</html>