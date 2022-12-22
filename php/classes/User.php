<?php
class User{
    public $username;
    public $name;
    private $email;
    private $password;
    private $phone;


    function __construct($emaill, $passwordd){
        $this->email = $emaill;
        $this->password = $passwordd;

    }

    function login(){
        echo "login";
    }

    function createUser(){
        
    }
    function register(){
        echo "Email : ".$this->email. "</br>";
        echo "Password : ".$this->password. "</br>";
    }
}

?>