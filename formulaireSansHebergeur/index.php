<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Mon formulaire</title>
    <link rel="stylesheet" href=styles.css>
  </head>
  
  <body>
  <header></header>
  <h1>  Mon premier formulaire</h1>
<fieldset id="main">
<legend>Notre formulaire :</legend>
<form action="index.php" method="post"> <!--à voir -->
<label>Nom:</label>
<input type="text" name="nom" value="VotreNom"><br><br>
<label>Prénom:</label>
<input type="text" name="prenom" value="votrePrénom" ><br><br>
<label>Date:</label>
<input type="date" name="ladate" ><br><br>
<fieldset>
<legend>Lieu de naissance: </legend>
<input type="radio" name="lieu" value="Saint Denis">Saint Denis
<input type="radio" name="lieu" value="Reste du monde">Reste du monde
</fieldset>
<br><br>
<label>Adresse postale:</label><textarea rows="2" col="30" name="adressepostale" value="VotreAdresse"></textarea>
<br><br>
<label>Code postal:</label><input type="text" pattern="[0-9]{5}" placeholder="Saissisez 5 chiffres maximum" name="cp" value="94000">
<br><br>
<label>E-mail:</label><input type="email" name="email" value="Votreadresselectronique@gmail.com">
<br><br>
<label>Site:</label><input type="url" name="site" value="http://www.Votre.page.Web.com">
<br><br>
<label>Téléphone:</label>
<input type="text" name="telephone" pattern="0[6-7][0-9]{8}" value="0658898531" placeholder="Exemple : 0602030405 sans espace ni tirets" >
<br><br>
<label>Semestre:</label> 
<select name="semestre" size = 3>
         <option>S1</option>
         <option selected>S2</option> <!--Selection par défaut du choix S2 -->
         <option>S3</option>
         <option>S4</option>
      </select>   
<br><br>
<label>Niveau en HTML:</label>
<input type="range" name="niveauhtml" value="" max="10" min="0" step="1">
<br><br>
<fieldset id="fconnaissances">
<legend>Connaissances: </legend>
<input type="checkbox" checked="checked" name="connaissances[]" value="HTML">HTML <!--Selection par défaut du choix HTML -->
<input type="checkbox" name="connaissances[]" value="CSS">CSS
<input type="checkbox" name="connaissances[]" value="Formulaires">Formulaires
<input type="checkbox" name="connaissances[]" value="JavaScript">JavaScript
</fieldset>
<br><br>
<input type="submit" name="valider" value=" Envoyer "> &nbsp&nbsp&nbsp
<input type="reset" value="Annuler">
</fieldset>
</form>
<?php

// étape 1 -> créer la base de donnée dans MySQL

// étape 1 -> inclure les paramètres de connexion que l'on a définit dans le fichier myparam.inc.php
include_once('myparam.inc.php');

// étape 2 -> Connexion au serveur MySQL
$idcom = new mysqli(MYHOST,MYUSER,MYPASS,"formulaire");

if(!$idcom){
    echo "connexion impossible";
    exit(); // arrçete tout et permet de sortir du script
}

// étape 4 -> la connexion est établie alors on vérifie
// que les champs du formulaire ne sont pas vides
// permet de récupérer ce qui a été saisi dans les champs nom,prenom,... non vides
if(!empty($_POST['nom']) 
&& (!empty($_POST['prenom'])) 
&& (!empty($_POST['ladate']))
&& (!empty($_POST['lieu'])) 
&& (!empty($_POST['adressepostale']))
&& (!empty($_POST['cp']))
&& (!empty($_POST['email']))
&& (!empty($_POST['site']))
&& (!empty($_POST['telephone']))
&& (!empty($_POST['semestre'])) 
&& (!empty($_POST['niveauhtml'])) 
&& (!empty($_POST['connaissances'])) 
)
{
echo "ligne 93";
//var_dump($_POST);
//  étape 5 ->cela permet de recupérer le champ nom en enlevant tous les caractères spéciaux saisis par l'utilisateur
$nom = $idcom->escape_string($_POST['nom']); 
$prenom = $idcom->escape_string($_POST['prenom']);
$ladate = $_POST['ladate'];
$lieu = $_POST['lieu'];
$adressepostale = $idcom->escape_string($_POST['adressepostale']);
$cp = $idcom->escape_string($_POST['cp']);
$email = $idcom->escape_string($_POST['email']);
$site = $idcom->escape_string($_POST['site']);
$telephone = $idcom->escape_string($_POST['telephone']);
$semestre = $_POST['semestre'];
$niveauhtml = $_POST['niveauhtml'];

$result = "";
        foreach ($_POST['connaissances'] as $val) {
            $result .= $val . '/';
        }
$connaissances = $idcom->escape_string($result);
//var_dump($result);
//$connaissances = $_POST['connaissances'];





  //  étape 6 ->   on écrit les requètes
  $requete = "INSERT INTO formulaire(nom,
  prenom,
  ladate,
  lieu,
  adressepostale,
  cp,
  email,
  site,
  telephone,
  semestre,
  niveauhtml,
  connaissances ) 
  VALUES('$nom',
          '$prenom',
          '$ladate',
          '$lieu',
          '$adressepostale',
          '$cp',
          '$email',
          '$site',
          '$telephone',
          '$semestre',
          '$niveauhtml',
          '$connaissances')"; 


    //  étape 7 ->   envoyer la requêt au serveur utilisant la fonction query de ma classe MySQL
    $result = $idcom->query($requete);  

    //  étape 8 ->   on vérifie si la requête a bien été executée au niveau du serveur MySQL

    if($result){
        echo "Vous avez bien été enregistré au numéro :".$idcom->insert_id;
    }
    else {echo "Erreur ".$idcom->error;}

    //  étape 9 ->   on ferme la connexion
    $idcom->close();
}
//else {echo "veuillez remplir le formulaire";}


?>

<br>
<br>
<br>
<footer> Formulaire réalisé dans le cadre du TP 2 de la formation de développeurs intégrateurs et codeurs web</footer>
   
  </body>
  
</html>