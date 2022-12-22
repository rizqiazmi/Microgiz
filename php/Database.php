<?php
class Database{
    public $koneksi;
    public $host = "localhost";
    public $dbname = "microgiz";
    public $dbuser = "root";
    public $dbpass = "";
    public $db;

    function __construct($host,$dbname,$dbuser,$dbpass)
    {
        $this->koneksi="mysql:host=".$host.";dbname=".$dbname.";charsetutf8";
        $this->db = new PDO($this->koneksi,$dbuser,$dbpass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
?>
