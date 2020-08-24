<?php

Class Vehicule {
    private $type;
    private $nbrPlaces;


    public function __construct($type,$nbrPlaces){   //création d'un construcetur en java
        $this->setType($type);
        $this->setNbrPlaces($nbrPlaces);
  
        echo "je suis le constructeur et je suis exécuté<br/>";
    }

    // function seConnecter(){
    // echo "je suis un utilisateur de votre application, je peux me connecter";
    // }

    // function seDeConnecter(){
    //     echo "je ne suis pas un utilisateur de votre application, je ne peux pas me connecter";
    //     }

    // public function recupereAge(){
    //         return $this->age;
    //         }

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

    //controle à faire : l'age doit être compris entre 1 et 120
//

// public function getAge(){
// return $this->age;
// }
    
// public function setEmail($email){  // permet de faire une vérification sur le mail et de faire une exception
//     if (filter_var($email, FILTER-VALIDATE_EMAIL)){
//     $this->email=$email;    
//     }
//     else{
//         throw new Exception("attention adresse email invalide");
//     }
//     }

// public function getEmail(){
// return $this->email;
// }        
}

?>