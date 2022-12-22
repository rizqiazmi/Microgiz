<?php
require("User.php");
$nama  = $_POST['nama'];
$email = $_POST['email'];
$password_register = $_POST['password'];


$servername = "localhost";
$userDb = "root";
$passDb = "";
$database = "test";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database;", $userDb, $passDb);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";

  $sql = "INSERT INTO register (nama, email, password)
  VALUES ('$nama', '$email', '$password_register')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
  echo "<script>window.location.href = '/microgiz/login.html'</script>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}