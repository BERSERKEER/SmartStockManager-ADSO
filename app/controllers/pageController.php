<?php
// controllers/pageController.php

class pageController
{
    public function home()
    {
        // Cargar la vista 'home'
        require_once(__DIR__ . '../../views/auth/login.php');
    }

    public function recoverX()
    {
        // Cargar la vista 'home'
        require_once(__DIR__ . '../../views/auth/account_recovery_page.php');
    }
}
