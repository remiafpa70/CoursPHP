<?php  //on peut laisser la balise ouverte s'il n'y a que du PHP dans la page
class Client extends Personne {  // final empêche un appel éventuel dans la classe fille

    protected $adresse; // on rajoute des attributs à auteur en plus des attributs déjà présents dans Utilisateurs

     // constructeur
     public function __construct($nom,$prenom,$adresse){   //création d'un construcetur en java
        parent::__construct($nom,$prenom);  // on récupère le constructeur de la classe mère
        $this->setAdresse($adresse);
        
     }

    // setters et getters 
    public function setAdresse($adresse){
        $this->adresse=$adresse;
        }
    
    public function getAdresse(){
    return $this->adresse;
    }

    // nous redéfinissons une méthode déjà existante dans la classe mére
    function getCoordonnees(){  // final empêche un appel éventuel dans la classe fille
      
            echo 'nom : '.$this->getNom().'<br/>'.
            'prenom : '.$this->getPrenom().'<br/>'.
            'adresse : '.$this->getAdresse().'<br/>';
        
    }
}