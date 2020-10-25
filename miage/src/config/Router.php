<?php


namespace App\config;


class Router
{
    const CONTROLLERS = array(
        'home' => ['show'],
        'client' => ['show'],
        'post' => ['show']
    );

    private $controller;
    private $action;

    function __construct($controller, $action)
    {
        if (array_key_exists($controller, self::CONTROLLERS)) {
            $this->controller = $controller;
            if (in_array($action, self::CONTROLLERS[$controller])) {
                $this->action = $action;
            } else {
                $this->action = self::CONTROLLERS[$controller][0];
            }
        } else {
            $this->controller = 'home';
            $this->action = 'show';
        }
    }

    function call()
    {
        switch ($this->controller) {
            case 'home':
                $controller = new \App\controller\HomeController();
                break;
            case 'client':
                $controller = new \App\controller\ClientController();
                break;
            case 'article':
                $controller = new \App\controller\ArticleController();
                break;
        }

        $controller->{$this->action}();
    }
}
