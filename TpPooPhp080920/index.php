<?php
//départ du programme, Vues ou Views est l'interface graphique de l'architecture MVC

require_once 'Vues/header.html';
require_once 'Controllers/ConducteurController.php';

$conducteur = new ConducteurController();

if (isset($_GET['action'])){       // permet de tester l'url de la page

    if (isset($_GET['action']) == 'ajouter') {

        var_dump('ajouter');
        $livre->ajouterLivre();
    }


}
else{
    $conducteur->afficherConducteur();
}




?>