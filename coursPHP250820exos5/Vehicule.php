<?php

Class Vehicule {
    private $type;
    private $nbrPlaces;


    public function __construct($type,$nbrPlaces){   //création d'un construcetur en java
        $this->setType($type);
        $this->setNbrPlaces($nbrPlaces);
  
        echo "je suis le constructeur et je suis exécuté<br/>";
    }

    public function setType($type){
                $this->type=$type;
                }

    public function getType(){
            return $this->type;
    }

    public function setNbrPlaces($nbrPlaces){
        $this->nbrPlaces=$nbrPlaces;
        }

    public function getNbrPlaces(){
    return $this->nbrPlaces;
    }

    
}

?>