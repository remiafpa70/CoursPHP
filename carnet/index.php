<!DOCTYPE html><!-- dans ce fichier nous voyons comment envoyer des informations dans une base de donnée voir étapes entre 6 et 8-->
<html>
<head>
<title>Exemple</title>
</head>
<body>
<h1>Bienvenue sur notre formulaire d'enregistrement</h1>
<form method = "post" action="index.php">
   <fieldset>
       <legend>Enregistrement des contacts dans le carnet</legend>
       <label>Nom</label>
       <input type="text" name="nom"><br/><br/>>
 
       <label>Prénom</label>
       <input type="text" name="prenom"><br/><br/>>
 
       <label>Date de naissance</label>
       <input type="date" name="datenaissance"><br/><br/>>
 
       <label>Ville</label>
       <input type="text" name="ville"><br/><br/>>
 
       <input type="submit" value="envoyer">
 
   </fieldset>
</form>
<?php

// étape 1 -> créer la base de donnée dans MySQL

// étape 1 -> inclure les paramètres de connexion que l'on a définit dans le fichier myparam.inc.php
include_once('myparam.inc.php');

// étape 2 -> Connexion au serveur MySQL
$idcom = new mysqli(MYHOST,MYUSER,MYPASS,"carnet");

if(!$idcom){
    echo "connexion impossible";
    exit(); // arrçete tout et permet de sortir du script
}

// étape 4 -> la connexion est établie alors on vérifie
// que les champs du formulaire ne sont pas vides
if(!empty($_POST['nom']) // permet de récupérer ce qui a été saisi dans les champs nom,prenom,... non vides
&& (!empty($_POST['prenom']) 
&& (!empty($_POST['datenaissance'])
&& (!empty($_POST['ville']))))){

//  étape 5 ->cela permet de recupérer le champ nom en enlevant tous les caractères spéciaux saisis par l'utilisateur
    $nom = $idcom->escape_string($_POST['nom']); 
    $prenom = $idcom->escape_string($_POST['prenom']);
    $datenaissance = $_POST['datenaissance'];
    $ville = $idcom->escape_string($_POST['ville']);


  //  étape 6 ->   on écrit les requètes
  $requete = "INSERT INTO carnet(nom,prenom,naissance,ville) VALUES('$nom','$prenom', '$datenaissance', '$ville')"; 


    //  étape 7 ->   envoyer la requêt au serveur utilisant la fonction query de ma classe MySQL
    $result = $idcom->query($requete);  

    //  étape 8 ->   on vérifie si la requête a bien été executée auniveauv du serveur MySQL

    if($result){
        echo "Vous avez bien été enregistré au numéro :".$idcom->insert_id;
    }
    else {echo "Erreur ".$idcom->error;}

    //  étape 9 ->   on ferme la connexion
    $idcom->close();
}
else {echo "veuillez remplir le formulaire";}


?>

</body>
</html>
