<!--Models contient les données ainsi que de la logique en rapport avec les données :
 validation, lecture et enregistrement dans l'architecture MVC-->


<?php

class Livre{
private $id;
private $titre;
private $auteur;
private $resume;

public function getId(){
    return $this->id;
}


public function getTitre(){
    return $this->titre;
}
public function setTitre($titre){
    return $this->titre=$titre;
}


    public function getAuteur(){
    return $this->auteur;
}
public function setAuteur($auteur){
    return $this->auteur=$auteur;
}
   

    public function getResume(){
    return $this->resume;
}
public function setResume($resume){
    return $this->resume=$resume;
}

public function getConnection()
	{
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=biblio', "root", "");
		}
		catch ( PDOException $e){
			print "Erreur".$e->getMessage();
		}

		return $bdd;
	}

	public function insert($titre, $auteur, $resume)
	{
		$bdd = $this->getConnection();

		$sql = $bdd->prepare(" INSERT INTO livre (titre, auteur, resume) VALUES ('$titre', '$auteur','$resume')");

		$sql->execute();
		
		if (!$sql->execute()){
			die("Oups, il y'a une erreur dans la requete");
		}

		header("Location: index.php");

	}

	public function list()
	{ 
		$bdd = $this->getConnection();

		$sql = $bdd->prepare('SELECT * FROM livre');
		
		$sql->execute();
		 
		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'Livre');
		
		return $resultat;
	}
}
?>