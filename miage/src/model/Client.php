<?php 

namespace App\src\model;

class Client 
{
    private $id;
    private $name;
    private $mail;
    private $password;
    private $nickname;

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getMail(){
        return $this->mail;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getNickname(){
        return $this->nickname;
    }

    public function setName($new_name){
        $this->name = $new_name;
    }
    public function setMail($new_mail){
        $this->name = $new_mail;
    }
    public function setPassword($new_password){
        $this->name = $new_password;
    }
    public function setNickname($new_nickname){
        $this->name = $new_nickname;
    }

}

?>