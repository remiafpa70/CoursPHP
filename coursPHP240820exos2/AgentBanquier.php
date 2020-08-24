<?php

Class AgentBanquier {
    private $nom;
    private $prenom;
    private $grade;
    private $lieuTravail;

    public function __construct($nom,$prenom,$grade,$lieuTravail){   //création d'un construcetur en java
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setGrade($grade);
        $this->setLieuTravail($lieuTravail);


        echo "je suis le constructeur et je suis exécuté<br/>";
    }

    public function __destruct() {  // permet de libérer la mémoire
        print "<br/><br/>Destruction de " . __CLASS__ . "<br/>";
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


public function setGrade($grade){
    $this->grade=$grade;
    }

public function getGrade(){
return $this->grade;
}

public function setLieuTravail($lieuTravail){
    $this->lieuTravail=$lieuTravail;
    }

public function getLieuTravail(){
return $this->lieuTravail;
}


}

?>