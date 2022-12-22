<?php
class index {
  // Properties
  public $halamanUtama;

  // Methods set & get
  function set_halamanUtama($halamanUtama) {
    $this->halamanUtama = $halamanUtama;
  }
  function get_halamanUtama() {
    return $this->halamanUtama;
  }
}

// instances of the class index
$logo = new index();
$menu = new index();
$deskripsi = new index();
$pencarian = new index();
$section = new index();

// set variable & name
$logo->set_halamanUtama('Microgiz+');
$menu->set_halamanUtama('Health News, Kalkulator Gizi, Konsultasi Gizi, About, Sign Up');
$deskripsi->set_halamanUtama('Mari Hidup Sehat');
$pencarian->set_halamanUtama('Pencarian Dibawah, Pencarian Selengkapnya');
$section->set_halamanUtama('Microgiz+, About, Contact, Social');

// Output
echo "Logo : " . $logo->get_halamanUtama();
echo "<br>";
echo "Menu Utama: " . $menu->get_halamanUtama();
echo "<br>";
echo "Deskripsi: " . $deskripsi->get_halamanUtama();
echo "<br>";
echo "Pencarian: " . $pencarian->get_halamanUtama();
echo "<br>";
echo "Footer Section: " . $section->get_halamanUtama();
?>