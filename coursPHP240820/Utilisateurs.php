<?php

Class Utilisateurs {
    private $nom;
    private $prenom;
    private $age;
    private $email;

    public function __construct($nom,$prenom,$email){   //création d'un construcetur en java
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setEmail($email);

        echo "je suis le constructeur et je suis exécuté<br/>";
    }

    function seConnecter(){
    echo "je suis un utilisateur de votre application, je peux me connecter";
    }

    function seDeConnecter(){
        echo "je ne suis pas un utilisateur de votre application, je ne peux pas me connecter";
        }

    public function recupereAge(){
            return $this->age;
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

//controle à faire : l'age doit être compris entre 1 et 120
public function setAge($age){
    if($age>120 || $age<1){
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