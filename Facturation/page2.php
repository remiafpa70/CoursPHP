<!DOCTYPE html>
<html>
<head>
<title>Ma page 2 session</title>
</head>
<body>
<h1>Page 2</h1>
<?php
session_start();
$_SESSION['prenom'] = "Rémi";
$_SESSION['ville'] = "Champs sur Marne";
echo "bienvenu à toi".$_SESSION['prenom']."<br/";
echo "votre ville est ".$_SESSION['ville'];

?>
<br/>
<a href="index1.php">Ma page 1 </a>
</body>
</html>
