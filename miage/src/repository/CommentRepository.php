<?php

namespace App\repository;

use App\config\Database;
use App\model\Comment;

class CommentRepository
{
    public function getComments($id_article)
    {
        $database = new Database;
        $db = $database->checkConnection();
       
        $result = $db->prepare("SELECT * FROM comment WHERE id_article = :id_article");
        $result->bindValue(':id_article', $id_article, \PDO::PARAM_INT);
        $result->execute();
        
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insertComment(Comment $comment)
    {
        $database = new Database;
        $db = $database->checkConnection();

        $result = $db->prepare('INSERT INTO comment (id_client, id_article, content, date_add)
        VALUES (:id_client, :id_article, :content, :date_add)');
        $result->bindValue(':id_client', $comment->getIdClient(), \PDO::PARAM_STR);
        $result->bindValue(':id_article', $comment->getIdArticle(), \PDO::PARAM_STR);
        $result->bindValue(':content', $comment->getContent(), \PDO::PARAM_STR);
        $result->bindValue(':date_add', date('Y-m-d H:i:s'), \PDO::PARAM_STR);
        $result->execute();

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

    public function deleteComment($id)
    {
        $database = new Database;
        $db = $database->checkConnection();
        $result = $db->prepare('DELETE FROM comment WHERE id=:id');
        $result->bindValue(':id', $id, \PDO::PARAM_INT);
        $result->execute();
    }
}