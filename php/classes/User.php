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
    function createUser($data){
        $database = new Database('localhost', 'microgiz', 'root', '');
        $query = "INSERT INTO `user` (`username`, `name`, `email`, `password`, `phone`)";
        $state = $this -> db -> prepare($query);
        $parameter = [$data -> username, $data -> name, $data -> email, $data -> password, $data -> phone];
        return $state->execute($parameter);

    }

    function register(){
        echo "Email : ".$this->email. "</br>";
        echo "Password : ".$this->password. "</br>";
    }
}

?>