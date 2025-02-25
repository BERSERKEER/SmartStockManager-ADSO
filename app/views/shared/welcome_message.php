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

<div class="welcome-container">
    <div class="welcome-content">
        <h1><?php echo $saludo; ?>, bienvenido al Dashboard</h1>
        <p><?php echo $mensaje; ?></p>
        <p>Explora nuestras herramientas avanzadas para optimizar tu productividad y mejorar tu rendimiento.</p>
        <p>Recuerda que cada pequeña acción cuenta. ¡Sigue adelante y haz que este día sea increíble!</p>
    </div>
</div>