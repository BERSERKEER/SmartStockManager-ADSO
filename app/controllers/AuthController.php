<?php
require_once "../app/core/controller.php";

class AuthController extends Controller
{
    public function login()
    {
        $this->view("auth/login");
    }
}
