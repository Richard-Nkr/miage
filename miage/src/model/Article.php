<?php 

namespace App\model;

class Article
{
    private $id;
    private $type;
    private $brand;
    private $size;
    private $state;
    private $color;
    private $comment;
    private $date_add;
    private $modele;
    private $price;
    private $owner;

    public function getId(){
        return $this->id;
    }
    public function getType(){
        return $this->type;
    }
    public function getBrand(){
        return $this->brand;
    }
    public function getSize(){
        return $this->size;
    }
    public function getState(){
        return $this->state;
    }
    public function getColor(){
        return $this->color;
    }
    public function getComment(){
        return $this->comment;
    }
    public function getDate(){
        return $this->date_add;
    }
    public function getModele(){
        return $this->modele;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getOwner(){
        return $this->owner;
    }

    public function setName($new_name){
        $this->name = $new_name;
    }
    public function setType($new_type){
        $this->type = $new_type;
    }
    public function setBrand($new_brand){
        $this->brand = $new_brand;
    }
    public function setSize($new_size){
        $this->size = $new_size;
    }
    public function setState($new_state){
        $this->state = $new_state;
    }
    public function setColor($new_color){
        $this->color = $new_color;
    }
    public function setComment($new_comment){
        $this->comment = $new_comment;
    }
    public function setModele($new_modele){
        $this->modele = $new_modele;
    }
    public function setPrice($new_price){
        $this->price = $new_price;
    }
    public function setOwner($owner){
        $this->owner = $owner;
    }


}

?>