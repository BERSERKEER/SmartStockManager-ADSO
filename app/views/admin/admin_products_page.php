<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Productos</title>
    <!-- Estilos -->
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
        <div class="card">
            <div class="card-content">
                <!-- Texto a la izquierda -->
                <div class="card-text">
                    <h2>Gestión de Productos</h2>
                </div>
                <a href="">Añadir</a>
                <!-- Filtros a la derecha -->
                <select class="sort-products">
                    <option value="default">Ordenar por...</option>
                    <option value="price-low-high">Precio: Menor a Mayor</option>
                    <option value="price-high-low">Precio: Mayor a Menor</option>
                    <option value="newest">Más reciente</option>
                </select>
            </div>
        </div>

        <section class="product-grid">
            <div class="product-card">
                <img src="../../../public/images/icon/icon-settings.svg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p class="product-category">Categoría: Electrónica</p>
                <p>Inventario: 50 unidades</p>
                <p class="product-price">$20.00</p>
                <span class="product-badge sale">En oferta</span>
                <button class="edit-btn">Editar</button>
                <button class="delete-btn">Eliminar</button>
            </div>
            <!-- Más tarjetas... -->

            <div class="product-card">
                <img src="../../../public/images/product1.jpg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p class="product-category">Categoría: Electrónica</p>
                <p>Inventario: 50 unidades</p>
                <p class="product-price">$20.00</p>
                <span class="product-badge sale">En oferta</span>
                <button class="edit-btn">Editar</button>
                <button class="delete-btn">Eliminar</button>
            </div>

            <div class="product-card">
                <img src="../../../public/images/product1.jpg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p class="product-category">Categoría: Electrónica</p>
                <p>Inventario: 50 unidades</p>
                <p class="product-price">$20.00</p>
                <span class="product-badge sale">En oferta</span>
                <button class="edit-btn">Editar</button>
                <button class="delete-btn">Eliminar</button>
            </div>


            <div class="product-card">
                <img src="../../../public/images/product1.jpg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p class="product-category">Categoría: Electrónica</p>
                <p>Inventario: 50 unidades</p>
                <p class="product-price">$20.00</p>
                <span class="product-badge sale">En oferta</span>
                <button class="edit-btn">Editar</button>
                <button class="delete-btn">Eliminar</button>
            </div>


            <div class="product-card">
                <img src="../../../public/images/product1.jpg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p class="product-category">Categoría: Electrónica</p>
                <p>Inventario: 50 unidades</p>
                <p class="product-price">$20.00</p>
                <span class="product-badge sale">En oferta</span>
                <button class="edit-btn">Editar</button>
                <button class="delete-btn">Eliminar</button>
            </div>
        </section>

        <nav class="pagination">
            <button class="prev-page">Anterior</button>
            <span>Página <span class="current-page">1</span> de <span class="total-pages">5</span></span>
            <button class="next-page">Siguiente</button>
        </nav>
    </main>
</body>

</html>