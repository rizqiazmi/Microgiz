<?php
class KalkulatorGizi {
  // Properties
  public $nama;
  public $gram;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

// instances of the class KalkulatorGizi
$apple = new KalkulatorGizi();
$banana = new KalkulatorGizi();
$apple->set_name('Apple');
$banana->set_name('Banana');

// Output
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>