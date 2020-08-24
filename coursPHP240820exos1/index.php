<?php

require 'Ville.php'; // On importe la classe Utilisateurs

$ville1 = new Ville('Paris','75','Iles de France','1.000.000'); // On crée un objet avec des paramètres

// afficher les données de l'utilisateur1
echo $ville1->getNom().'<br/>';
echo $ville1->getDepartement().'<br/>';
echo $ville1->getRegion().'<br/>';
echo $ville1->getHabitants().'<br/>';



?>