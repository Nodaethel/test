<?php

class Fruits {

    private $type;
    private $calibre;
    private $provenance;


    function __construct ($type, $calibre, $provenance){
    $this->type = $type;
    $this->calibre = $calibre;
    $this->provenance = $provenance;
    }

    function get_type () {
        return $this->type;
    }

    function get_calibre () {
        return $this->calibre;
    }

    function get_provenance () {
        return $this->provenance;
    }

    function set_provenance ($provenance) {
        $this->provenance = $provenance;
    }

}

$fruit1 = new Fruits (": pomme ", ": 2", ": France");
echo "<h1> Fruit 1 </h1>" ;
echo "<img src='https://cdn.futura-sciences.com/buildsv6/images/largeoriginal/f/f/9/ff915bd5e6_50165784_pomme-hot84a1tg-global.jpg'>";
echo "<br>";
echo "Type" .$fruit1->get_type();
echo "<br>";
echo "calibre" .$fruit1->get_calibre();
echo "<br>";
echo "provenance" .$fruit1->get_provenance();
echo "<br>";
$fruit1->set_provenance(": Espagne");
echo "provenance" .$fruit1->get_provenance();










?>