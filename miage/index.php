<?php
require_once 'vendor/autoload.php';

use App\config\Router;

$routeur = new Router();
$routeur->loadRoutes();
?>