<?php
class Database{
    public $koneksi;
    public $host;
    public $dbname;
    public $dbuser;
    public $dbpass;
    public $db;

    function __construct($host,$dbname,$dbuser,$dbpass)
    {
        $this->koneksi="mysql:host=".$host.";dbname=".$dbname.";charsetutf8";
        $this->db = new PDO($this->koneksi,$dbuser,$dbpass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function register(){ // cek
        echo "User:".$this->user;
        echo "</br>";
        echo "Password:".$this->password;
    }
}
?>
