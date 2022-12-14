<?php
class KalkulatorGizi {
  // Properties
  public $kalkulator;

  // Methods set & get
  function set_kalkulator($kalkulator) {
    $this->kalkulator = $kalkulator;
  }
  function get_kalkulator() {
    return $this->kalkulator;
  }
}

// instances of the class KalkulatorGizi
$tittle = new KalkulatorGizi();
$label = new KalkulatorGizi();
$label1 = new KalkulatorGizi();
$submit = new KalkulatorGizi();

// set variable & name
$tittle->set_kalkulator('Kalkulator Gizi');
$label->set_kalkulator('Masukkan Nama Makanan');
$label1->set_kalkulator('Masukkan Jumlah (gram)');
$submit->set_kalkulator('Done');

// Output
echo "Tittle: " . $tittle->get_kalkulator();
echo "<br>";
echo "Label: " . $label->get_kalkulator();
echo "<br>";
echo "Label 1: " . $label1->get_kalkulator();
echo "<br>";
echo "Submit: " . $submit->get_kalkulator();
?>