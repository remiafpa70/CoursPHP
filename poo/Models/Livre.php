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
{try{
    $db = new PDO('mysql:host=localhost;dbname=biblio',
    "remsafpa70","rems70");
}
catch (PDOEception $e){
    print "erreur";

}
}
 public function insert($titre, $auteur, $resume)
 {
     $bdd = $this->getConnection();

     $sql = $bdd->prepare(" INSERT INTO livre (titre, auteur, resume) VALUES ('$titre','$auteur','$resume')");
 
 if(!$sql->execute())
{
    die("Oups, il y a une erreur dans la requète");
}   
header("Location: index.php");
}
}
?>