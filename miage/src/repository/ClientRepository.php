<?php
namespace App\repository;

use App\config\Database;

class ClientRepository
{

    public function getClients(){
        $database = new Database;
        $connection = $database->getConnection();

        $result = $connection->query('SELECT * FROM client');
        $fetch = $result->fetchAll();  
    }
}
