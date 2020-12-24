<?php

namespace App\repository;

use App\config\Database;
use App\model\Article;

class ArticleRepository
{
    public function getArticle($id){
        $database = new Database();

        $db = $database->checkConnection();
        $result = $db->prepare("SELECT * FROM article WHERE id=:id");
        $result->bindValue(':id', $id, \PDO::PARAM_INT);
        $result->execute();
        
        return $result->fetch(\PDO::FETCH_ASSOC);
    }

    public function getArticles(){
        $database = new Database();
        $db = $database->checkConnection();
        $result = $db->query("SELECT * FROM article");
        
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insertArticle(Article $article)
    {
        $database = new Database;
        $db = $database->getConnection();
        $result = $db->prepare('INSERT INTO article (type, state, color, comment, date_add, brand, size, modele, price, owner)
        VALUES (:type, :state, :color, :comment, :date_add, :brand, :size, :modele, :price, :owner)');
        $result->bindValue(':type', $article->getType(), \PDO::PARAM_STR);
        $result->bindValue(':state', $article->getState(), \PDO::PARAM_STR);
        $result->bindValue(':color', $article->getColor(), \PDO::PARAM_STR);
        $result->bindValue(':comment', $article->getComment(), \PDO::PARAM_STR);
        $result->bindValue(':brand', $article->getBrand(), \PDO::PARAM_STR);
        $result->bindValue(':size', $article->getSize(), \PDO::PARAM_STR);
        $result->bindValue(':date_add', date('Y-m-d H:i:s'), \PDO::PARAM_STR);
        $result->bindValue(':price', $article->getPrice(), \PDO::PARAM_STR);
        $result->bindValue(':modele', $article->getModele(), \PDO::PARAM_STR);
        $result->bindValue(':owner', $article->getOwner(), \PDO::PARAM_STR);
        
        $result->execute();
    }

    public function viewArticle(Article $article)
    {
        $database = new Database;
        $db = $database->checkConnection();

        $getId = $article->getId();
        $query = $db->prepare('SELECT * FROM article WHERE id = :id');
        $query->bindParam(':id', $_GET["id"]);
        $query->execute();
       
        return $query->fetch();
    }

    
}
