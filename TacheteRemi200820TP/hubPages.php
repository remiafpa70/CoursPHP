<?php
session_start();
if(isset($_SESSION['pseudo']) && isset($_SESSION['id_membre'])){
    $id_membre = $_SESSION['id_membre'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>TACHETE.FR </title>
        
    </head>

    <body>    

    <h1> BIENVENU CHEZ TACHETE</h1>
    <?php 
       echo "Bienvenue à toi ".$_SESSION['pseudo'] ;
    ?>    
    <h2> CHOISIR UN DES SERVICES PROPOSE</h2>
    <header></header>

<fieldset id="main">
    <legend>Notre formulaire :</legend>
    <form action="hubPages.php" method="post">
 

    <form>
    <a href="commandesClients.php">Visualiser les commandes passées par les employés </a><br><br>
    <a href="listePrix.php">Modifier un prix produit </a><br><br>
    <a href="listeProduitsClients.php">Visualiser les sociétés qui ont commandées un type de produit </a><br><br>

    </form>
    </fieldset>
    <?php
    }
    else {echo "Vous n'êtes pas autorisé à visiter cette page <br/>";
          echo "<a href = \"connexion.php\">Merci de vous connecter</a> ";}
    ?>
    <?php
    //Inclusion des paramètres de connexion
include_once('myparam.inc.php');

//Connexion au serveur de base de données MySQL
$idcom = new mysqli(MYHOST, MYUSER, MYPASS, "facturation2");

//Test de la connexion
if(!$idcom){
    echo "Connexion impossible";
    exit(); //On arrete tout, on sort du script
}
    
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
       
        $pseudo = $idcom->escape_string($_POST['pseudo']);
        $password = $idcom->escape_string($_POST['password']);

        //Ecrire la requete qui va récupérer le pseudo, password et id_membre
        $requete = "SELECT password, id_membre FROM membres WHERE pseudo = '$pseudo' ";

        $result = $idcom->query($requete);
        
        //$result->fetch_row() c'est-à-dire qu'on applique la fonction fetch_row à $result
        $coord = $result->fetch_row();
        // var_dump($coord);
        if($coord && password_verify($_POST['password'], $coord[0])){
            session_start();
            $_SESSION['id_membre'] = $coord[1];
            $_SESSION['pseudo'] = $_POST['pseudo'];
            
            header('Location: commandesClients.php');
        }
    
    $idcom->close();
       
    }
    else{ echo "Veuillez vous connecter"; 
        echo "</a><br><br><a href=\"deconnexion.php\">Déconnexion</a><br><br>";}
       
    ?>
    </body>
    </html>