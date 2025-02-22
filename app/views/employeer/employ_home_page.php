<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Libreries -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Routes CSS Styles -->
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/styles.css">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css">
    <link id="favicon" rel="icon" type="image/png" href="/SmartStockManager-ADSO/public/images/short_lg-dark.png">
    <!-- Routes JS -->
    <script src="/SmartStockManager-ADSO/public/js/icon-theme.js"></script>
</head>

<!--../shared/sidebar.php'; -->

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SmartStockManager-ADSO/app/views/shared/sidebar.php'; ?>
    <main>
        <div class="container">
            <div class="welcome-container">
                <div class="welcome-content">
                    <h1>Bienvenido al Dashboard</h1>
                    <p>Explora herramientas avanzadas para maximizar tu productividad.</p>
                    <div class="welcome-buttons">
                        <a href="../admin/admin_home.php" class="button" style="vertical-align:middle"><span>Iniciar </span></a>
                    </div>
                </div>
                <div class="welcome-image">
                    <img src="/SmartStockManager-ADSO/public/images/render1.png" alt="Dashboard Image">
                </div>
            </div>
        </div>
    </main>
</body>

</html>