<?php
class Kalori{

    public $protein;
    public $totalLemak;
    public $kalori;
    public $glukosa;
    public $natrium;

    function __construct($prote, $total, $kalori, $glukosa, $natrium)
    {
        $this->protein = $prote;
        $this->totalLemak = $total;
        $this->kalori = $kalori;
        $this->glukosa = $glukosa;
        $this->natrium = $natrium;
    }

    function serach(){
        echo "Mencari Halaman Kalori";
    }

    function createUser(){ // boleh menggunakan array
        $database = new Database("localhost","myweb","root","");
        $query = "INSERT INTO `user` (`id`, `username`, `password`) VALUES (NULL, ?, ?)"; // sql
        $statement = $database->db->prepare($query);
        $parameters = [$this->user,$this->password]; //array parameter variabel
        return $statement->execute($parameters);
    }
}
?>
