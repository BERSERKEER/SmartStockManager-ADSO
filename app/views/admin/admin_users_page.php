<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <!-- Librerías -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <!-- Estilos -->
    <link rel="stylesheet" href="../../../public/css/admin_users_style.css">
    <link rel="stylesheet" href="../../../public/css/normalize.css">
    <link rel="icon" href="../../../public/images/short_logo.png">
    <!-- Funciones -->
    <script src="../../../public/js/admin_functions.js" defer></script>
</head>

<body>
    <!-- Barra lateral -->
    <?php include '../../../app/views/shared/aside.php'; ?>

    <!-- Cabecera -->
    <?php include '../../../app/views/shared/header.php'; ?>

    <!-- Contenido Principal -->
    <main>
        <!-- Tarjeta -->
        <div class="card">
            <div class="card-content">
                <!-- Texto a la izquierda -->
                <div class="card-text">
                    <h2>Gestión de Usuarios</h2>
                </div>
                <!-- Filtros a la derecha -->
                <div class="card-filters">
                    <a href="#" class="filter-btn">
                        <img src="../../../public/images/icon/icon-person.svg" alt="Filter 1"> Agregar Usuario
                    </a>
                    <a href="#" class="filter-btn">
                        <img src="../../../public/images/icon/icon-clould.svg" alt="Filter 2"> Descargar datos
                    </a>
                    <select class="filter-select">
                        <option value="">Rol</option>
                        <option value="admin">Administrador</option>
                        <option value="user">Usuario</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Contenedor principal de usuarios -->
        <div class="users-table-container">
            <table class="users-table">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Última Conexión</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Pérez</td>
                        <td>juan.perez@ejemplo.com</td>
                        <td>Administrador</td>
                        <td>Hace 2 horas</td>
                        <td>
                            <div class="action-buttons">
                                <a href="#" class="button btn1">Eliminar</a>
                                <a href="#" class="button btn2">Editar</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <!-- Pie de página -->
    <?php include '../../../app/views/shared/footer.php'; ?>
</body>

</html>