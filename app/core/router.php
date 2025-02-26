<?php

class Router
{
    public function dispatch()
    {
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';
        $url = explode("/", $url);

        $controllerName = ucfirst(strtolower($url[0])) . "Controller";
        $method = isset($url[1]) ? $url[1] : "index";

        $controllerFile = "../app/controllers/$controllerName.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();

            if (method_exists($controller, $method)) {
                $controller->$method();
                return;
            } else {
                echo "Error: Método '$method' no encontrado en $controllerName";
                exit;
            }
        } else {
            echo "Error: Controlador '$controllerName' no encontrado";
            exit;
        }
    }
}
