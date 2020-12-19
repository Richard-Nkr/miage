<?php

namespace App\repository;

use App\config\Database;
use App\model\Client;

class ClientRepository
{

    private $database;

    public function getClients()
    {
        $database = new Database;
        $db = $database->checkConnection();
        $result = $db->query('SELECT * FROM client');

        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function createClient(Client $client)
    {
        $hash = password_hash($client->getPassword(), PASSWORD_DEFAULT);
        $client->setPassword($hash);
        $database = new Database;
        $db = $database->checkConnection();

        $result = $db->prepare('INSERT INTO client (name, firstname, mail, password, nickname, isAdmin)
        VALUES (:name, :firstname, :mail, :password, :nickname, :isAdmin)');
        $result->bindValue(':name', $client->getName(), \PDO::PARAM_STR);
        $result->bindValue(':firstname', $client->getFirstName(), \PDO::PARAM_STR);
        $result->bindValue(':mail', $client->getMail(), \PDO::PARAM_STR);
        $result->bindValue(':password', $client->getPassword(), \PDO::PARAM_STR);
        $result->bindValue(':nickname', $client->getNickname(), \PDO::PARAM_STR);
        $result->bindValue(':isAdmin', $client->getIsAdmin(), \PDO::PARAM_INT);
        $result->execute();
    }
    
    public function loginClient(Client $client)
    {
        $database = new Database;
        $db = $database->checkConnection();
        $query = $db->prepare("UPDATE client SET last_Connection_At = :lastConnect WHERE username = :username");
        $data = [
            'lastConnect' => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'))),
            'nickname' => $client->getNickname(),
        ];
        $query->execute($data);
    }

    public function checkPassword(Client $client)
    {
        $database = new Database;
        $db = $database->checkConnection();

        $query = $db->prepare('SELECT password FROM client WHERE nickname = :nickname');
        $query->bindParam(':nickname', $_POST["nickname"]);
        $query->execute();
        $result = $query->fetch();
        
        return password_verify($client->getPassword(), $result['password']);
    }
}

?>
