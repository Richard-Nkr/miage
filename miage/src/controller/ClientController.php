<?php

namespace App\controller;

use App\repository\ClientRepository;

class ClientController{

    public function index()
    {
        $clientRepo = new ClientRepository;
        $client = $clientRepo->getClients(); 
        return var_dump($client);
    }

    public function create()
    {

    }

    public function read()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
    
}
?>