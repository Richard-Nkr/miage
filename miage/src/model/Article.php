<?php 

namespace App\src\model;

use App\src\config\Database;

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

    public function setName($new_name){
        $this->name = $new_name;
    }
    public function setType($new_type){
        $this->name = $new_type;
    }
    public function setBrand($new_brand){
        $this->name = $new_brand;
    }
    public function setSize($new_size){
        $this->name = $new_size;
    }
    public function setState($new_state){
        $this->name = $new_state;
    }
    public function setColor($new_color){
        $this->name = $new_color;
    }
    public function setComment($new_comment){
        $this->name = $new_comment;
    }


}

?>