<?php

require 'Vehicule.php'; // On importe la classe Vehicule

$vehicule1 = new Vehicule('C5','7'); // On crée un objet avec des paramètres

// afficher les données de l'utilisateur1
echo $vehicule1->getType().'<br/>';
echo $vehicule1->getNbrPlaces().'<br/>';



$vehicule2 = new Vehicule('Prius','5'); // On crée un objet avec des paramètres

echo $vehicule2->getType().'<br/>'.$vehicule2->getNbrPlaces().'<br/>';


?>