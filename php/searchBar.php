<?php
class searchBar {
  // Properties
  public $pencarian;

  // Methods set & get
  function set_pencarian($pencarian) {
    $this->pencarian = $pencarian;
  }
  function get_pencarian() {
    return $this->pencarian;
  }
}

// instances of the class searchBar
$placeholder = new searchBar();
$icon = new searchBar();

// set variable & name
$placeholder->set_pencarian('search bar');
$icon->set_pencarian('icon');

// Output
echo "Placeholder: " . $placeholder->get_pencarian();
echo "<br>";
echo "icon: " . $icon->get_pencarian();
echo "<br>";
?>