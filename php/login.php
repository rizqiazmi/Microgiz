<?php

class login {
  // Properties
  public $form;

  // Methods set & get
  function set_form($form) {
    $this->form = $form;
  }
  function get_form() {
    return $this->form;
  }
}

// instances of the class login
$LoginTittle = new login();
$email = new login();
$password = new login();
$register = new login();

// set variable & name
$LoginTittle->set_form('JinDoe');
$email->set_form('JinDoe@gmail.com');
$password->set_form('JinDoe12');
$register->set_form('Register');

// Output
echo "Login: " . $LoginTittle->get_form();
echo "<br>";
echo "Email: " . $email->get_form();
echo "<br>";
echo "Password: " . $password->get_form();
echo "<br>";
echo "Register: " . $register->get_form();

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