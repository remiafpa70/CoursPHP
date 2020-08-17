<!DOCTYPE html> <!-- dans ce fichier nous voyons comment récupérer des informations dans une base de donnée voir étapes entre 6 et 8-->
<html>
<head>
<title>Exemple</title>
</head>
<body>
<h1>Bienvenue sur notre formulaire d'enregistrement</h1>
<form method = "post" action="index2.php">
   <fieldset>
       <legend>Enregistrement des contacts dans le carnet</legend>
       <label>Nom</label>
       <input type="text" name="nom"><br/><br/>>
 
       <!-- <label>Prénom</label>
       <input type="text" name="prenom"><br/><br/>>
 
       <label>Date de naissance</label>
       <input type="date" name="datenaissance"><br/><br/>>
 
       <label>Ville</label>
       <input type="text" name="ville"><br/><br/>> -->
 
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
if(!empty($_POST['nom'])){ // permet de récupérer ce qui a été saisi dans les champs nom,prenom,... non vides


//  étape 5 ->cela permet de recupérer le champ nom en enlevant tous les caractères spéciaux saisis par l'utilisateur
    $nom = $idcom->escape_string($_POST['nom']); 
  

//  étape 6 ->   on écrit les requètes
  $requete = "SELECT nom,prenom,naissance,ville FROM carnet WHERE nom LIKE '$nom%'"; 


//  étape 7 ->   envoyer la requêt au serveur utilisant la fonction query de ma classe MySQL
    $result = $idcom->query($requete);  
    var_dump($result);

    echo "<table border>
        <tr>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Date de naissance</td>
        <td>Ville</td>
        </tr>";

//  étape 8 ->   on vérifie si la requête a bien été executée auniveauv du serveur MySQL
// print_r($result->fetch_array(MYSQLI_ASSOC));
// tous les résulata de la variable rox sont stocké dans result  pour un tableau associatif on prend MYSQLI_ASSOC
   
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                // foreach($row as $key=>$valeur){
                echo "<tr>
                <td>".$row['nom']."</td>
                <td>".$row['prenom']."</td>
                <td>".$row['naissance']."</td>
                <td>".$row['ville']."</td>
                </tr>";
        }
    


 //Etape 9 et dernière étape: On ferme la connexion
 $idcom->close();
}
else {echo "Veuillez remplir la formulaire"; }

echo "</table>";


?>

</body>
</html>
