<!--Models contient les données ainsi que de la logique en rapport avec les données :
 validation, lecture et enregistrement dans l'architecture MVC-->


<?php

class Conducteur{
private $id;
private $nom;
private $prenom;

public function getId(){
    return $this->id;
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
   

public function getConnection()
	{
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=vtc', "root", "");
		}
		catch ( PDOException $e){
			print "Erreur".$e->getMessage();
		}

		return $bdd;
	}

	// public function insert($titre, $auteur, $resume)
	// {
	// 	$bdd = $this->getConnection();

	// 	$sql = $bdd->prepare(" INSERT INTO livre (titre, auteur, resume) VALUES ('$titre', '$auteur','$resume')");

	// 	$sql->execute();
		
	// 	if (!$sql->execute()){
	// 		die("Oups, il y'a une erreur dans la requete");
	// 	}

	// 	header("Location: index.php");

	// }

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