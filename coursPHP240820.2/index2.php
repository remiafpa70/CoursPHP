<?php

require 'Utilisateurs.php'; // On importe la classe Vehicule

$utilisateurs1 = new Utilisateurs('LECLERC','Marie','marie.leclerc@gmail.com'); // On crée un objet avec des paramètres

$utilisateurs1->setNote(17);

echo 'la note de l\'utilisateur est '.$utilisateurs1->getNote();

echo '<br/>';

$utilisateurs1->degreImplication();

?>