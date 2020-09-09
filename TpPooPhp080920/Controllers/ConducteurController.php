<!--Controleurs ou Controllers traite les actions de l'utilisateur, 
modifie les données du modèle et de la vue l'architecture MVC-->

<?php

require_once './Models/Conducteur.php';


class ConducteurController
{
public function nouveauConducteur()
    {
        
        var_dump("mon rôle est d'ajouter des livres en base");

        require_once './Vues/formulaire_nouveau_conducteur.html';

        $conducteur = new Conducteur();
        
        if(isset($_POST['submit']))
        {
        $prenom = $condcuteur->setPrenom($_POST['prenom']);   
        $nom = $condcuteur->setPrenom($_POST['nom']); 
        
        $condcuteur->create($prenom, $nom); 
        


    
        // $livre->insert($titre, $auteur, $resume);        
        //         }
        //     }

        // public function afficherConducteur()
        // {   
        // $conducteur = new Conducteur();
        // $affichage = $conducteur->list();
    
        // require_once "./Vues/afficherConducteur.php";      
        // }
            
        }
    }
}
?>




