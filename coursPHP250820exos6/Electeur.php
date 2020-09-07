<?php  //on peut laisser la balise ouverte s'il n'y a que du PHP dans la page
final class Electeur extends Client {  // final empêche un appel éventuel dans la classe fille

    protected $bureauV;  // on rajoute des attributs à auteur en plus des attributs déjà présents 
    protected $aVote;  // on rajoute des attributs à auteur en plus des attributs déjà présents 

     // constructeur
     public function __construct($nom,$prenom,$adresse,$bureauV,$aVote){   //création d'un construcetur en java
        parent::__construct($nom,$prenom,$adresse);  // on récupère le constructeur de la classe mère
        $this->setAdresse($bureauV);
        $this->setAdresse($aVote);

     }

    // setters et getters 
    public function setAdresse($adresse){
        $this->adresse=$adresse;
        }
    
    public function getAdresse(){
    return $this->adresse;
    }
	public protected get$BureauV() {
		return this.$bureauV;
    }
    
	public protected get$AVote() {
		return this.$aVote;
	}

	public void set$AVote(protected $aVote) {
		this.$aVote = $aVote;
    }
    
	public void set$BureauV(protected $bureauV) {
		this.$bureauV = $bureauV;
    }
    
    function vote(){  // final empêche un appel éventuel dans la classe fille
        this.$aVote == TRUE;
    }

    function isVoter(){  // final empêche un appel éventuel dans la classe fille
        if(this.$aVote == TRUE){
            echo 'vous avez voté';
        }
        else{
            echo 'vous n\'avez pas voté';
        }
    }    



}