<?php
class KonsultasiGizi1 {
  // Properties
  public $konsultasi1;

  // Methods set & get
  function set_konsultasi1($konsultasi1) {
    $this->konsultasi1 = $konsultasi1;
  }
  function get_konsultasi1() {
    return $this->konsultasi1;
  }
}

// instances of the class KonsultasiGizi1
$label = new KonsultasiGizi1();
$offline = new KonsultasiGizi1();
$online = new KonsultasiGizi1();

// set variable & name
$label->set_konsultasi1('Sering kali dalam memutuskan suatu permasalahan atau hal lainnya kita membutuhkan bantuan maupun saran dari orang lain supaya keputusan yang diambil dapat lebih sesuai. Hal inilah yang membuat banyak orang memilih berkonsultasi dengan pihak ketiga untuk membantu menyelesaikan masalah mereka. Jadi, tidak heran jika sekarang ini ada banyak sekali jasa konsultasi yang bertujuan membantu menyelesaikan masalah klien dengan berbagai persoalan.');
$offline->set_konsultasi1('Konsultasi secara offline');
$online->set_konsultasi1('Konsultasi secara online');

// Output
echo "Label: " . $label->get_konsultasi1();
echo "<br>";
echo "<br>";
echo "Offline: " . $offline->get_konsultasi1();
echo "<br>";
echo "Online: " . $online->get_konsultasi1();
?>