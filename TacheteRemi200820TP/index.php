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
<h1>BIENVENU CHEZ TACHETETOU</h1> <!--titre de la page (taille 1) par convention & seul titre pour le référencement-->
<?php 
    //    echo "Bienvenue à toi ".$_SESSION['pseudo'] ;
    ?>    
    <h2> CHOISIR UN DES SERVICES PROPOSE</h2>
        <p>mon premier paragraphe de texte qui l'accompagne !!</p>  <!--paragraphe (nous pouvons en mettre autant qu'on le souhaite !)-->
        
        
        <nav>  <!--permet de prévoir un emplacement (ou une zone) pour votre menu de navigation. En général, nous y retrouvons des liens.-->
        <a href="">Accueil</a>
            <a href="">Actualité</a>
            <a href="">Boutique</a>
            <a href="">Panier</a>
            <a href="">Qui sommes nous ?</a>
        </nav>
         
        <section><!--permettant de prévoir un emplacement (ou une zone) pour le contenu de votre site web. Nous y retrouverons plutôt un titre, du texte, des images, etc-->
            <div><!--permettant de prévoir un emplacement (ou une zone) quelconque de votre site web. L’élément div peut regrouper tout et n’importe quoi, alors que l’élément section a plutôt été pensé pour regrouper du contenu apparenté-->
                <span><!--permet de prévoir un petit emplacement secondaire, on l'utilise souvent à l'intérieur d'une autre zone. L’élément span peut regrouper tout et n’importe quoi, il s'agit d'une zone secondaire d'information-->
                 
                </span>
            </div>
        </section>
        <fieldset id="main">
    <legend>Notre formulaire : </legend>
    <form action="index.php" method="post">
 

    <form>
    <a href="commandesClients.php">Visualiser les commandes passées par les employés </a><br><br>
    <a href="listePrix.php">Modifier un prix produit </a><br><br>
    <a href="listeProduitsClients.php">Visualiser les sociétés qui ont commandées un type de produit </a><br><br>

    </form>
    </fieldset>
         
        <article><!--permet de prévoir une zone de texte-->
             
        </article>
         
        <footer>
         
        </footer>
             
       
         
        <section>
            <div>
                <span>
                 
                </span>
            </div>
        </section>
         
        <article>
             
        </article>
        <?php
    // }
    // else {echo "Vous n'êtes pas autorisé à visiter cette page <br/>";
    //       echo "<a href = \"connexion.php\">Merci de vous connecter</a> ";}
    
    ?>
    <?php
    //Inclusion des paramètres de connexion
include_once('myparam.inc.php');

//Connexion au serveur de base de données MySQL
$idcom = new mysqli(MYHOST, MYUSER, MYPASS, "facturation2");

//Test de la connexion
if(!$idcom){
    echo "Connexion impossible";
    exit(); //On arrete tout, on sort du script
}
    
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
       
        $pseudo = $idcom->escape_string($_POST['pseudo']);
        $password = $idcom->escape_string($_POST['password']);

        //Ecrire la requete qui va récupérer le pseudo, password et id_membre
        $requete = "SELECT password, id_membre FROM membres WHERE pseudo = '$pseudo' ";

        $result = $idcom->query($requete);
        
        //$result->fetch_row() c'est-à-dire qu'on applique la fonction fetch_row à $result
        $coord = $result->fetch_row();
        // var_dump($coord);
        if($coord && password_verify($_POST['password'], $coord[0])){
            session_start();
            $_SESSION['id_membre'] = $coord[1];
            $_SESSION['pseudo'] = $_POST['pseudo'];
            
            header('Location: commandesClients.php');
        }
    
    $idcom->close();
       
    }
    else{ echo "Veuillez vous connecter"; 
        echo "</a><br><br><a href=\"deconnexion.php\">Déconnexion</a><br><br>";}
       
    ?>     

            <!-- <option>S3</option>
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
            <!-- <input type="checkbox" name="connaissances[]" value="CSS">CSS
            <input type="checkbox" name="connaissances[]" value="Formulaires">Formulaires
            <input type="checkbox" name="connaissances[]" value="JavaScript">JavaScript
        </fieldset>
        <br><br> -->
        <!-- <input type="submit" name="valider" value=" Envoyer "> &nbsp&nbsp&nbsp
        <input type="reset" value="Annuler"> --> --> -->
    </form>
</fieldset>
<br>



<footer> Site web édité par la marque REMS</footer>
<!--permet de prévoir un emplacement (ou une zone) pour le bas de votre site web. En général, nous y retrouvons des liens administratifs (type: mentions légales, plan du site, Conditions Générales, etc), un copyright, etc.-->
</body>
</html>
