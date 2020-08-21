<?php
// session_start();
// if(isset($_SESSION['pseudo']) && isset($_SESSION['id_membre'])){
//     $id_membre = $_SESSION['id_membre'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Connexion </title>
        
    </head>

    <body>
    <h1> BIENVENU CHEZ TACHETE</h1>
    <header></header>

<fieldset id="main">
    <legend>Notre formulaire :</legend>
    <form action="connexion.php" method="post">


    <form action="<?= $_SERVER['PHP_SELF'] ?> " method="post">
        <input type="text" name="pseudo" placeholder="Votre pseudo">
        <input type="password" name="password" placeholder="Votre mot de passe">
        <input type="submit" value="Connexion"><br><br>
        <a href="inscription.php">pour vous inscrire c'est par ici</a><br><br> 
    <a href="deconnexion.php">Déconnexion</a><br><br>
    </form>
    </fieldset>

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

        // $pass_hash = password_hash($password, PASSWORD_DEFAULT);

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
            
            header('Location: hubPages.php');
        }
    
    $idcom->close();
       
    }
    else{ echo "Veuillez vous connecter"; }
       
    ?>
    </body>
    </html>    