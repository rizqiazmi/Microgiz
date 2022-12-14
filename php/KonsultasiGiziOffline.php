<?php
class KonsultasiGiziOffline {
  // Properties
  public $giziOffline;

  // Methods set & get
  function set_giziOffline($giziOffline) {
    $this->giziOffline = $giziOffline;
  }
  function get_giziOffline() {
    return $this->giziOffline;
  }
}

// instances of the class KonsultasiGiziOffline
$label = new KonsultasiGiziOffline();
$label1 = new KonsultasiGiziOffline();
$label2 = new KonsultasiGiziOffline();
$label3 = new KonsultasiGiziOffline();
$kota = new KonsultasiGiziOffline();
$label4 = new KonsultasiGiziOffline();
$metode = new KonsultasiGiziOffline();
$label5 = new KonsultasiGiziOffline();

// set variable & name
$label->set_giziOffline('Konsultasi Luring di Departemen Microgiz+, Konselor: Ahli gizi, Senin & Jumat 09.00-12.00 WIB (1 jam), Hari libur nasional, selasa - kamis, & cuti bersama tutup layanan, Tarif: Rp120.000/orang/jam');
$label1->set_giziOffline('Nama Lengkap');
$label2->set_giziOffline('Umur');
$label3->set_giziOffline('Pria/Wanita');
$kota->set_giziOffline('SURABAYA, SIDOARJO, MALANG, BLITAR PACET');
$label4->set_giziOffline('senin 09.00~10.00, senin 10.00~11.00, senin 11.00~12.00, jumat 09.00~10.00, jumat 10.00~11.00, jumat 11.00~12.00');
$metode->set_giziOffline('BANK BCA, OPO PAYMENT, BANK BRI, SHOPEEPAY, BANK MANDIRI');
$label5->set_giziOffline('MASUKKAN NO REKENING YANG DIGUNAKAN');

// Output
echo "Jadwal Konsultasi Gizi : " . $label->get_giziOffline();
echo "<br>";
echo "Nama Lengkap: " . $label1->get_giziOffline();
echo "<br>";
echo "Umur: " . $label2->get_giziOffline();
echo "<br>";
echo "Jenis Kelamin: " . $label3->get_giziOffline();
echo "<br>";
echo "Kota yang tersedia ahli gizi: " . $kota->get_giziOffline();
echo "<br>";
echo "Pilih Jadwal Konsultasi: " . $label4->get_giziOffline();
echo "<br>";
echo "Metode Pembayaran: " . $metode->get_giziOffline();
echo "<br>";
echo "MASUKKAN NO REKENING YANG DIGUNAKAN: " . $label5->get_giziOffline();
?>