<?php

class Router
{
    public function dispatch()
    {
        // Obtiene la URL limpia
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home/index';
        $url = explode('/', $url);

        // Extrae controlador y método
        $controllerName = ucfirst($url[0]) . "controller";
        $method = isset($url[1]) ? $url[1] : 'index';

        // Ruta del controlador
        $controllerFile = "/app/controllers/{$controllerName}.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();

            if (method_exists($controller, $method)) {
                $controller->{$method}();
            } else {
                echo "Error 404: Método '{$method}' no encontrado.";
            }
        } else {
            echo "Error 404: Controlador '{$controllerName}' no encontrado.";
        }
    }
}
