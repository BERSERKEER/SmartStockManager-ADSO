<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ruta de estilos -->
    <link rel="stylesheet" href="../../../public/css/admin_header.css">
    <!-- Ruta de JS -->
</head>

<body>
    <?php
    include('../../../config/database.php');
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conexion, $sql);
    $numeroCorrelativo = 1;

    if ($result && mysqli_num_rows($result) > 0) {
        $mostrar = mysqli_fetch_array($result);
        $nombre = $mostrar['nombre'];
        $inicial = strtoupper($nombre[0]); // Convertimos la inicial a mayúscula
    } else {
        $inicial = 'U';
    }
    ?>

    <header class="dashboard-header">
        <!-- Logo en el div con la clase dashboard-header__start -->
        <div class="dashboard-header__start">
            <img src="../../../public/images/short_logo.png" alt="Logo" class="logo-image">
            <h2>SmartStockManager</h2>
        </div>

        <div class="user-actions">
            <h2><?php echo htmlspecialchars($nombre); ?></h2>

            <div class="profile-container">
                <div class="profile-circle" onclick="toggleMenu()"><?php echo $inicial; ?></div>
            </div>

            <!-- Drop-down de botón de perfil -->
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="../../../public/images/person-circle.svg" alt="">
                        <h2><?php echo htmlspecialchars($nombre); ?></h2>
                    </div>
                    <hr>
                    <a href="#" class="sub-menu-link">
                        <img src="../../../public/images/person-fill.svg" alt="">
                        <p>Perfil</p>
                    </a>
                    <a href="/config/log_out.php" class="sub-menu-link">
                        <img src="../../../public/images/x.svg" alt="">
                        <p>Cerrar sesión</p>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Script de perfil -->
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

</html>