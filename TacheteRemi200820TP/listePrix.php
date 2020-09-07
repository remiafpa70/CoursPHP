<?php
session_start();
if(isset($_SESSION['pseudo']) && isset($_SESSION['id_membre'])){
    $id_membre = $_SESSION['id_membre'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Mon formulaire</title>
    <link rel="stylesheet" href=styles.css>
</head>

<body>
<header></header>
<h1>SAISISSEZ LE NOM DU PRODUIT</h1>
<?php 
       echo "Bienvenue à toi ".$_SESSION['pseudo'] ;
    ?> 
  <hr>
  <form method = "post" action="listePrix.php">
   <fieldset>
       <legend>RECHERCHE DU PRODUIT</legend>
       <label>Saisissez le produit</label>
       <input type="text" name="ProductName">

       <input type="submit" name ="modif" value="Rechercher et modifier">

   </fieldset>
</form>
</a><br><br> 
<?php
    
  }
  else {echo "Vous n'êtes pas autorisé à visiter cette page <br/>";
        echo "<a href = \"connexion.php\">Merci de vous connecter</a> ";}
  ?>  
<?php

include_once 'myparam.inc.php';

$idcom = new mysqli(MYHOST, MYUSER, MYPASS, "categories");
if (!$idcom)
{
 echo "Connexion impossible";
 exit();   
}
if (!empty($_POST['ProductName']))
{
$ProductName = $idcom->escape_string($_POST['ProductName']);

$requete = "SELECT ProductName,UnitPrice FROM Products WHERE ProductName = '$ProductName'";

$result = $idcom->query($requete); 

$coord = $result->fetch_row();  //fetch row permet de récupérer une seule ligne

// affichage formulaire auto rempli

echo "<h1> MODIFIER LE TARIF</h1>";
echo "<fieldset ProductName=\"main\">";
echo "<legend>Modification du formuliare :</legend>";
echo "<form action=\"traitementUpdatePrix.php\" method=\"post\">"; 
?>
<label>Nom du produit:</label>

<?php
echo "<input type=\"text\" name=\"ProductName\" readonly=\"true\" value=\"$coord[0]\">";
// readonly empeche de modifier le champ
?>
<br><br>
<label>Prix actuel</label>
<?php
echo "<input type=\"string\" name=\"UnitPrice\" value=\"$coord[1]\">";
// echo "<input type=\"string\" name=\"nom\" value=\"$coord[1]\">";
?>
<input type ="submit" name="valider" value=" Modifier "> &nbsp&nbsp&nbsp
<input type ="reset" name="annuler">



</fieldset>
</form>
<br><br><a href="hubPages.php">Page d'acceuil</a><br><br>
    <a href="deconnexion.php">Déconnexion</a><br><br>
<?php
}


else{ echo "veuillez saisir l'identifiant de l'utilisateur";
    echo "<br><br><a href=\"hubPages.php\">Page d'acceuil</a><br><br>";
    echo "<a href=\"deconnexion.php\">Déconnexion</a><br><br>";}
?>

</body>
</html>