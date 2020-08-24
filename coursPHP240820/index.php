<?php

require 'Utilisateurs.php'; // On importe la classe Utilisateurs

$utilisateur1 = new Utilisateurs('toto','jean','toto.jean@gmail.com'); // On crée un objet avec des paramètres

// afficher les données de l'utilisateur1
echo $utilisateur1->getNom().'<br/>';
echo $utilisateur1->getPrenom().'<br/>';
echo $utilisateur1->getEmail().'<br/>';



?>