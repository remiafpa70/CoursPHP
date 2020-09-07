<?php

function addition($nombre1, $nombre2){
$resultat=$nombre1+$nombre2;
return $resultat;
}

echo "<br>";
echo addition(10,10);


function addition($nombre1, $nombre2){
    $resultat=$nombre1+$nombre2;
    return $resultat;
    }
    
    echo "<br>";
    echo addition(10,10);
?>


<!-- <form method="post" action="form.php">
Sélectionnez un nombre: <input type="text" name="nbr1" /><br />
Sélectionnez le signe (+, -, /, *) : <input type="text" name="signe" /><br />
Sélectionnez le deuxième nombre: <input type="text" name="nbr2" /><br />
<br />
<input type="submit" valu="Faire le calcul" />
</form> -->

<?php

// switch ($signe) {
//     case +:
//         echo "addition<br>";
//         $resultat=nbr1+nbr2;
//         echo "résultat de l'addition = ".$resultat;
//         break;
//     case 1:
//         echo "i égal 1<br>";
//         $resultat=$a-$b;
//         echo "résultat de la soustraction = ".$resultat;
//         break;
//     case 2:
//         echo "i égal 2<br>";
//         $resultat=$a/$b;
//         echo "résultat de la division = ".$resultat;
//         break;
//     case 3:
//         echo "i égal 2<br>";
//         $resultat=$a*$b;
//         echo "résultat de la multiplication = ".$resultat;
//         break;
//     case 4:
//         echo "i égal 2<br>";
//         $resultat=$a%$b;
//         echo "résultat du modulo est = ".$resultat;
//         break;
// }
?>