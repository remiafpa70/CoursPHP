<!--Models contient les données ainsi que de la logique en rapport avec les données :
 validation, lecture et enregistrement dans l'architecture MVC-->
<?php

require_once './Models/Model.php';

class Conducteur extends Model{
private $id_conducteur;
private $nom;
private $prenom;

public function getIdConducteur(){
    return $this->id_conducteur;
}


public function getNom(){
    return $this->nom;
}
public function setTitre($nom){
    return $this->nom=$nom;
}


    public function getPrenom(){
    return $this->prenom;
}
public function setAuteur($prenom){
    return $this->prenom=$prenom;
}
   

// public function getConnection()
// 	{
// 		try{
// 			$bdd = new PDO('mysql:host=localhost;dbname=vtc', "root", "");
// 		}
// 		catch ( PDOException $e){
// 			print "Erreur".$e->getMessage();
// 		}

// 		return $bdd;
// 	}

	public function create($nom, $prenom )
	{
		$bdd = Model::getConnection();  // on appelle le parent

		$requete = $bdd->prepare(" INSERT INTO conducteur (prenom, anom) VALUES ('$prenom', '$nom')");

		if(!$requete->execute())
		{
			die("ATTENTION!!!!");
		}
		
		header("Location: index.php");

	}

	public function list()
	{ 
		$bdd = $this->getConnection();

		$sql = $bdd->prepare('SELECT * FROM conducteur');
		
		$sql->execute();
		 
		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'Conducteur');
		
		return $resultat;
	}
}
?>