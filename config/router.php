<?php
// router.php

class Router
{
    private $routes = [];

    public function addRoute($method, $path, $controller, $action)
    {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $path) {
                $controller = new $route['controller']();
                return $controller->{$route['action']}();
            }
        }
        return "404 Not Found";
    }
}

// Example of adding routes
$router = new Router();
$router->addRoute('GET', '/', 'pageController', 'index');
// Add more routes as needed
