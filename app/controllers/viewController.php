<?php
// Incluimos el controlador
require_once 'controller.php';

// Instanciamos el controlador principal
$controller = new MainController();

// Obtenemos el parámetro 'view' de la URL, por ejemplo: ?view=about
$view = isset($_GET['view']) ? $_GET['view'] : 'home';

// Cargamos la vista solicitada
$controller->loadView($view);
