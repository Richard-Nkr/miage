<?php
require_once 'vendor/autoload.php';

use App\config\Router;

session_start();

$routeur = new Router();
$routeur->loadRoutes();
?>