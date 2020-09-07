<?php

require 'Utilisateurs.php'; // On importe la classe
require 'Auteur.php'; // On importe la classe

$auteur1=new Auteur('MOZART','Amadeus','amadeus.mozart@gmail.com',20,'très bon auteur');
$auteur2=new Auteur('PAGNOL','Marcel','marcel.pagnol@gmail.com',20,'très bon auteur');

echo $auteur1->getNom();

echo '<br/>';

echo $auteur1->getPrenom();

echo '<br/>';

echo $auteur1->getEmail();

echo '<br/>';

echo $auteur1->seConnecter();

echo '<br/><br/>';

echo $auteur2->getNom();

echo '<br/>';

echo $auteur2->getPrenom();

echo '<br/>';

echo $auteur2->getEmail();

echo '<br/>';

echo $auteur2->getNoteAlpha();

echo '<br/>';

echo $auteur2->getAvis();

echo '<br/>';

echo $auteur2->seConnecter();

?>