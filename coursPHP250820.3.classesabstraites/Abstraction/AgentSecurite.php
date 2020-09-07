<?php

class AgentSecurite extends Employe{

    public function --construct($nom;$prenom,$salaire){
        $this->setNom($nom);
        $this->setPrenom($prenom); 
        $this->setSalaire($salaire);
    }

        function obtenirSalaire(){
            echo 'je m\'appelle '.$this->getNom().' et mon salaire est '.$this->getSalaire();
        }

        function prendreConge(){
            echo 'je suis en congé dans 30 jours ';
        }

}