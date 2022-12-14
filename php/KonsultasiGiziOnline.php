<?php
class KonsultasiGiziOnline {
  // Properties
  public $giziOnline;

  // Methods set & get
  function set_giziOnline($giziOnline) {
    $this->giziOnline = $giziOnline;
  }
  function get_giziOnline() {
    return $this->giziOnline;
  }
}

// instances of the class KonsultasiGiziOnline
$label = new KonsultasiGiziOnline();
$label1 = new KonsultasiGiziOnline();
$label2 = new KonsultasiGiziOnline();
$label3 = new KonsultasiGiziOnline();
$label4 = new KonsultasiGiziOnline();
$metode = new KonsultasiGiziOnline();
$label5 = new KonsultasiGiziOnline();

// set variable & name
$label->set_giziOnline('Konsultasi Daring via Google Meet:
Waktu: Kesepakatan antara 
Ahli gizi dengan klien (1 sesi @1 jam)
Hari libur nasional & cuti bersama tutup layanan
Tarif: Rp110.000/orang/jam');
$label1->set_giziOnline('Nama Lengkap');
$label2->set_giziOnline('Umur');
$label3->set_giziOnline('Pria/Wanita');
$label4->set_giziOnline('senin 09.00~10.00, senin 10.00~11.00, senin 11.00~12.00, jumat 09.00~10.00, jumat 10.00~11.00, jumat 11.00~12.00');
$metode->set_giziOnline('BANK BCA, OPO PAYMENT, BANK BRI, SHOPEEPAY, BANK MANDIRI');
$label5->set_giziOnline('MASUKKAN NO REKENING YANG DIGUNAKAN');

// Output
echo "Jadwal Konsultasi Gizi : " . $label->get_giziOnline();
echo "<br>";
echo "Nama Lengkap: " . $label1->get_giziOnline();
echo "<br>";
echo "Umur: " . $label2->get_giziOnline();
echo "<br>";
echo "Jenis Kelamin: " . $label3->get_giziOnline();
echo "<br>";
echo "Pilih Jadwal Konsultasi: " . $label4->get_giziOnline();
echo "<br>";
echo "Metode Pembayaran: " . $metode->get_giziOnline();
echo "<br>";
echo "MASUKKAN NO REKENING YANG DIGUNAKAN: " . $label5->get_giziOnline();
?>