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
        $database = new Database('localhost', 'microgiz', 'root', '');
        $query = "INSERT INTO `user` (`username`, `name`, `email`, `password`, `phone`)";
        $state = $this -> db -> prepare($query);
        $parameter = [$this -> username, $this -> name, $this -> email, $this -> password, $this -> phone];
        return $state->execute($parameter);

    }

    public static function getUser($username=NULL){
        $database = new Database("localhost", "microgiz", "root", "");
        $query = "SELECT * FROM `user`";
        if($username!=NULL){
            $query .= "WHERE username = ?";
        }
        $statement = $database->db->prepare($query);
        $parameters = [$username];
        $statement->execute($parameters);
        return $statement->fetchAll();
    }

    function register(){
        echo "Email : ".$this->email. "</br>";
        echo "Password : ".$this->password. "</br>";
    }
}

?>