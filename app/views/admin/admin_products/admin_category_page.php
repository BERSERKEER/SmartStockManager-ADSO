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
    <main>
        <div class="container">
            <h2>Gestión de Categorías</h2>
            <p>Aquí puedes administrar las categorías de productos.</p>

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
            <table class="user-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre categoria</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Frenos</td>
                        <td class="icon-container">
                            <a href="editar_categoria.php?id=1">
                                <img src="/SmartStockManager-ADSO/public/images/edit-icon.png" alt="Editar" class="action-icon">
                            </a>
                            <a href="#" onclick="eliminarCategoria(1)">
                                <img src="/SmartStockManager-ADSO/public/images/delete-icon.png" alt="Eliminar" class="action-icon">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>