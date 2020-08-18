<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Mon formulaire</title>
    <link rel="stylesheet" href=styles.css>
  </head>
  
  <body>
  <header></header>
  <h1>  Mon premier formulaire</h1>
<fieldset id="main">
<legend>Notre formulaire :</legend>
<form action="<?= $_SERVER['PHP_SELF'] ?> " method="post"
enctype="application/x-www-form-urlencoded" > <!--à voir -->
<label>Nom:</label>
<input type="text" name="nom" value="VotreNom"><br><br>
<label>Prénom:</label>
<input type="text" name="prenom" value="votrePrénom" ><br><br>
<label>Date:</label>
<input type="date" name="ladate" ><br><br>
<fieldset>
<legend>Lieu de naissance: </legend>
<input type="radio" name="lieu" value="Saint Denis">Saint Denis
<input type="radio" name="lieu" value="Reste du monde">Reste du monde
</fieldset>
<br><br>
<label>Adresse postale:</label><textarea rows="2" col="30" name="adressepostale" value="VotreAdresse"></textarea>
<br><br>
<label>Code postal:</label><input type="text" pattern="[0-9]{5}" placeholder="Saissisez 5 chiffres maximum" name="cp" value="94000">
<br><br>
<label>E-mail:</label><input type="email" name="email" value="remiafpa70@gmail.com">
<br><br>
<label>Site:</label><input type="url" name="site" value="http://www.Votre.page.Web.com">
<br><br>
<label>Téléphone:</label>
<input type="text" name="telephone" pattern="0[6-7][0-9]{8}" value="0658898531" placeholder="Exemple : 0602030405 sans espace ni tirets" >
<br><br>
<label>Semestre:</label> 
<select name="semestre" size = 3>
         <option>S1</option>
         <option selected>S2</option> <!--Selection par défaut du choix S2 -->
         <option>S3</option>
         <option>S4</option>
      </select>   
<br><br>
<label>Niveau en HTML:</label>
<input type="range" name="niveauhtml" value="" max="10" min="0" step="1">
<br><br>
<fieldset id="fconnaissances">
<legend>Connaissances: </legend>
<input type="checkbox" checked="checked" name="connaissances[]" value="HTML">HTML <!--Selection par défaut du choix HTML -->
<input type="checkbox" name="connaissances[]" value="CSS">CSS
<input type="checkbox" name="connaissances[]" value="Formulaires">Formulaires
<input type="checkbox" name="connaissances[]" value="JavaScript">JavaScript
</fieldset>
<br><br>
<input type="submit" name="valider" value=" Envoyer "> &nbsp&nbsp&nbsp
<input type="reset" value="Annuler">
</fieldset>
</form>
<?php


if(isset($_POST['nom']) 
&& isset($_POST['prenom'])
&& isset($_POST['ladate'])
&& isset($_POST['lieu'])
&& isset($_POST['adressepostale'])
&& isset($_POST['cp'])
&& isset($_POST['email'])
&& isset($_POST['site'])
&& isset($_POST['telephone'])
&& isset($_POST['semestre'])
&& isset($_POST['niveauhtml'])){

  //L'objet du mail
  $objet = "Confirmation de votre message sur GeekTeam";

  $texte ="Nous avons bien reçu votre message \n";
  $texte .= "Votre nom est : ".$_POST['nom']."\n";
  $texte .= "Votre prénom est : ".$_POST['prenom']."\n";
  $texte .= "Votre date de naissance est : ".$_POST['ladate']."\n";
  $texte .= "Votre adresse postale est : ".$_POST['adressepostale']."\n";
  $texte .= "Votre code postale est : ".$_POST['cp']."\n";
  $texte .= "Votre email est : ".$_POST['email']."\n";
  $texte .= "Votre site est : ".$_POST['site']."\n";
  $texte .= "Votre téléphone est : ".$_POST['telephone']."\n";
  $texte .= "Votre semestre est : ".$_POST['semestre']."\n";
  $texte .= "Votre niveau de connaissnce est : ".$_POST['niveauhtml']."\n";
  $texte .= "Cordialement \n";
  $texte .= "L'équipe Geek Team";

  $corps = '<html>
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
  if(mail($_POST['email'], $objet, $corps, $entete)){
      
      echo "Super votre message a bien été envoyé";
  }
  else{ echo "désolé votre message n'a pas été envoyé, Merci d'essayer à nouveau";}
}
?>

  </body>
  </html>

<br>
<br>
<br>
<footer> Formulaire réalisé dans le cadre du TP 2 de la formation de développeurs intégrateurs et codeurs web</footer>
   
  </body>
  
</html>