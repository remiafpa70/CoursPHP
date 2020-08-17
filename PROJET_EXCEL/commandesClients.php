<!DOCTYPE html> <!--Permettre de visualiser quel employé a passé quelles commandes et à quels clients
-->
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>COMMANDES</title>
  </head>
  
  <body>

  <header></header>
  <h1>Quels employés ont passées commande ? / types de commandes ? / pour quels clients ?</h1>
  <hr>
  <form method = "post" action="commandesClients.php">
   <fieldset>

       <input type="submit" value="Rechercher">

   </fieldset>
</form>

  <?php

  
//Inclusion des paramètres de connexion
include_once("myparam.inc.php"); // inclus le fichier"x"
// echo "connexion avec myparam.inc.php ok";


$idcom = new mysqli(MYHOST,MYUSER,MYPASS, 'categories'); // bbd MySQL
// echo "test connexion avec bbd";

if (!$idcom) 
{
// echo "Connexion impossible à la base";
exit(); 
}
?>

<?php
// echo "connexion bbd établie";



$requete = "SELECT DISTINCT LastName,FirstName,OrderID,CompanyName
FROM employees
INNER JOIN orders
ON employees.EmployeeID = orders.EmployeeID
INNER JOIN customers
ON customers.CustomerID=orders.CustomerID"; 

// echo "requête";

$result = $idcom->query($requete);
// echo "récup requête";

if ($result) {
 
//->num_rows > 0
   echo('<table border="1">
  <colgroup width =150 span=12></colgroup>
	<thead> <!-- En-tête du tableau -->
  <tr>
  <th>NOM</th>
  <th>PRENOM</th>
  <th>NUM DE COMMANDE</th>
  <th>CLIENT</th>
  </tr>
  </thead>
  <tbody> <!-- Corps du tableau --> 
  ');
    while($donnees = $result->fetch_assoc()) {
      echo ('<tr>');
       echo ('<td>'.$donnees['LastName'].'</td>'); // ce sont les valeurs qui sont rentrées de chaque cellule
       echo ('<td>'.$donnees['FirstName'].'</td>'); // ce sont les valeurs qui sont rentrées de chaque cellule
       echo ('<td>'.$donnees['OrderID'].'</td>'); // ce sont les valeurs qui sont rentrées de chaque cellule
       echo ('<td>'.$donnees['CompanyName'].'</td>'); // ce sont les valeurs qui sont rentrées de chaque cellule

  echo('</tr>');
    }
  echo('<tbody>');
       echo('</table>');
      } 
   
$idcom->close(); 

  ?>
  
  </body>
</html>