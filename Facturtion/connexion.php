<!DOCTYPE html>
<html>
<head>
<title>Connexion</title>
</head>
<body>
<h1>Connexion</h1>

<form action="<?=$_SERVER['PHP_SELF'] ?> " method="post"> <!--$_SERVER['PHP_SELF'] cette variable avec ce paramètre remplace le nom du fichier utilisé ici moncompte.php c'est plus universel et si on copie le code cette ligne reprendra automatiquement la page en cours-->

<input type="test" name="pseudo" placeholder="votre pseudo">
<input type="test" name="password" placeholder="votre mot de passe">
<input type="submit" value="connexion">
</form>

<?php
// étape 1 -> inclure les paramètres de connexion que l'on a définit dans le fichier myparam.inc.php
include_once('myparam.inc.php');

// étape 2 -> Connexion au serveur MySQL
$idcom = new mysqli(MYHOST,MYUSER,MYPASS,"facturation");

if(!$idcom){
    echo "connexion impossible";
    exit(); // arrçete tout et permet de sortir du script
}

//$pseudo = "remi";
//$password = "test";
// étape 4 -> la connexion est établie alors on vérifie
// que les champs du formulaire ne sont pas vides
// permet de récupérer ce qui a été saisi dans les champs nom,prenom,... non vides
if(!empty($_POST['pseudo']) 
&& (!empty($_POST['password']))  
)
{
echo "repère A";
//var_dump($_POST);
//  étape 5 ->cela permet de recupérer le champ nom en enlevant tous les caractères spéciaux saisis par l'utilisateur
$pseudo = $idcom->escape_string($_POST['pseudo']); 
$password = $idcom->escape_string($_POST['password']);

//var_dump($result);



  //  étape 6 ->   on écrit les requètes
  $requete = "SELECT id_membre FROM membres WHERE 'pseudo'=$pseudo AND 'password'=$password"; 


    //  étape 7 ->   envoyer la requêt au serveur utilisant la fonction query de ma classe MySQL
    $result = $idcom->query($requete);  

    //  étape 8 ->   on vérifie si la requête a bien été executée au niveau du serveur MySQL

    if($result){
        echo "Vous avez bien été enregistré au numéro :".$idcom->id_membre;
    }
    else {echo "Erreur ".$idcom->error;}

    //  étape 9 ->   on ferme la connexion
    $idcom->close();
}
//else {echo "veuillez remplir le formulaire";}
?>

if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
    if ($_POST['pseudo']==$pseudo && $_POST['password']==$password) {

    session_start();
    $_SESSION['pseudo'] = "remi";
    $_SESSION['password'] = "test";

header('location: create_facture.php');
}
else{ echo "vous  ne pouvez pas vous connecter";};
};
?>

<br/>
<a href="page2.php">Ma page 2 </a>
</body>
</html>