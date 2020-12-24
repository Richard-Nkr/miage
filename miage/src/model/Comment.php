<?php

namespace App\model;

require_once('vendor\autoload.php');

class Comment
{
    private $id;
    private $id_client;
    private $id_article;
    private $content;
    private $date_add;


    public function getId()
    {
        return $this->id;
    }

    public function getIdClient()
    {
        return $this->id_client;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getIdArticle()
    {
        return $this->id_article;
    }

    public function getDate_add()
    {
        return $this->date_add;
    }

    public function setIdArticle($id_article)
    {
        $this->id_article = $id_article;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setIdClient($id_client)
    {
        $this->id_client = $id_client;
    }
}
