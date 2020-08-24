<?php
    session_start();
    if(isset($_SESSION['pseudo']) && isset($_SESSION['password'])){
?>

<!DOCTYPE html>
<html>
<head>
<title>Crétion de factures</title>
</head>
<body>
<h1>Espace Client</h1>
<?php
echo "bienvenu à toi".$_SESSION['pseudo'];
?>

</form>

<a href="page2.php">Ma page 2 </a>
</body>
</html>
<?php
}
else{echo "vous n'êtes pas autorisé à visiter cette page </br>";
    echo "<a href = \"connexion.php\">merci de vous connecter </a>";

}
?>