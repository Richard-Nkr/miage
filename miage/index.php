<?php

require_once "vendor/autoload.php";


if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'show';
    }
} else {
    $controller = 'home';
    $action = 'show';
}

$router = new App\config\Router($controller,$action);
$router->call();