<?php

class pageController
{
    public function home()
    {
        // Cargar la vista 'dashboard' ubicada en la carpeta 'admin'
        $this->render('landing', 'auth');
    }

    public function test()
    {
        // Cargar la vista 'dashboard' ubicada en la carpeta 'admin'
        $this->render('index', 'auth');
    }
    // Función para cargar una vista especificando la carpeta
    private function render($view, $folder = 'admin')
    {
        // Asegúrate de que la ruta corresponda con la estructura real del proyecto
        require "app/views/{$folder}/{$view}.php";
    }
}
