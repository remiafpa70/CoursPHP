<?php

Class Employes {
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom,$prenom,$age){   //création d'un construcetur en java
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setEmail($age);
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

$prenom = trim($prenom); // la fontion trim permet de vérifier si une variable est vide
if ($prenom === "") {
echo "Le prénom ne doit pas être vide <br>";
} else {
$this->prenom = $prenom;
}
}

public function getPrenom(){
    return $this->prenom;
}

//controle à faire : l'age doit être compris entre 1 et 120
public function setAge($age){
    if($age>65 || $age<18){
        throw new Exception("l'age doit être compris entre 1 et 120");
    }
    else
    $this->age=$age;
    }

public function getAge(){
return $this->age;
}
    
public function setEmail($email){  // permet de faire une vérification sur le mail et de faire une exception
    if (filter_var($email, FILTER-VALIDATE_EMAIL)){
    $this->email=$email;    
    }
    else{
        throw new Exception("attention adresse email invalide");
    }
    }

public function getEmail(){
return $this->email;
}        
}

?>