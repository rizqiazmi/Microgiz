<?php
require("User.php");
$email =  $_POST['email'];
$password = $_POST['password'];

//echo $email;
//echo "<br>";
//echo $password;


$servername = "localhost";
$userDb = "root";
$passDb = "";
$database = "test";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database;", $userDb, $passDb);
  // set the PDO error mode to exception
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT COUNT(*) FROM register WHERE email = '$email' AND password = '$password'";
if ($res = $conn->query($sql)) {

  /* Check the number of rows that match the SELECT statement */
  if ($res->fetchColumn() > 0) {
    header('Location: /microgiz');
    // echo "<script>window.location.href = '/microgiz'</script>";
  }

  else {
    header('Location: /microgiz/login.html');

  //  echo "<script>window.location.href = '/microgiz/login.html'</script>";
  }
}

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}