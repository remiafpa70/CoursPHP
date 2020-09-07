<?php

require 'Personne.php'; // On importe la classe Vehicule
require 'Client.php';

$client1 = new client('MARTIN','André','10 avenue des sifflotteurs'); // On crée un objet avec des paramètres

// afficher les données du client
echo $client1->getCoordonnees().'<br/>';

echo 

?>