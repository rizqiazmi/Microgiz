<?php
class HealthNews {
  // Properties
  public $input;

  // Methods set & get
  function set_input($input) {
    $this->input = $input;
  }
  function get_input() {
    return $this->input;
  }
}

// instances of the class HealthNews
$email = new HealthNews();
$password = new HealthNews();
$submit = new HealthNews();

// set variable & name
$email->set_input('Jondoe@gmail.com');
$password->set_input('Jondoe');
$submit->set_input('Done');

// Output
echo "Email: " . $email->get_input();
echo "<br>";
echo "Passord: " . $password->get_input();
echo "<br>";
echo "Sumbit: " . $submit->get_input();
?>