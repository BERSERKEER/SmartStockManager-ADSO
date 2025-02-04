<?php

class HomeController
{
    public function index()
    {
        // Cargar la vista y pasar los datos
        require_once './app/views/auth/landing.php';
    }
}
