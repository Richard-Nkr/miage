<?php

namespace App\controller;

use App\config\Session;
use App\repository\ClientRepository;
use App\model\Client;

class ClientController{

    public function __construct()
    {
        if (!isset($this->clientRepo)) {
            $this->clientRepo = new ClientRepository;
        }
        
        if (!isset($this->session)) {            
            $this->session = new Session;
        }

    }

    public function show()
    {
        $clientRepo = new ClientRepository;
        $client = $clientRepo->getClients(); 
    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $client = new Client;
            $client->setFirstName($_POST['firstname']);
            $client->setName($_POST['name']);
            $client->setNickname($_POST['nickname']);
            $client->setPassword($_POST['password']);
            $client->setIsAdmin($_POST['admin']);
            $client->setMail($_POST['mail']);

            $this->clientRepo->createClient($client);

            header('Location: index.php?page=article&action=show');
        }

        require_once 'templates/register.php';
    }

    public function read() 
    {
        
        if($this->session->get('nickname'))
            header('Location: ?page=article&action=show');

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $client = new Client;
            $client->setNickname($_POST['nickname']);
            $client->setPassword($_POST['password']);

            if(($this->clientRepo->checkPassword($client))){
                $this->clientRepo->loginClient($client);

                $this->session->set('nickname', $client->getNickname());

                header('Location: ?page=article&action=show');
            }
            
            $this->session->set('error', "nickname or password incorrect");
        }
        
        require_once 'templates/login.php';
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }

    public function profile()
    {
        if(!($this->session->get('nickname')))
            header('Location: ?page=article&action=show');

        require_once 'templates/profil.php';
    }
    
}
?>