<?php

require_once './Models/Livre.php';


class LivreController
{
public function ajouterLivre()
{
    var_dump("mon rôle est d'ajouter des livres en base");

    require_once './Vues/ajoutLivre.html';

    $livre = new Livre();
    if(isset($_POST['submit'])){
    $titre = $livre->setTitre($_POST['titre']);   
    $auteur = $livre->setAuteur($_POST['auteur']);   
    $resume = $livre->setResume($_POST['resume']); 
    $livre->insert($titre, $auteur, $resume);        
            }
        }
    }
?>




