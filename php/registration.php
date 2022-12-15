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
$name->set_pendaftaran('Aykay');
$email->set_pendaftaran('aykay@gmail.com');
$password->set_pendaftaran('aykay anti NT');
$repeatPassowrd->set_pendaftaran('aykay anti NT');
$register->set_pendaftaran('Sudah Punya Akun?');


echo "Registration Tittle: " . $registerTittle->get_pendaftaran() . "<br>";
echo "Name: " . $name->get_pendaftaran() . "<br>";
echo "Email: " . $email->get_pendaftaran() . "<br>";
echo "Password: " . $password->get_pendaftaran() . "<br>";
echo "Repeat Passowrd: " . $repeatPassowrd->get_pendaftaran() . "<br>";
echo "register: " . $register->get_pendaftaran();
?>