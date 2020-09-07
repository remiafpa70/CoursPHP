<?php  //on peut laisser la balise ouverte s'il n'y a que du PHP dans la page
final class Voiture extends Vehicule {  // final empêche un appel éventuel dans la classe fille

    protected $marque; // on rajoute des attributs à auteur en plus des attributs déjà présents dans Utilisateurs
    protected $volumCarb;


     // constructeur
     public function __construct($type,$nbrPlaces,$marque,$volumCarb){   //création d'un construcetur en java
        parent::__construct($type,$nbrPlaces);  // on récupère le constructeur de la classe mère
        $this->setMarque($marque);
        $this->setVolumCarb($volumCarb);
     }

    // setters et getters 
    public function setMarque($marque){
        $this->marque=$marque;
        }
    
    public function getMarque(){
    return $this->marque;
    }

    public function setVolumCarb($volumCarb){
        $this->volumCarb=$volumCarb;
        }
    
    public function getVolumCarb(){
    return $this->volumCarb;
    }


    // nous redéfinissons une méthode déjà existante dans la classe mére
    final function nivCarb(){  // final empêche un appel éventuel dans la classe fille
        if($this->getVolumCarb() <= 16){
            echo 'tu vas dormir sur place';
        }
        else{
            echo 'bonne continuation';
        }
    }
}