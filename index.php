<!DOCTYPE html>
<html>
<head>
<title>Exemple</title>
</head>
<body>

<h1> PHP Page </h1>

<?php

// pour mettre un commentaire
/* sur plusisieures lignes
.
.
*/



echo "Bonjour, je suis un script PHP ! <br/>";

$annee = "1970";  // déclaration de variable
$nom = "Martin Jean";  // déclaration de variable

echo " $annee <br/>";  // pour afficher la variable annee

echo $nom;  // pour afficher la variable nom

echo "<br/>Monsieur $nom est né en $annee<br/>"; // permet de concatainer avec des doubles cotes


echo '<br/>Monsieur '.$nom.' est né en'.$annee.'<br/>';  // permet de concatainer avec des simples cotes



// ci dessous Les opérateurs d’affectation combinée
// +=  ==> $x += 2 ==> $x = $x + 2
$valeur1 = 5;
$valeur1 += 2;
echo "<br/>$valeur1<br/>";  //5+2=7
// -=  ==> $x -= 4 ==> $x = $x - 4
$valeur2 = 8;
$valeur2 += 4;
echo "<br/>$valeur2<br/>";  // 8-4=4
// /=  ==> $x /= 2 ==> $x = $x / 2
// %=  ==> $x %= 5 ==> $x = $x % 5
// .=  ==> $chaine1 .= $chaine2 ==> $chaine1 = $chaine1 . $chaine2
// Bonjour Julien, vous habitez à Chams-sur-Marne et vous avez 28 ans
$chaine1 = "Bonjour";
$prenom = "Julien";
$lieu  = "Chams-sur-Marne";
$age= 28;
$chaine1 .= "<br/> ".$prenom.", vous habitez à ".$lieu." et vous avez ".$age." ans.";
echo $chaine1;


// les constantes en PHP
define("PI", 0.2);
define("TVA", 0.2);
echo "<br/>La TVA est de ".TVA;


// un tableau de constantes
define("ANIMAUX", array('chien','chat','oiseaux'));
echo "<br/>".ANIMAUX[0];


// constantes prédéfinies en PHP
// affiche le chemin complet et le nom de ficheir en cours d'éxécution
echo '<br/>Chemin complet du fichier : '.__FILE__.'<br/>';

// affiche la ligne courante
echo 'le numéro de la ligne est : '.__LINE__.'<br/>';



// Rédiger une expression conditionnelle pour tester si un nombre est à la fois un multiple de 3 et de 5.
$valeur = 180;
$valeurdiv = 15;
echo "<br/>pour ".$valeur."/ ".$valeurdiv;
$valeur %= $valeurdiv; 
echo "<br/>il reste = ".$valeur;

if($valeur==0)
{
    echo "<br/>ce nombre est à la fois un multiple de 3 et un multiple de 5<br/>";
    
}
elseif( $valeur != 0   )
{
    echo "<br/>ce nombre n'est pas à la fois un multiple de 3 et un multiple de 5<br/>";
}


/* Écrire une expression conditionnelle utilisant les variables $age et $sexe dans une instruction if pour
sélectionner une personne de sexe féminin dont l’age est compris entre 21 et 40 ans et afficher un
message de bienvenue approprié. */

$age = 22;
$sexe = "femme";

if($age >= 21 && $age <=40 && $sexe == "femme" )
{
    echo "<br/>Bonjour Madame, veuillez vous donner la peine d'entrer<br/>";
    
}
elseif($age < 21 && $age > 40 && $sexe != "femme"   )
{
    echo "<br/>Nous sommes désolés vous ne pouvez pas entrer<br/>";
}


// tableaux associatifs

$voiture = array('marque' => 'Peugeot', 'couleur' => 'noire', 'immat' => 'ZE13AF');

echo $voiture['marque']; // pour faire apparaître cet clé

foreach($voiture as $cle=>$valeur){ // froeach pour afficher l'ensemble des valeurs du tableau en une seule fois
    echo $cle." : ".$valeur."<br>"; 
}


$voiture = ['marque' => 'Peugeot', 'couleur' => 'noire', 'immat' => 'ZE13AF'];

echo $voiture['couleur'];



    


/* Écrivez un script PHP qui affiche les dix premiers entiers, leurs carrés et leurs racines carrées, 
dans un tableau de trois colonnes */

$array = array(  //tableaux de tableaux associatifs peuvent avoir n'importes quelles types de valeurs (texte ou numériques)
     array('Nombre', 'Carré', 'Racine'),
     array('Nombre' => '1', 'Carré' => '1', 'Racine' => '1'),
     array('Nombre' => '2', 'Carré' => '4', 'Racine' => '1.41421356237'),
     array('Nombre' => '3', 'Carré' => '9', 'Racine' => '1.73205080757'),
     array('Nombre' => '4', 'Carré' => '16', 'Racine' => '2'),
     array('Nombre' => '5', 'Carré' => '25', 'Racine' => '2.2360679775'),
     array('Nombre' => '6', 'Carré' => '36', 'Racine' => '2.44948974278'),
     array('Nombre' => '7', 'Carré' => '49', 'Racine' => '2.64575131106'),
     array('Nombre' => '8', 'Carré' => '64', 'Racine' => '2.82842712475'),
     array('Nombre' => '9', 'Carré' => '81', 'Racine' => '3'),
     array('Nombre' => '10', 'Carré' => '100', 'Racine' => '3.16227766017'),
    );

 

    foreach($array as $ligne){
        echo '<br><br>';
        // Lecture de chaque tableau de chaque ligne
	foreach($ligne as $cle=>$valeur){
        // Affichage
        echo '.....'.$valeur;
        
    }
}


// Choisir un nombre de trois chiffres. Effectuer ensuite des tirages aléatoires et compter le nombre de tirages
// nécessaire pour obtenir le nombre initial. Arrêter les tirages et afficher le nombre de coups réalisés. 
// Réaliser ce script d’abord avec l’instruction while puis avec l’instruction for.

/*$nombrearetrouver = 125;
$nomdredetirages = 0;

function entierAleatoire(1, 125)
{
 return Math.floor(Math.random() * (125 - 1 + 1)) + 1;
}
var entier = entierAleatoire(1, 125);*/


//<h1> les tableaux en PHP/h1>

$fruits = array("Orange","Prune","Fraise","Kiwi","Cerises");    // tableaux à index numériques array(0 = "Orange",1 = "Prune",2 = "Fraise",...
                                                                // il peut prendre tout type de valeurs
echo "<br/><br/>le fruit $fruits[0] est bon<br/>";

for($i=0;$i<count($fruits);$i++){ //permet d'afficher les données du tableaux
    echo "<br/>".$fruits[$i];
}


// 1.2 découpe d'une chaine de caractères
$chaine="La cigale et la fourmi";
$tabmot = explode(" ",$chaine); // on la découpe quand on rencontre " "
print_r($tabmot);


// 2.2 découpe d'une chaine de caractères
$adresse="machin@wanadoo.fr" ;  // chaine de caractères
$tabsite=explode("@",$adresse); // on la découpe quand on rencontre @
echo "L'utilisateur est : {$tabsite[0]} et son serveur mail est {$tabsite[1]} ";

?>

</body>
</html>