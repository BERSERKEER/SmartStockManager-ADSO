<?php
session_start();

// Si no existe la sesión, se redirige al login
if (!isset($_SESSION['nombre'])) {
    header('Location: ../../views/auth/login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
</head>

<body>
    <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre']); ?></h2>
    <p>Has iniciado sesión correctamente.</p>
    <!-- Aquí podrías incluir un enlace para cerrar sesión -->
</body>

</html>