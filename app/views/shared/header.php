<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/header.css">
    <link rel="stylesheet" href="../../../public/css/normalize.css">
</head>

<body>
    <?php
    include('../../../config/database.php');
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conexion, $sql);
    $nombre = 'Usuario';
    if ($result && mysqli_num_rows($result) > 0) {
        $mostrar = mysqli_fetch_array($result);
        $nombre = $mostrar['nombre'];
    }
    ?>

    <header>
        <!-- Barra de búsqueda -->
        <div class="search-bar">
            <img src="../../../public/images/icon/icon_search.svg" alt="Search" class="icon">
            <input type="text" placeholder="Search..." class="search-input">
        </div>

        <!-- Contenedor de botones funcionales -->
        <div class="user-actions">
            <img src="../../../public/images/icon/icon-notifications.svg" alt="Notifications" class="icon" onclick="openNotifications()">
            <img src="../../../public/images/icon/icon-clould.svg" alt="Settings" class="icon" onclick="openSettings()">
            <div class="profile-container">
                <img src="../../../public/images/icon/icon-account_circle.svg" alt="Profile" class="icon" onclick="toggleMenu()">
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="../../../public/images/icon/icon-person.svg" alt="User">
                            <h3><?php echo htmlspecialchars($nombre); ?></h3>
                        </div>
                        <hr>
                        <a href="#" class="sub-menu-link">
                            <img src="../../../public/images/icon/icon-settings.svg" alt="Settings">
                            <p>Perfil</p>
                        </a>
                        <a href="" class="sub-menu-link">
                            <img src="../../../public/images/icon/icon-logout.svg" alt="Logout">
                            <p>Cerrar sesión</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
        let subMenu = document.getElementById('subMenu');

        function toggleMenu() {
            subMenu.classList.toggle('open-menu');
        }

        function openSettings() {
            alert('Abrir configuraciones.');
        }

        function openNotifications() {
            alert('Abrir notificaciones.');
        }
    </script>
</body>

</html>