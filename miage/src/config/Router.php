<?php


namespace App\config;

use App\controller\ArticleController;
use App\controller\ClientController;
use App\controller\CommentController;
use App\controller\HomeController;



class Router
{
    public function loadRoutes()
    {
        $action = $_GET['action'];
        if (isset($_GET['page']) && $_GET['page']  === 'article') {
            $controller = new ArticleController;
        } elseif (isset($_GET['page']) && $_GET['page'] === 'client') {
            $controller = new ClientController;
        } elseif (isset($_GET['page']) && $_GET['page'] === 'comment') {
            $controller= new CommentController;
        } else {
            $controller = new HomeController;
        }
        $controller->{$action}();
    }
}


