<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Control Stock</title>
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
            <h2>Control de Existencias</h2>
            <p>Aquí puedes gestionar el inventario de productos.</p>
            <div class="search-filter-container">
                <input type="text" id="search-bar" placeholder="Buscar..." />
                <p>Button</p>
                <!-- Filter: Categorías -->
                <select id="category-filter">
                    <option value="all">Todas las categorías</option>
                    <option value="ventas">Ventas</option>
                    <option value="usuarios">Usuarios</option>
                    <option value="clientes">Clientes</option>
                    <option value="productos">Productos</option>
                </select>
                <!-- Filter: Otros -->
                <select id="sort-filter">
                    <option value="recientes">Más recientes</option>
                    <option value="populares">Más populares</option>
                    <option value="mayor-precio">Mayor precio</option>
                    <option value="menor-precio">Menor precio</option>
                </select>
            </div>
        </div>

        <div class="container">
            <table class="user-table" id="inventoryTable">
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Nombre</th>
                        <th>Provedor</th>
                        <th>Fecha de entrada</th>
                        <th>Existencia inicial</th>
                        <th>Existencia actual</th>
                        <th>Precio de compra</th>
                        <th>Entrada por</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pastillas de Freno</td>
                        <td>Frenos</td>
                        <td>50</td>
                        <td>$25.000</td>
                        <td>$25.000</td>
                        <td>$25.000</td>
                        <td>$25.000</td>
                        <td class="icon-container">
                            <a href="editar_existencia.php?id=1">
                                <img src="/SmartStockManager-ADSO/public/images/icon/icon_edit.svg" alt="Editar" class="action-icon">
                            </a>
                            <a href="#" onclick="eliminarProducto(1)">
                                <img src="/SmartStockManager-ADSO/public/images/icon/icon_delete.svg" alt="Eliminar" class="action-icon">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>