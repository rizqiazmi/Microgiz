<?php
require("User.php");
$email = $_POST ['email'];
$password = $_POST ['password'];

$pengguna = new User ($email, $password);
echo"<pre>";
var_dump($pengguna);
echo "</pre>";

?>