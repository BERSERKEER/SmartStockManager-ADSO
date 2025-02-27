<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido Empleados</title>
    <!-- Libreries -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Routes CSS Styles -->
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/styles.css">
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css">
    <link id="favicon" rel="icon" type="image/png" href="/SmartStockManager-ADSO/public/images/short_lg-dark.png">
    <!-- Routes JS -->
    <script src="/SmartStockManager-ADSO/public/js/icon-theme.js"></script>
</head>

<?php
session_start();
if (!isset($_SESSION["user"]) || $_SESSION["user"]["rol"] != 2) {
    header("Location: login.php");
    exit();
}
?>

<body>
    <!--Search database of rol-->
    <?php
    $conn = mysqli_connect("localhost", "root", "", "db_ssm");
    $SQL = "SELECT * FROM user LEFT JOIN permisos ON user.rol = permisos.id";
    $dato = mysqli_query($conn, $SQL);

    if ($dato->num_rows > 0) {
        while ($fila = mysqli_fetch_array($dato)) {
        }
    }
    ?>

    <!--Search date-->
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
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/SmartStockManager-ADSO/app/views/shared/employ_side.php'; ?>
    <main>
        <div class="container">
            <div class="welcome-container">
                <div class="welcome-content">
                    <h1>Bienvenido Vendedor, <?php echo htmlspecialchars($_SESSION["user"]["nombre"]); ?></h1>
                    <h1><?php echo $saludo; ?>, bienvenido al Dashboard</h1>
                    <p><?php echo $mensaje; ?></p>
                    <p>Explora nuestras herramientas avanzadas para optimizar tu productividad y mejorar tu rendimiento.</p>
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