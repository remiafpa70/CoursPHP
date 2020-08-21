<?php
session_start();
if(isset($_SESSION['pseudo']) && isset($_SESSION['id_membre'])){
    $id_membre = $_SESSION['id_membre'];

?>

<!DOCTYPE html> <!--Permettre de visualiser quel employé a passé quelles commandes et à quels clients.
-->
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PRODUIT COMMANDE PAR QUI ?</title>
  </head>
  
  <body>

  <header></header>
  <h1>Pour quel produits ?</h1>
  <?php 
       echo "Bienvenue à toi ".$_SESSION['pseudo'] ;
    ?> 
  <hr>
  <form method = "post" action="listeProduitsClients.php">
  <fieldset>
       <legend>RECHERCHE DU PRODUIT</legend>
       <label>Saisissez le produit</label>
       <input type="text" name="ProductName" value=""> 

       <input type="submit" name ="modif" value="Rechercher et visualiser">

   </fieldset>
</form>
      <br><a href="hubPages.php">Page d'acceuil</a><br>
       <br><a href="deconnexion.php">Déconnexion</a><br><br>
  <?php



}
else {echo "Vous n'êtes pas autorisé à visiter cette page <br/>";
    echo "<a href = \"connexion.php\">Merci de vous connecter</a> ";}
?>

<?php
//Inclusion des paramètres de connexion
include_once("myparam.inc.php"); // inclus le fichier"x"
// echo "connexion avec myparam.inc.php ok";


$idcom = new mysqli(MYHOST,MYUSER,MYPASS, 'categories'); // bbd MySQL
// echo "test connexion avec bbd";

if (!$idcom) 
{
echo "Connexion impossible à la base";
exit(); 
}
if (!empty($_POST['ProductName']))
{
// echo "connexion bbd établie";
$ProductName = $idcom->escape_string($_POST['ProductName']);
//var_dump($ProductName);

$requete = "SELECT ProductName,CompanyName
FROM customers
INNER JOIN orders
ON customers.CustomerID = orders.CustomerID
INNER JOIN orderdetails
ON orders.OrderID=orderdetails.OrderID
INNER JOIN Products
ON orderdetails.ProductID=products.ProductID
WHERE ProductName='$ProductName'
ORDER BY CompanyName"; 

// echo "requête";

$result = $idcom->query($requete);
// echo "récup requête";

if ($result) {
 
//->num_rows > 0
   echo('<table border="1">
  <colgroup width =150 span=12></colgroup>
	<thead> <!-- En-tête du tableau -->
  <tr>
  <th>COMPAGNIES</th>
   </tr>
  </thead>
  <tbody> <!-- Corps du tableau --> ');
    while($donnees = $result->fetch_assoc()) {
      echo ('<tr>');
       echo ('<td>'.$donnees['CompanyName'].'</td>'); // ce sont les valeurs qui sont rentrées de chaque cellule  
  echo('</tr>');
    }
  echo('<tbody>');
       echo('</table>');
      } 
   
$idcom->close(); 
}
  ?>
  
  </body>
</html>