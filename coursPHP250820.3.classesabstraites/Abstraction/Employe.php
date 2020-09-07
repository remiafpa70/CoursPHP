<?php

abstract Class Employe {
    private $nom;
    private $prenom;
    private $salaire;
	public private get$Prenom() {
		return this.$prenom;
	}

	public void set$Prenom(private $prenom) {
		this.$prenom = $prenom;
	}

    

    abstract function obtenirSalaire();

    abstract function prendreConge();


	public private get$Salaire() {
		return this.$salaire;
	}

	public void set$Salaire(private $salaire) {
		this.$salaire = $salaire;
	}

    public function setNom($nom){
                $this->nom=$nom;
                }

    public function getNom(){
            return $this->nom;
    }

   
}

?>