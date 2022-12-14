<?php
class KonsultasiGizi {
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

// instances of the class KonsultasiGizi
$apple = new KonsultasiGizi();
$banana = new KonsultasiGizi();
$apple->set_name('Apple');
$banana->set_name('Banana');

// Output
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>