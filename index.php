<?php
// Incluir el controlador
require_once './app/controllers/pageController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'landing';

// Crear instancia del controlador y llamar a la acción
$controller = new pageController();

//condicion en caso de no encontrar 
if (method_exists($controller, $action)) {
    $controller->{$action}();
} else {
    require_once './app/views/auth/landing.php';
}

//    require_once './app/views/auth/error.php';