<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/styles.css">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css">
    <!-- Libreries -->
</head>

<body>
    <nav id="sidebar">
        <ul>
            <!--Item menu-->
            <li>
                <span class="logo">SmartStockManager</span>
                <button onclick=toggleSidebar() id="toggle-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#e8eaed">
                        <path
                            d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z" />
                    </svg>
                </button>
            </li>
            <!--Item 1-->
            <li>
                <a href="../admin/admin_home_page.php">
                    <img src="/SmartStockManager-ADSO/public/images/icon/icon-home.svg" alt="Home" height="24px" width="24px">
                    <span>Home</span>
                </a>
            </li>
            <!--Item 2-->
            <li class="active">
                <a href="../admin/admin_dashboard.php">
                    <img src="/SmartStockManager-ADSO/public/images/icon/icon_dashboard.svg" alt="Home" height="24px" width="24px">
                    <span>Dashboard</span>
                </a>
            </li>
            <!--Item 3-->
            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h207q16 0 30.5 6t25.5 17l57 57h320q33 0 56.5 23.5T880-640v400q0 33-23.5 56.5T800-160H160Zm0-80h640v-400H447l-80-80H160v480Zm0 0v-480 480Zm400-160v40q0 17 11.5 28.5T600-320q17 0 28.5-11.5T640-360v-40h40q17 0 28.5-11.5T720-440q0-17-11.5-28.5T680-480h-40v-40q0-17-11.5-28.5T600-560q-17 0-28.5 11.5T560-520v40h-40q-17 0-28.5 11.5T480-440q0 17 11.5 28.5T520-400h40Z" />
                    </svg>
                    <span>Productos</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z" />
                    </svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="../admin/admin_products/admin_category_page.php">Categorias</a></li>
                        <li><a href="../admin/admin_products/admin_products_page.php">Productos</a></li>
                    </div>
                </ul>
            </li>
            <!--Item 4-->
            <li>
                <a href="../admin/admin_stock control_page.php">
                    <img src="/SmartStockManager-ADSO/public/images/icon/icon-table.svg" alt="Home" height="24px" width="24px">
                    <span>Control de stock</span>
                </a>
            </li>
            <!--Item 5-->
            <li>
                <a href="../admin/admin_report_page.php">
                    <img src="/SmartStockManager-ADSO/public/images/icon/icon-table.svg" alt="Home" height="24px" width="24px">
                    <span>Reportes</span>
                </a>
            </li>
            <!--Item 6 Multiples-->
            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h207q16 0 30.5 6t25.5 17l57 57h320q33 0 56.5 23.5T880-640v400q0 33-23.5 56.5T800-160H160Zm0-80h640v-400H447l-80-80H160v480Zm0 0v-480 480Zm400-160v40q0 17 11.5 28.5T600-320q17 0 28.5-11.5T640-360v-40h40q17 0 28.5-11.5T720-440q0-17-11.5-28.5T680-480h-40v-40q0-17-11.5-28.5T600-560q-17 0-28.5 11.5T560-520v40h-40q-17 0-28.5 11.5T480-440q0 17 11.5 28.5T520-400h40Z" />
                    </svg>
                    <span>Usuarios</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z" />
                    </svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="../admin/admin_users/admin_clients_page.php">Clientes</a></li>
                        <li><a href="../admin/admin_users/admin_employees_page.php">Empleados</a></li>
                        <li><a href="../admin/admin_users/admin_providers_page.php">Provedores</a></li>
                    </div>
                </ul>
            </li>
            <!--Item 7-->
            <li>
                <a href="../admin/admin_settings_page.php">
                    <img src="/SmartStockManager-ADSO/public/images/icon/icon-settings.svg" alt="Home" height="24px" width="24px">
                    <span>Configuracion</span>
                </a>
            </li>
            <!--Item 8-->
            <li>
                <a href="../../config/log_out.php">
                    <img src="/SmartStockManager-ADSO/public/images/icon/icon-logout.svg" alt="Home" height="24px" width="24px">
                    <span>Cerrar sesion</span>
                </a>
            </li>
        </ul>
    </nav>
    <script>
        const toggleButton = document.getElementById('toggle-btn')
        const sidebar = document.getElementById('sidebar')

        function toggleSidebar() {
            sidebar.classList.toggle('close')
            toggleButton.classList.toggle('rotate')

            closeAllSubMenus()
        }

        function toggleSubMenu(button) {

            if (!button.nextElementSibling.classList.contains('show')) {
                closeAllSubMenus()
            }

            button.nextElementSibling.classList.toggle('show')
            button.classList.toggle('rotate')

            if (sidebar.classList.contains('close')) {
                sidebar.classList.toggle('close')
                toggleButton.classList.toggle('rotate')
            }
        }

        function closeAllSubMenus() {
            Array.from(sidebar.getElementsByClassName('show')).forEach(ul => {
                ul.classList.remove('show')
                ul.previousElementSibling.classList.remove('rotate')
            })
        }
    </script>
</body>

</html>