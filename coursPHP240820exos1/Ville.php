<?php

Class Ville {
    private $nom;
    private $departement;
    private $region;
    private $habitants;

    public function __construct($nom,$departement,$region,$habitants){   //création d'un construcetur en java
        $this->setNom($nom);
        $this->setDepartement($departement);
        $this->setRegion($region);
        $this->setHabitants($habitants);


        echo "je suis le constructeur et je suis exécuté<br/>";
    }

    public function setNom($nom){
                $this->nom=$nom;
                }

    public function getNom(){
            return $this->nom;
    }

    public function setDepartement($departement){
        $this->departement=$departement;
        }

public function getDepartement(){
    return $this->departement;
}

public function setRegion($region){
    $this->region=$region;
    }

public function getRegion(){
return $this->region;
}

public function setHabitants($habitants){
    $this->habitants=$habitants;
    }

public function getHabitants(){
return $this->habitants;
}


}

?>