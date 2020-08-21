<!DOCTYPE html>
<html>
<head>
<title>Exemple</title>
</head>
<body>

<?php
//echo ("Daniel",28);
$a = "Hello world!"; //déclare la variable $a
echo $a."<br/>";  //    affiche la variable $a      ,."<br/>"sert à passer à la ligne suivante
echo (str_replace("world","Daniel",$a)."<br/>");    // remplace dans la variable world par Daniel
echo (str_repeat((str_replace("world","Daniel",$a)),3)."<br/>");    //  répéte 3 fois   str_replace("world","Daniel",$a)
echo "<br/>";
$b = (str_replace("world","Jean",$a));
echo $b."<br/>";

$c = (str_repeat($b,3));
echo $c;
?>

</body>
</html>