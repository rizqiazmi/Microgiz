<?php
class AboutUs {
  // Properties
  public $socialMedia;

  // Methods set & get
  function set_socialMedia($socialMedia) {
    $this->socialMedia = $socialMedia;
  }
  function get_socialMedia() {
    return $this->socialMedia;
  }
}

// instances of the class AboutUs
$youtube = new AboutUs();
$instagram = new AboutUs();
$tumblr = new AboutUs();
$facebook = new AboutUs();
$google = new AboutUs();

// set variable & name
$youtube->set_socialMedia('Microgiz+');
$instagram->set_socialMedia('Microgiz+');
$tumblr->set_socialMedia('Microgiz+');
$facebook->set_socialMedia('Microgiz+');
$google->set_socialMedia('Search Our Website Microgiz+');

// Output
echo "Youtube: " . $youtube->get_socialMedia();
echo "<br>";
echo "Instagram: " . $instagram->get_socialMedia();
echo "<br>";
echo "Tumblr: " . $tumblr->get_socialMedia();
echo "<br>";
echo "Facebook: " . $facebook->get_socialMedia();
echo "<br>";
echo "Google: " . $google->get_socialMedia();
?>