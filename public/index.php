<?php

require_once "../app/core/router.php";
require_once "../app/core/controller.php";

$router = new Router();
$router->dispatch();
