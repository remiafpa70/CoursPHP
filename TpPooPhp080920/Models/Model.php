<?php

class Model{

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
}
?>