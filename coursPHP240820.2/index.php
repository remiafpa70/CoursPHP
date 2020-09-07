<?php

require 'Produits.php'; // On importe la classe Vehicule

$produits1 = new Produits('P1','Produit_1',100); // On crée un objet avec des paramètres

// pour utiliser l'attribut static $remise
echo $produits1::getRemise();

echo '<br/>';

echo Produits::getRemise();

echo '<br/>';

echo 'le nouveau prix est : '.$produits1->getNewPrice();

echo '<br/>';
$produits1::setRemise(50); // on modifie la remise à 50%

echo '<br/>';

echo 'la nouvelle remise est : '.$produits1::getRemise(50);

echo '<br/>';

echo 'la nouveau prix est : '.$produits1->getNewPrice(50);

?>