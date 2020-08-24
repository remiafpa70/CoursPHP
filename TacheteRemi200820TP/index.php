<?php
// session_start();
// if(isset($_SESSION['pseudo']) && isset($_SESSION['id_membre'])){
//     $id_membre = $_SESSION['id_membre'];

?>

<!DOCTYPE html>  <!--type de langage ici html et éventuellemnt sa version-->
<html lang="fr">
>
<head>  <!--entête du document, partie non visible ou l'on peut cacher des informations que l'on ne veut pas voir à l'écran comme le description de notre site-->
    <meta charset="utf-8"/>  <!--type de traitemenent du texte pour préciser que nous souhaitons régler l'encodage des caractères sur UTF-8-->
    <title>TACHETETOU</title>  <!--titre de l'onglet de la barre de recherche-->
    <meta name="description" content="crétion de tableaux automatiques">  <!--permet une prise le référencement par les moteurs de recherche-->
    <link rel="stylesheet" href="styles.css">  <!--permet de faire un lien avec la page en question-->
</head>

<body>   <!--définit, cette fois, le corps de votre document, c'est la partie visible de votre page web, c'est à cet endroit que nous mettrons du texte, des images, et toute autre information-->
<h1>Bienvenu chez TACHETETOU</h1> <!--titre de la page (taille 1) par convention & seul titre pour le référencement-->
        <p>mon premier paragraphe de texte qui l'accompagne !!</p>  <!--paragraphe (nous pouvons en mettre autant qu'on le souhaite !)-->
        
        
        <nav>  <!--permet de prévoir un emplacement (ou une zone) pour votre menu de navigation. En général, nous y retrouvons des liens.-->
             
        </nav>
         
        <section><!--permettant de prévoir un emplacement (ou une zone) pour le contenu de votre site web. Nous y retrouverons plutôt un titre, du texte, des images, etc-->
            <div><!--permettant de prévoir un emplacement (ou une zone) quelconque de votre site web. L’élément div peut regrouper tout et n’importe quoi, alors que l’élément section a plutôt été pensé pour regrouper du contenu apparenté-->
                <span><!--permet de prévoir un petit emplacement secondaire, on l'utilise souvent à l'intérieur d'une autre zone. L’élément span peut regrouper tout et n’importe quoi, il s'agit d'une zone secondaire d'information-->
                 
                </span>
            </div>
        </section>
         
        <article><!--permet de prévoir une zone de texte-->
             
        </article>
         
        <footer>
         
        </footer>
             
        </nav>
         
        <section>
            <div>
                <span>
                 
                </span>
            </div>
        </section>
         
        <article>
             
        </article>
         

        <!-- <header></header>
<h1> BIENVENU CHEZ TACHETE</h1>
<fieldset id="main">
    <legend>Notre formulaire :</legend>
    <form action="index.php" method="post">
    <a href="inscription.php">pour vous inscrire c'est par ici</a><br><br> 
    <a href="deconnexion.php">Déconnexion</a><br><br>
        <label>Nom:</label>
        <input type="text" name="nom" value="MINKOUE OBAME"><br><br>
        <label>Prénom:</label>
        <input type="text" name="prenom" value="Anouchka"><br><br>
        <label>Date:</label>
        <input type="date" name="ladate"><br><br>
        <fieldset>
            <legend>Lieu de naissance:</legend>
            <input type="radio" name="lieu" value="Saint Denis">Saint Denis
            <input type="radio" name="lieu" value="Reste du monde">Reste du monde
        </fieldset>
        <br><br>
        <label>Adresse postale:</label><textarea rows="2" col="30" name="adressepostale"
                                                 value="">Je suis ici et là...</textarea>
        <br><br>
        <label>Code postal:</label><input type="text" pattern="[0-9]{5}" placeholder="Saissisez 5 chiffres maximum"
                                          name="cp" value="76190">
        <br><br>
        <label>E-mail:</label><input type="email" name="email" value="example@gmail.com">
        <br><br>
        <label>Site:</label><input type="url" name="site" value="https://www.google.com">
        <br><br>
        <label>Téléphone:</label>
        <input type="text" name="telephone" pattern="0[6-7][0-9]{8}" value="0658898531"
               placeholder="Exemple : 0602030405 sans espace ni tirets">
        <br><br>
        <label>Semestre:</label>
        <select name="semestre" size=3>
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
            <legend>Connaissances:</legend>
            <input type="checkbox" checked="checked" name="connaissances[]" value="HTML">HTML
            <!--Selection par défaut du choix HTML -->
            <input type="checkbox" name="connaissances[]" value="CSS">CSS
            <input type="checkbox" name="connaissances[]" value="Formulaires">Formulaires
            <input type="checkbox" name="connaissances[]" value="JavaScript">JavaScript
        </fieldset>
        <br><br>
        <input type="submit" name="valider" value=" Envoyer "> &nbsp&nbsp&nbsp
        <input type="reset" value="Annuler"> -->
    </form>
</fieldset>
<br>



<footer> Site web édité par la marque REMS</footer>
<!--permet de prévoir un emplacement (ou une zone) pour le bas de votre site web. En général, nous y retrouvons des liens administratifs (type: mentions légales, plan du site, Conditions Générales, etc), un copyright, etc.-->
</body>
</html>
