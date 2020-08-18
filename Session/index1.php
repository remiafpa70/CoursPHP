<!DOCTYPE html>
<html>
<head>
<title>Exemple</title>
</head>
<body>
<h1>Page 1</h1>
<?php
session_start();
$_SESSION['prenom'] = "Anouchka";
$_SESSION['ville'] = "Yvetot";
echo "bienvenu à toi".$_SESSION['prenom']." eh oui vous ahabitez bien à ".$_SESSION['ville'];
?>
<br/>
<a href="page2.php">Ma page 2 </a>
</body>
</html>