<?php

Class Personne {
    private $nom;
    private $prenom;


    public function __construct($nom,$prenom){   //création d'un construcetur en java
        $this->setNom($nom);
        $this->setPrenom($prenom);
  
        echo "je suis le constructeur de la classe personne<br/>";
    }

    public function setNom($nom){
                $this->nom=$nom;
                }

    public function getNom(){
            return $this->nom;
    }

    public function setPrenom($prenom){
        $this->prenom=$prenom;
        }

    public function getPrenom(){
    return $this->prenom;
    }

    
}

?>