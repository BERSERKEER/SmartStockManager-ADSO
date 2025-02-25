<!DOCTYPE html>
<html lang="es">

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
            <div class="search-filter-container">
                <input type="text" id="search-bar" placeholder="Buscar..." />
                <p>Boton</p>
                <p class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModal">Boton</p>
            </div>
        </div>

        <div class="container">
            <h2>Lista de clientes</h2>
            <table class="user-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Juan Pérez</td>
                        <td>juan.perez@example.com</td>
                        <td>+123456789</td>
                        <td>Calle 123</td>
                        <td>Ciudad X</td>
                        <td>
                            <a href="#" class="edit-link" title="Editar" data-bs-toggle="modal" data-bs-target="#formModaledit"
                                onclick="cargarDatosCliente(1, 'Juan Pérez', 'juan.perez@example.com', '+123456789', 'Calle 123', 'Ciudad X')">
                                <img src="edit-icon.png" alt="Editar" class="action-icon">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>