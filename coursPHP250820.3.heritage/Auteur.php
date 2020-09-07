<?php  //on peut laisser la balise ouverte s'il n'y a que du PHP dans la page
final class Auteur extends Utilisateurs {  // final empêche un appel éventuel dans la classe fille

    private $noteAlpha; // on rajoute des attributs à auteur en plus des attributs déjà présents dans Utilisateurs
    private $avis;


     // constructeur
     public function __construct($nom,$prenom,$email,$noteAlpha,$avis){   //création d'un construcetur en java
        parent::__construct($nom,$prenom,$email);  // on récupère le constructeur de la classe mère
        $this->setNoteAlpha($noteAlpha);
        $this->setAvis($avis);
     }

    // setters et getters 
    public function setNoteAlpha($noteAlpha){
        $this->noteAlpha=$noteAlpha;
        }
    
    public function getNoteAlpha(){
    return $this->noteAlpha;
    }

    public function setAvis($avis){
        $this->avis=$avis;
        }
    
    public function getAvis(){
    return $this->avis;
    }


    // nous redéfinissons une méthode déjà existante dans la classe mére
    final function seConnecter(){  // final empêche un appel éventuel dans la classe fille
        echo "je suis l\'auteur '.$this->nom.' de votre application, je peux me connecter";
        }

}