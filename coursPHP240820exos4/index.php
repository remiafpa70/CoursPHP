<?php

require 'Employes.php'; // On importe la classe Vehicule

$employes1 = new Employes('Martin','Jean','45'); // On crée un objet avec des paramètres

// afficher les données de l'utilisateur1
echo $employes1->getType().'<br/>';
echo $employes1->getNbrPlaces().'<br/>';



$employes2 = new Vehicule('Prius','5'); // On crée un objet avec des paramètres

echo $employes2->getType().'<br/>'.$employes2->getNbrPlaces().'<br/>';


?>