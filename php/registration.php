<?php
class registration {

  public $pendaftaran;


  function set_pendaftaran($pendaftaran) {
    $this->pendaftaran = $pendaftaran;
  }
  function get_pendaftaran() {
    return $this->pendaftaran;
  }
}


$registerTittle = new registration();
$name = new registration();
$email = new registration();
$password = new registration();
$repeatPassowrd = new registration();
$register = new registration();


$registerTittle->set_pendaftaran('Register Tittle');
$name->set_pendaftaran('Nama');
$email->set_pendaftaran('Email');
$password->set_pendaftaran('Password');
$repeatPassowrd->set_pendaftaran('Repeat Password');
$register->set_pendaftaran('Sudah Punya Akun?');


echo "Registration Tittle: " . $registerTittle->get_pendaftaran();
echo "<br>";
echo "Name: " . $name->get_pendaftaran();
echo "<br>";
echo "Email: " . $email->get_pendaftaran();
echo "<br>";
echo "Password: " . $password->get_pendaftaran();
echo "<br>";
echo "Repeat Passowrd: " . $repeatPassowrd->get_pendaftaran();
echo "<br>";
echo "register: " . $register->get_pendaftaran();
?>