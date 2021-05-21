<?php
require_once('config/functions.php');

$articles = getArticles();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="content-Type" content="text/html; charset=UTF-8" />
        <title>GBAF</title>
        <link rel="stylesheet" href="style.css">
        <meta name="robots" content="noindex, nofollow">
        
    </head>
    <body>

    Connexion espace membre :<br />
    <form action="connexion.php" method="post">
        login&nbsp;&nbsp;=======><input type="texte" name="login" value=""><br />
        mot de passe&nbsp;==><input type="password" name="pwd" value=""><br />
        <input type="submit" name="connexion" value="connexion">
    </form>

    <a href="inscription.php">S'inscrire</a>


        <img src="img/GBAF.png"/>
        <div class="container-fluid">
            <h1>Présentation du GBAF et du site </h1>

            <h2>acteurs et partenaires</h2><br />
           

            <?php foreach($articles as $article): ?>
                <h3><?= $article->title ?></h3>

                <img class="logo" src="img/CDE.png?=$donnees['logo']?>" alt="">
                
            <br /><br />
                <a href="article.php?id=<?= $article->id ?>">Lire la suite</a>
            <?php endforeach; ?>
        </div>
        
    </body>
</html>