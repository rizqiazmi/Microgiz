<?php
class registration {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

// instances of the class registration
$user = $_POST ['nama'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$repeatPassword = $_POST ['repeatPassword'];

// Output
echo "User: " . $user;
echo "<br>";
echo "Email: " . $email;
echo "<br>";
echo "Password: " . $password;
echo "<br>";
echo "repeatPassword: " . $repeatPassword;
?>