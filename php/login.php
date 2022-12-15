<?php

class login {
  public $form;

  function set_form($form) {
    $this->form = $form;
  }
  function get_form() {
    return $this->form;
  }
}

$LoginTittle = new login();
$email = new login();
$password = new login();
$register = new login();


$LoginTittle->set_form('JinDoe');
$email->set_form('JinDoe@gmail.com');
$password->set_form('JinDoe12');
$register->set_form('Register');

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