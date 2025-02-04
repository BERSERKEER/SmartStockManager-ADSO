<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Librerías -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Estilos -->
    <link rel="stylesheet" href="../../../public/css/admin_dashboard_style.css">
    <link rel="stylesheet" href="../../../public/css/normalize.css">
    <link rel="icon" href="../../../public/images/short_logo.png">
    <!-- Scripts -->
    <script src="../../../public/js/admin_functions.js" defer></script>
</head>

<body>
    <?php include '../shared/aside.php'; ?>
    <?php include '../shared/header.php'; ?>
    <main>
        <div class="welcome-container">
            <div class="welcome-content">
                <h1>Bienvenido al Dashboard</h1>
                <p>Explora herramientas avanzadas para maximizar tu productividad.</p>
                <div class="welcome-buttons">
                    <a href="../admin/admin_home.php" class="button" style="vertical-align:middle"><span>Iniciar </span></a>
                </div>
            </div>
            <div class="welcome-image">
                <img src="../../../public/images/render1.png" alt="Dashboard Image">
            </div>
        </div>
    </main>
</body>

</html>