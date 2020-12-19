<?php 

namespace App\model;

class Client 
{
    private $id;
    private $name;
    private $firstname;
    private $mail;
    private $password;
    private $nickname;
    private $lastConnection;
    private $isAdmin;

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getFirstName(){
        return $this->firstname;
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
    public function getLastConnection()
    {
        return $this->lastConnection;
    }
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    public function setName($new_name){
        $this->name = $new_name;
    }
    public function setFirstName($new_firstname){
        $this->firstname = $new_firstname;
    }
    public function setMail($new_mail){
        $this->mail = $new_mail;
    }
    public function setPassword($new_password){
        $this->password = $new_password;
    }
    public function setNickname($new_nickname){
        $this->nickname = $new_nickname;
    }
    public function setLastConnection($new_lastConnection)
    {
        $this->lastConnection = $new_lastConnection;
    }
    public function setIsAdmin($new_isAdmin)
    {
        $this->isAdmin = $new_isAdmin;
    }

}

?>