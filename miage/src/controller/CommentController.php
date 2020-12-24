<?php


namespace App\controller;

use App\model\Comment;
use App\repository\ClientRepository;
use App\repository\CommentRepository;

class CommentController
{
    private $commentRepo;

    public function __construct()
    {
        if (!isset($this->commentRepo)) {
            $this->commentRepo = new CommentRepository;
        }
    }

    public function show()
    {
        $comments = $this->commentRepo->getComments($_GET['id']);
        require('templates/commentArticle.php');
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $comment = new Comment;
            $comment->setIdClient($_SESSION['id_client']);
            $comment->setIdArticle($_GET['id']);
            $comment->setContent($_POST['content']);
            $this->commentRepo->insertComment($comment);

            header('Location: index.php?page=article&action=read&id='.$_GET['id']);
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->commentRepo->deleteComment($_POST['id']);
        }
    }
}