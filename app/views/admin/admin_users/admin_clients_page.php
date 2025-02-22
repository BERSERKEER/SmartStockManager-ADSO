<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios - Clientes</title>
    <!-- Libreries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Routes Styles -->
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
            <!-- Barra de búsqueda y botón Agregar -->
            <div class="search-filter-container">
                <input type="text" id="search-bar" placeholder="Buscar..." />
                <button id="search-btn">Buscar</button>

                <!-- Botón para abrir modal de agregar proveedor -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModal">
                    Agregar Cliente
                </button>
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

        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Agregar Cliente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <!-- Primera columna -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre Completo</label>
                                        <input type="text" class="form-control" id="nombre" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Teléfono</label>
                                        <input type="tel" class="form-control" id="telefono" required>
                                    </div>
                                </div>

                                <!-- Segunda columna -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="direccion" class="form-label">Dirección (Opcional)</label>
                                        <input type="text" class="form-control" id="direccion">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ciudad" class="form-label">Ciudad</label>
                                        <input type="text" class="form-control" id="ciudad" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar Cliente</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="formModaledit" tabindex="-1" aria-labelledby="formModaleditLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Cliente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <!-- Primera columna -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="edit-id" class="form-label">ID</label>
                                        <input type="text" class="form-control" id="edit-id" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit-nombre" class="form-label">Nombre Completo</label>
                                        <input type="text" class="form-control" id="edit-nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit-email" class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="edit-email">
                                    </div>
                                </div>

                                <!-- Segunda columna -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="edit-telefono" class="form-label">Teléfono</label>
                                        <input type="tel" class="form-control" id="edit-telefono">
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit-direccion" class="form-label">Dirección (Opcional)</label>
                                        <input type="text" class="form-control" id="edit-direccion">
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit-ciudad" class="form-label">Ciudad</label>
                                        <input type="text" class="form-control" id="edit-ciudad">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function cargarDatosProveedor(id, nombre, email, telefono, direccion, ciudad, tipo, razon) {
                document.getElementById('edit-id').value = id;
                document.getElementById('edit-nombre').value = nombre;
                document.getElementById('edit-email').value = email;
                document.getElementById('edit-telefono').value = telefono;
            }
        </script>
</body>

</html>