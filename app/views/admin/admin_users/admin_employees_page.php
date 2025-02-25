<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios - Empleados</title>
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
                    Agregar Proveedor
                </button>
            </div>
        </div>

        <div class="container">
            <h2>Lista de Empleados</h2>
            <table class="user-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Cédula</th>
                        <th>Cargo</th>
                        <th>Salario</th>
                        <th>Estado</th>
                        <th>EPS</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ana Gómez</td>
                        <td>1023456789</td>
                        <td>Vendedora</td>
                        <td>$1,500,000</td>
                        <td>Activo</td>
                        <td>Sanitas</td>
                        <td>
                            <a href="#" class="edit-link" title="Editar" data-bs-toggle="modal" data-bs-target="#formModaledit"
                                onclick="cargarDatosEmpleado(1, 'Ana Gómez', '1023456789', 'Vendedora', '1500000', 'Activo', 'Sanitas')">
                                <img src="edit-icon.png" alt="Editar" class="action-icon">
                            </a>
                            <a href="#" class="delete-link" title="Eliminar">
                                <img src="delete-icon.png" alt="Eliminar" class="action-icon">
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
                        <h5 class="modal-title">Agregar Empleado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <!-- Primera columna -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="tipo_doc" class="form-label">Tipo de Documento</label>
                                        <select class="form-control" id="tipo_doc" required>
                                            <option value="CC">Cédula de Ciudadanía</option>
                                            <option value="CE">Cédula de Extranjería</option>
                                            <option value="PA">Pasaporte</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="num_doc" class="form-label">Número de Documento</label>
                                        <input type="text" class="form-control" id="num_doc" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre Completo</label>
                                        <input type="text" class="form-control" id="nombre" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="cargo" class="form-label">Cargo</label>
                                        <input type="text" class="form-control" id="cargo" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="salario" class="form-label">Salario</label>
                                        <input type="number" class="form-control" id="salario" required>
                                    </div>
                                </div>

                                <!-- Segunda columna -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="eps" class="form-label">EPS</label>
                                        <input type="text" class="form-control" id="eps">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pension" class="form-label">Fondo de Pensiones</label>
                                        <input type="text" class="form-control" id="pension">
                                    </div>
                                    <div class="mb-3">
                                        <label for="arl" class="form-label">ARL</label>
                                        <input type="text" class="form-control" id="arl">
                                    </div>
                                    <div class="mb-3">
                                        <label for="estado" class="form-label">Estado</label>
                                        <select class="form-control" id="estado">
                                            <option value="Activo">Activo</option>
                                            <option value="Inactivo">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar Empleado</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="formModaledit" tabindex="-1" aria-labelledby="formModaleditLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Empleado</h5>
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
                                        <label for="edit-tipo_doc" class="form-label">Tipo de Documento</label>
                                        <select class="form-control" id="edit-tipo_doc">
                                            <option value="CC">Cédula de Ciudadanía</option>
                                            <option value="CE">Cédula de Extranjería</option>
                                            <option value="PA">Pasaporte</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit-num_doc" class="form-label">Número de Documento</label>
                                        <input type="text" class="form-control" id="edit-num_doc">
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit-nombre" class="form-label">Nombre Completo</label>
                                        <input type="text" class="form-control" id="edit-nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit-cargo" class="form-label">Cargo</label>
                                        <input type="text" class="form-control" id="edit-cargo">
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit-salario" class="form-label">Salario</label>
                                        <input type="number" class="form-control" id="edit-salario">
                                    </div>
                                </div>

                                <!-- Segunda columna -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="edit-eps" class="form-label">EPS</label>
                                        <input type="text" class="form-control" id="edit-eps">
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit-pension" class="form-label">Fondo de Pensiones</label>
                                        <input type="text" class="form-control" id="edit-pension">
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit-arl" class="form-label">ARL</label>
                                        <input type="text" class="form-control" id="edit-arl">
                                    </div>
                                    <div class="mb-3">
                                        <label for="edit-estado" class="form-label">Estado</label>
                                        <select class="form-control" id="edit-estado">
                                            <option value="Activo">Activo</option>
                                            <option value="Inactivo">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

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