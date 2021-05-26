<?php
require_once('config/functions.php');
include('view/header.php');

$articles = getArticles();
?>

    Connexion espace membre :<br />
    <form action="login.php" method="post">
        <input type="text" name="login" value=""><br />
        <input type="password" name="password" value=""><br />
        <input type="submit" name="connexion" value="connexion">
    </form>

    <a href="inscription.php">S'inscrire</a>

     <p class="flotte">
 <img src="img/GBAF.png" alt="logo" />
    </p>
        <div class="container-fluid">
            <h1>Présentation du GBAF et du site </h1>

            <h2>acteurs et partenaires</h2><br />
           

            <?php foreach($articles as $article): ?>
                <h3><?= $article->title ?></h3>
                <img class="logo" src="/mini-blog-php/img/<?php echo $article->logo;?>" alt="" width="150">
                
            <br /><br />
                <a href="article.php?id=<?= $article->id ?>">Lire la suite</a>
            <?php endforeach; ?>
        </div>
        
        <?php include('view/footer.php'); ?>