<?php
class Moto {
    private $couleur;
    private $moteur;
    private $marque;

    function __construct($couleur, $moteur, $marque){
        $this->couleur = $couleur;
        $this->moteur = $moteur;
        $this->marque = $marque;
    }

    function get_couleur() {
        return $this->couleur;
    }
    
    function get_moteur() {
        return $this->moteur;
    }

    function get_marque() {
        return $this->marque;
    }

}

$moto1 = new Moto("bleue", "V8", "honda");

echo "couleur: " . $moto1->get_couleur();
echo "<br>";
echo "moteur: " . $moto1->get_moteur();
echo "<br>";
echo "marque: " . $moto1->get_marque();

$moto2 = new Moto("rouge", "B7", "Opel");
echo "<br>";
echo "couleur: " . $moto2->get_couleur();
echo "<br>";
echo "moteur: " . $moto2->get_moteur();
echo "<br>";
echo "marque: " . $moto2->get_marque();






?>