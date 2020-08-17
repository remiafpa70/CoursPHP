<!DOCTYPE html>
<html>
    <head>
        <title>Ma page html</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
    <form action="<?= $_SERVER['PHP_SELF'] ?> " method="post"
enctype="application/x-www-form-urlencoded" >
<fieldset>
<legend>Contactez-nous</legend>
<table border="0" >
<tr>
<td>Votre prénom</td>
<td><input type="text" name="prenom" size="40" maxlength="256" /></td> 
</tr>
<tr>
<td>E-mail</td>
<td><input type="text" name="email" size="40" maxlength="256" /></td> 
</tr>
<tr>
<td>Sujet</td>
<td><input type="text" name="sujet" size="40" maxlength="256" /></td> 
</tr>
<tr>
<td>Message</td>
<td><textarea name="message"></textarea></td> 
</tr>

<tr >
<td colspan="2">&nbsp;&nbsp;<input type="submit" name="envoi" value="
Envoyer " /></td>
</tr>
</table>
</fieldset>
</form>
<?php 
//Ici on vérifie que les valeurs des champs du formulaire existent avec la fonction isset()
if(isset($_POST['prenom']) 
&& isset($_POST['email']) 
&& isset($_POST['sujet']) 
&& isset($_POST['message'])){

    //L'objet du mail
    $objet = "Confirmation de votre message sur GeekTeam";

    $texte ="Nous avons bien reçu votre message \n";
    $texte .= "Votre prénom est : ".$_POST['prenom']."\n";
    $texte .= "Votre sujet est : ".$_POST['sujet']."\n";
    $texte .= "Votre message est : ".$_POST['message']."\n";
    $texte .= "Cordialement \n";
    $texte .= "L'équipe Geek Team";

    //Ecriture des entête
    $entete = "From: minkoueobamea@gmail.com";
    //$entete .= "cc: contact@geekteam.fr";


    //Fonction mail qui permet l'envoie d'emails
    if(mail($_POST['email'], $objet, $texte, $entete)){
        
        echo "Super votre message a bien été envoyé";
    }
    else{ echo "désolé votre message n'a pas été envoyé, Merci d'essayer à nouveau";}
}
?>

    </body>
    </html>