<?php
class KonsultasiGizi {
  // Properties
  public $konsultasi;

  // Methods set & get
  function set_konsultasi($konsultasi) {
    $this->konsultasi = $konsultasi;
  }
  function get_konsultasi() {
    return $this->konsultasi;
  }
}

// instances of the class KonsultasiGizi
$pertanyaan = new KonsultasiGizi();

// set variable & name
$pertanyaan->set_konsultasi('Your Question?');

// Output
echo "Label: " . $pertanyaan->get_konsultasi();
?>