<?php

class User{
    private $UserID;
    private $name;
    private $lastname;
    private $email;
    private $username;
    private $password;


    function __construct($UserID,$name,$lastname,$email,$username,$password){
            $this->UserID = $UserID;
            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->username = $username;
            $this->password = $password;
    }


    function getUserID(){
        return $this->UserID;
    }
    function getName(){
        return $this->name;
    }
    function getLastname(){
        return $this->lastname;
    }
    function getEmail(){
        return $this->email;
    }
    function getUsername(){
        return $this->username;
    }
    function getPassword(){
        return $this->password;
    }
}

?>