<?php require_once('../inc/haut.inc.php'); ?>
<?php require_once('../inc/menu.inc.php'); ?>

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

    <header></header>

    <fieldset id="main">
        <legend>Notre formulaire :</legend>
        <!-- <form action="http://localhost/CoursPHP/monSitePhp/connexion.php" method="post"> -->


        <form class="form1" action="<?= $_SERVER['PHP_SELF'] ?> " method="post">
            <input type="text" name="pseudo" placeholder="Votre pseudo">
            <input type="password" name="password" placeholder="Votre mot de passe">
            <input type="submit" value="Connexion"><br><br>
            <a href="http://localhost/CoursPHP/monSitePhp/inscription.php">pour vous inscrire c'est par ici</a><br><br>
            <a href="http://localhost/CoursPHP/monSitePhp/deconnexion.inc.php">Déconnexion</a><br><br>
        </form>
    </fieldset>

    <?php    
// echo $_SERVER['DOCUMENT_ROOT'];




    //Inclusion des paramètres de connexion
include("..\inc\myparam.inc.php");

//Connexion au serveur de base de données MySQL
$idcom = new mysqli(MYHOST, MYUSER, MYPASS, "facturation2", PORT);

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
        var_dump($coord);
        die();
        if($coord && password_verify($_POST['password'], $coord[0])){
            session_start();
            $_SESSION['id_membre'] = $coord[1];
            $_SESSION['pseudo'] = $_POST['pseudo'];}
            


            $idcom->close();
            
            include("http://localhost/CoursPHP/monSitePhp/index.php");
        }
             
             else{ echo "Veuillez vous connecter"; }
    

    // header('Location: index.php';
   
       
    ?>

<?php require_once('../inc/bas.inc.php'); ?>

</body>

</html>