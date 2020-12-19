<?php

namespace App\config;

use PDO;
use PDOException;

class Database
{
    const DB_HOST = 'mysql:host=localhost;dbname=sneakershop;charset=utf8mb4';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    private $connection;

    public function getConnection()
    {
        try {
            $this->connection = new \PDO(self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $this->connection;
   
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function checkConnection()
    {
        if (!isset($this->connection)) {
            return $this->getConnection();
        }

        return $this->connection;
    }
}
