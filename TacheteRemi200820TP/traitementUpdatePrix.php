<?php
session_start();
if(isset($_SESSION['pseudo']) && isset($_SESSION['id_membre'])){
    $id_membre = $_SESSION['id_membre'];

?>

<!DOCTYPE html>   <!-- pour modifier les donnée dans la bbd-->
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>PRIX</title>
    <link rel="stylesheet" href=styles.css>
</head>

<body>
<header></header>
<h1>Saisissez le produit à modifier</h1>
<?php 
       echo "Bienvenue à toi ".$_SESSION['pseudo'] ;
    ?> 
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
    $ProductName = $_POST['ProductName'];
    $UnitPrice = $idcom->escape_string($_POST['UnitPrice']);

    $requete = "UPDATE products SET UnitPrice = '$UnitPrice' WHERE ProductName = '$ProductName'";
  

    //Envoyer la requete
    $result = $idcom->query($requete);

    //Vérifier que la requete est bien éxécutée
    if ($result) {
        
        echo "les donnéees ont bien été modifiées";

        echo "<br><br><a href=\"hubPages.php\">Page d'acceuil</a><br>";

    } else {
        echo "Erreur " . $idcom->error;
    }

    //Fermer la connexion au serveur
    $idcom->close();


}
else {echo "Veuillez remplir correctement le formulaire";}

?>

</body>
</html>