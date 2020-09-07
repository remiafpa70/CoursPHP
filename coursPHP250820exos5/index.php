<?php

require 'Vehicule.php'; // On importe la classe Vehicule
require 'Voiture.php';

$vehicule1 = new Vehicule('C5','7'); // On crée un objet avec des paramètres

// afficher les données de l'utilisateur1
echo $vehicule1->getType().'<br/>';
echo $vehicule1->getNbrPlaces().'<br/>';

echo '<br/><br/>------------------------------';


$vehicule2 = new Vehicule('Prius','5'); // On crée un objet avec des paramètres

echo $vehicule2->getType().'<br/>'.$vehicule2->getNbrPlaces().'<br/>';
echo '<br/><br/>------------------------------';

$voiture = new Voiture('R5',5,'RENAULT',15); // On crée un objet avec des paramètres

echo '<br/>tu roule en '.$voiture->getType().
'<br/>tu as '.$voiture->getNbrPlaces().' places'.
'<br/>c\'est une '.$voiture->getMarque().
'<br/>il reste '.$voiture->getVolumCarb().' litres dans le réservoir<br/>';

echo '<br/>'.$voiture->nivCarb();

?>