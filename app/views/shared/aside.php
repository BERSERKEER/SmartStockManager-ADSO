<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos -->
    <link rel="stylesheet" href="../../../public/css/aside.css">
    <link rel="stylesheet" href="../../../public/css/normalize.css">
</head>

<body>
    <aside>
        <figure class="user">
            <div class="user-avatar">
                <img src="../../../public/images/short_logo.png" alt="logo">
            </div>
            <figcaption>SmartStockManager</figcaption>
        </figure>

        <nav>
            <section>
                <h3>Panel de Control</h3>
                <ul>
                    <li>
                        <a href="../admin/admin_home_page.php">
                            <img src="../../../public/images/icon/icon-home.svg" alt="" class="icon">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="../admin/admin_users_page.php">
                            <img src="../../../public/images/icon/icon-manage-users.svg" alt="" class="icon">
                            Gestión de Usuarios
                        </a>
                    </li>
                    <li>
                        <a href="../admin/admin_settings_page.php">
                            <img src="../../../public/images/icon/icon-settings.svg" alt="" class="icon">
                            Configuración
                        </a>
                    </li>
                </ul>
            </section>

            <section>
                <h3>Estadísticas</h3>
                <ul>
                    <li>
                        <a href="../admin/admin_report_page.php">
                            <img src="../../../public/images/icon/icon-table.svg" alt="" class="icon">
                            Informes de Ingresos
                        </a>
                    </li>
                    <li>
                        <a href="../admin/admin_products_page.php">
                            <img src="../../../public/images/icon/icon-shopping-cart.svg" alt="" class="icon">
                            productos
                        </a>
                    </li>
                </ul>
            </section>

            <section>
                <h3>Accesos Rápidos</h3>
                <ul>
                    <li>
                        <a href="/config/log_out.php">
                            <img src="../../../public/images/icon/icon-logout.svg" alt="" class="icon">
                            Cerrar sesion
                        </a>
                    </li>
                </ul>
            </section>
        </nav>
    </aside>
</body>

</html>