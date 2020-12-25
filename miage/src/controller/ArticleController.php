<?php

namespace App\controller;


use App\repository\ArticleRepository;
use App\repository\CommentRepository;
use App\model\Article;

class ArticleController
{
    private $articleRepo;

    public function __construct()
    {
        if (!isset($this->articleRepo)) {
            $this->articleRepo = new ArticleRepository;
        }
    }


    public function show()
    {
        $articles = $this->articleRepo->getArticles();
        require('templates/market.php');
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['login'])) {
            $article = new Article;
            $article->setOwner($_SESSION['login']);
            $article->setType($_POST['type']);
            $article->setSize($_POST['size']);
            $article->setColor($_POST['color']);
            $article->setState($_POST['state']);
            $article->setBrand($_POST['brand']);
            $article->setComment($_POST['comment']);
            $article->setPrice($_POST['price']);
            $article->setModele($_POST['modele']);
            $this->articleRepo->insertArticle($article);
        }

        require('templates/add.php');
    }

    public function read()
    {
        if ($_GET['id'] == null) {
            header('Location: index.php?page=home&action=show');
        }
        $commentRepo = new CommentRepository;   
        $article = $this->articleRepo->getArticle($_GET['id']);
        $comments = $commentRepo->getComments($_GET['id']);
        ob_start();
        foreach ($comments as $comment) {
            $commentRepo = new CommentRepository; 
            $clientInfo = $commentRepo->getClientById($comment['id_client']);
            $datetime = $comment['date_add'];
            $timestamp = strtotime($datetime);
            $date = date('j.n.Y', $timestamp); //d.m.YYYY
            $time = date('H:i', $timestamp);
            include('templates/comment.php');
        }
        $content = ob_get_clean();
        require('templates/viewArticle.php');
       
    }
    

    public function update()
    {
    }

    public function delete()
    {
    }

    public function viewArticle(){
    }
}
