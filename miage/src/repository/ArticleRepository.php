<?php

namespace App\repository;

use App\config\Database;

class ArticleRepository
{
    
    public function getArticles(){
        $database = new Database();
        $connection = $database->getConnection();
        $result = $connection->query('SELECT * FROM article');
        $fetch = $result->fetchAll();  
    }
}
?>