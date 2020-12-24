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

    public function getClientByNickname($nickname)
    {
        $database = new Database;
        $db = $database->checkConnection();

        $result = $db->prepare('SELECT * FROM client WHERE nickname = :nickname');
        $result->bindValue(':nickname', $nickname, \PDO::PARAM_STR);
        $result->execute();
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getClientById($id)
    {
        $database = new Database;
        $db = $database->checkConnection();

        $result = $db->prepare('SELECT * FROM client WHERE id = :id');
        $result->bindValue(':id', $id, \PDO::PARAM_STR);
        $result->execute();
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function createClient(Client $client)
    {
        $hash = password_hash($client->getPassword(), PASSWORD_DEFAULT);
        $client->setPassword($hash);
        $database = new Database;
        $db = $database->checkConnection();

        $result = $db->prepare('INSERT INTO client (name, firstname, mail, password, nickname)
        VALUES (:name, :firstname, :mail, :password, :nickname)');
        $result->bindValue(':name', $client->getName(), \PDO::PARAM_STR);
        $result->bindValue(':firstname', $client->getFirstName(), \PDO::PARAM_STR);
        $result->bindValue(':mail', $client->getMail(), \PDO::PARAM_STR);
        $result->bindValue(':password', $client->getPassword(), \PDO::PARAM_STR);
        $result->bindValue(':nickname', $client->getNickname(), \PDO::PARAM_STR);
        $result->execute();
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

    public function viewProfile(Client $client)
    {
        $database = new Database;
        $db = $database->checkConnection();

        $getNickname = $client->getNickname();
        $query = $db->prepare('SELECT * FROM client WHERE nickname = :nickname');
        $query->bindParam(':nickname', $_SESSION["login"]);
        $query->execute();
       
        return $query->fetch();
    }

    public function updateProfile(Client $client)
    {

    }
}
