<?php

class login {
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

// instances of the class login
$apple = new LOGIN();
$banana = new LOGIN();
$apple->set_name('Apple');
$banana->set_name('Banana');

// Output
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();

// $regForm = $_POST['username'];
// $user = $_POST['username'];
// $password = $_POST['password'];
// echo $user."</br>";
// echo $password."</br>";
// echo $passwordAgain"</br>";
// echo"<pre>";
// var_dump($regForm);
// echo "</pre>";
?>