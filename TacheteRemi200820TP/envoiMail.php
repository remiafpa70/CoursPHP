<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Mon formulaire de contact</title>
    <link rel="stylesheet" href=styles.css>
  </head>
  
  <body>
  <header></header>
  <h1> Bienvenu sur notre formulaire de contact</h1>
<fieldset id="main">
<legend>Notre formulaire :</legend>

</fieldset>
</form>
<?php


if(isset($_POST['email']) 

&& isset($_POST['pseudo'])){

  //L'objet du mail
  $objet = "Confirmation de votre message sur GeekTeam";

  $texte ="Nous avons bien reçu votre message \n";
  $texte .= "Votre nom est : ".$_POST['pseudo']."\n";
  $texte .= "Votre prénom est : ".$_POST['email']."\n";

  $texte .= "Cordialement \n";
  $texte .= "L'équipe Geek Team";

  $message = '<html>
  <head>
  <title>Envoi de mail HTML</title>
  </head>
  <body>
  <h1>La bonne nouvelle du mois</h1>
  <b>Sortie de PHP 7 version finale!</b>
  <img src=http://www.funhtml.com/php5/C12/php.gif />
  <p>Charger un installeur pour une utilisation en local<br />
  <a href=http://www.mamp.info>Le site MAMP pour Mac</a><br />
  <a href=http://www.wampserver.com>Le site Wampserver pour Windows</a>
  </p>
  
  </body>
  </html>';

  //Ecriture des entête
  $entete = 'MIME-Version: 1.0'."\n";
  $entete .= 'Content-Type: text/html;charset=utf-8'."\n";
  $entete .= "From: Geek Team <minkoueobamea@gmail.com>";
  //$entete .= "cc: contact@geekteam.fr";


  //Fonction mail qui permet l'envoie d'emails
  if(mail($email, $objet, $message, $entete)){
      
      echo "Super votre message a bien été envoyé";
  }
  else{ echo "désolé votre message n'a pas été envoyé, Merci d'essayer à nouveau";}

?>

  </body>
  </html>

<br>
<br>
<br>
<footer> Formulaire réalisé dans le cadre du TP 2 de la formation de développeurs intégrateurs et codeurs web</footer>
   
  </body>
  
</html>