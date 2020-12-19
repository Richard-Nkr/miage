<?php

namespace App\controller;


use App\repository\ArticleRepository;
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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $article = new Article;
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
            header('Location: index.php?page=article&action=show');
        }
           
        $article = $this->articleRepo->getArticle($_GET['id']);
        require('templates/market.php');
    }
    

    public function update()
    {
    }

    public function delete()
    {
    }
}
