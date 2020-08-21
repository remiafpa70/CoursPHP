<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Mon formulaire</title>
    <link rel="stylesheet" href=styles.css>
</head>

<body>
<header></header>
<h1>Saisissez l'identifiant d'un utilisateur</h1>
  <hr>
  <form method = "post" action="modifUser.php">
   <fieldset>
       <legend>Modification des utilisateurs</legend>
       <label>Saisissez l'id de l'utilisateur</label>
       <input type="numeric" name="identifiant">

       <input type="submit" name ="modif" value="Rechercher et modifier">

   </fieldset>
</form>
<?php

include_once 'myparam.inc.php';

$idcom = new mysqli(MYHOST, MYUSER, MYPASS, "formulaire");
if (!$idcom)
{
 echo "Connexion impossible";
 exit();   
}
if (!empty($_POST['identifiant']))
{
$identifiant = $idcom->escape_string($_POST['identifiant']);

$requete = "SELECT * FROM utilisateurs WHERE id = '$identifiant'";

$result = $idcom->query($requete); 

$coord = $result->fetch_row();  //fetch row permet de récupérer une seule ligne

// affichage formulaire auto rempli

echo "<h1> Modification d'un utilisateur</h1>";
echo "<fieldset id=\"main\">";
echo "<legend>Modification du formuliare :</legend>";
echo "<form action=\"traitementUpdate.php\" method=\"post\">"; 
?>
<label>Identifiant:</label>

<?php
echo "<input type=\"numeric\" name=\"identifiant\" readonly=\"true\" value=\"$coord[0]\">";
// readonly empeche de modifier le champ
?>
<br><br>
<label>nom</label>
<?php
echo "<input type=\"string\" name=\"nom\" value=\"$coord[1]\">";
?>
<input type ="submit" name="valider" value=" Modifier "> &nbsp&nbsp&nbsp
<input type ="reset" name="annuler">

</fieldset>
</form>

<?php
}


else{ echo "veuillez saisir l'identifiant de l'utilisateur ";}
?>

</body>
</html>