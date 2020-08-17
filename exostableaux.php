<!DOCTYPE html>
<html>
<head>
<title>Exemple</title>
</head>
<body>

<?php

/*Exercice 1
Écrivez un tableau multidimensionnel associatif dont les clés sont 
des noms de personne et les valeurs des tableaux indicés contenant 
le prénom, la ville de résidence et l'âge de la personne.*/


$nom=array("Martin"=>array("Jean","Nice",50),"Lebrun"=>array("Georges","Bordeaux",23),"Petit"=>array("Kevin","Tours",45));

print_r($nom);





/*Exercice 2
Écrivez un tableau multidimensionnel associatif dont les clés sont des
 noms de personne et les valeurs des tableaux associatifs dont les clés
  sont le prénom, la ville de résidence et l’age de la personne avec une
   série de valeurs associées.*/

   $nom=array("Martin"=>array("Jean","Nice",50,"ouvrier"),
                "Lebrun"=>array("Georges","Bordeaux",23,"infirmier"),
                 "Petit"=>array("Kevin","Tours",45,"grutier"));

   print_r($nom);




/*Exercice 3
Utilisez une boucle foreach pour lire les tableaux des exercices 1 et 2.*/

   $nom=array("Martin"=>array("Jean","Nice",50,"ouvrier"),
                "Lebrun"=>array("Georges","Bordeaux",23,"infirmier"),
                 "Petit"=>array("Kevin","Tours",45,"grutier"));

   foreach($nom as $cle=>$valeur1){
       echo '<br>M.'.$cle.'<br>';
       // Lecture de chaque tableau de chaque ligne
   foreach($valeur1 as $cle2=>$valeur2){
       // Affichage
       echo $cle2.'.....'.$valeur2.'<br>';
       
   }
   }
   

   /*
Exercice 4
Créez un tableau contenant une liste d’adresses de sites recommandés, puis créez
 un lien aléatoire vers le premier site de la liste après avoir trié le tableau 
 en ordre aléatoire.
Nous utilisons la fonction array_rand() qui retourne la clé de l’élément pris au 
hasard. Cette clé permet de lire le nom du site et son adresse URL. */

$siterecommandes=array("https://www.letudiant.fr/etudes/fac.html",
                        "https://fr-fr.facebook.com/",
                        "https://www.instagram.com/?hl=fr",
                        "https://fr.linkedin.com/");

$aleatoireclassement=array_rand($siterecommandes,2);
//foreach($aleatoireclassement as $key1=>$valeur1);
echo "nous vous conseillons de visiter ce site : ".$siterecommandes[$aleatoireclassement[0]]."<br>";

$siterecommandes=array("https://www.letudiant.fr/etudes/fac.html",
                        "https://fr-fr.facebook.com/",
                        "https://www.instagram.com/?hl=fr",
                        "https://fr.linkedin.com/%22);

$aleatoireclassement=array_rand($siterecommandes);

echo "Site recommandé : <a href="$siterecommandes[$aleatoireclassement]" > ",$aleatoireclassement,"</a>";


?>

</body>
</html>