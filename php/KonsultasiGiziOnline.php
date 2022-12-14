<?php
class KonsultasiGiziOnline {
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

// instances of the class KonsultasiGiziOnline
$name = $_POST['namaLengkap'];
$age = $_POST['umur'];
$sex = $_POST['jenisKelamin'];
$schedule = $_POST['jadwal'];
$payments = $_POST['pembayaran'];
$accNumb = $_POST['nomorRekening'];

// Output
echo "namanya" + $name;
echo "umurnya" + $age;
echo "dia" + $sex;
echo "waktu" + $schedule;
echo "bayar pake" + $payments;
echo "nomernya" + $accNumb;
?>