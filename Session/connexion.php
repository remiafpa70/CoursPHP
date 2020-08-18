<!DOCTYPE html>
<html>
<head>
<title>Connexion</title>
</head>
<body>
<h1>Connexion</h1>

<form action="<?=$_SERVER['PHP_SELF'] ?> " method="post">
<input type="test" name="pseudo" placeholder="votre pseudo">
<input type="test" name="password" placeholder="votre mot de passe">
<input type="submit" value="connexion">
</form>

<?php
$pseudo = "remi";
$password = "test";

if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
    if ($_POST['pseudo']==$pseudo && $_POST['password']==$password) {

    session_start();
    $_SESSION['pseudo'] = "remi";
    $_SESSION['password'] = "test";

header('location: moncompte.php');
}
else{ echo "vousn'êtes pas connectés";};
};
?>

<br/>
<a href="page2.php">Ma page 2 </a>
</body>
</html>