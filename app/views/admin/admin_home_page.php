<?php
session_start();
if (!isset($_SESSION["user"]) || $_SESSION["user"]["rol"] != 1) {
    header("Location: ./../app/views/auth/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Libreries -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Routes CSS -->
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/styles.css">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css">
    <link id="favicon" rel="icon" type="image/png" href="/SmartStockManager-ADSO/public/images/short_lg-dark.png">
    <!-- Routes JS -->
    <script src="/SmartStockManager-ADSO/public/js/icon-theme.js"></script>
</head>

<body>

    <?php
    date_default_timezone_set('America/Bogota'); // Ajusta a tu zona horaria
    $hora = date('H');

    if ($hora >= 5 && $hora < 12) {
        $saludo = "Buenos días";
        $mensaje = "Es un nuevo comienzo, lleno de oportunidades para lograr tus objetivos.";
    } elseif ($hora >= 12 && $hora < 18) {
        $saludo = "Buenas tardes";
        $mensaje = "Sigue avanzando, cada esfuerzo que haces te acerca más a tus metas.";
    } else {
        $saludo = "Buenas noches";
        $mensaje = "El día está por terminar, pero aún hay tiempo para hacer la diferencia.";
    }
    ?>

    <!--Include side -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SmartStockManager-ADSO/app/views/shared/sidebar.php'; ?>
    <main>
        <div class="container">
            <div class="welcome-container">
                <div class="welcome-content">
                    <h1>Bienvenido Administrador, <?php echo htmlspecialchars($_SESSION["user"]["nombre"]); ?></h1>
                    <h1><?php echo $saludo; ?>, bienvenido al Dashboard</h1>
                    <p><?php echo $mensaje; ?></p>
                    <p>Button</p>
                </div>
                <div class="welcome-image">
                    <img src="/SmartStockManager-ADSO/public/images/render1.png" alt="Dashboard Image">
                </div>
            </div>
        </div>
    </main>
</body>

</html>