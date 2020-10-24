<?php 

namespace App\config;

use PDO;
use PDOException;

class Database
{
    const DB_HOST = 'mysql:host=localhost;dbname=sneakershop;charset-utf8';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    public function getConnection()
    {
        try{
            $db = new PDO(self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo('BDD connecté');
          }catch(PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    
}
