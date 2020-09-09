<?php
//départ du programme

require_once 'Vues/header.html';
require_once 'Controllers/ConducteurController.php';

$conducteur = new ConducteurController();

$conducteur->nouveauConducteur();

// if (isset($_GET['action'])){       // permet de tester l'url de la page

//     if (isset($_GET['action']) == 'ajouter') {

//         var_dump('ajouter');
//         $livre->ajouterLivre();
//     }


// }
// else{
//     $conducteur->afficherConducteur();
// }




?>