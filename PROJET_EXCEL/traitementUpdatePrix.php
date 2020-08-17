<!DOCTYPE html>   <!-- pour modifier les donnée dans la bbd-->
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Modification d'un utlisateur</title>
    <link rel="stylesheet" href=styles.css>
</head>

<body>
<header></header>
<h1>Saisissez l'identifiant d'un utilisateur</h1>

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

    $requete = "SELECT  SET UnitPrice = $UnitPrice WHERE ProductName = '$ProductName'";
  

    //Envoyer la requete
    $result = $idcom->query($requete);

    //Vérifier que la requete est bien éxécutée
    if ($result) {
        
        echo "les donnéees ont bien été modifiées";

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