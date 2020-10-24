<?php

namespace App\config;

use App\controller\ClientController;
use App\controller\ArticleController;
use App\controller\DefaultController;

class Router
{
    public function loadRoutes(){
        try {
            if (isset($_GET['action'])){
                $action = $_GET['action'];
                if (isset($_GET['page']) && $_GET['page']  === 'article') {
                    $controller = new ArticleController;
                } elseif (isset($_GET['page']) && $_GET['page'] === 'client') {
                    $controller = new ClientController;
                } else {
                    $controller = new DefaultController;
                }
                $controller->{$action}();
            }
           
            
        } catch (\Exception $exception) {
            throw new \Exception('An error occured');
        }
    }
}
