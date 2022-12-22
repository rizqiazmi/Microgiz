<?php
require("User.php");
$email = $_POST ['email'];
$password = $_POST ['password'];

$pengguna = new User ($email, $password);
$pengguna->createUser();

?>