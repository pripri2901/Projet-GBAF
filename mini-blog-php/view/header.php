<?php session_start(); ?>
<html>
<head> 
    <div class=Nom>
<h4>connecté en tant que <?= $_SESSION['user']['login']; ?></h4>
</div>
    <meta http-equiv="content-Type" content="text/html; charset=UTF-8"/>
    <title>Page principale du site</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="/mini-blog-php/css/style.css">
</head>
<body>
<header>
    <p class="flotte">
    <img src="img/GBAF.png" alt="logo" />
    </p>
<div>
   
    <a href="espace-membre.php">Liste des acteurs</a>
    <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])) : ?>
        <a href="parametre-du-compte.php">Paramètres</a>
        <a href="deconnexion.php">Déconnexion</a>
    <?php endif; ?>
</div>
</header>
</body>
</html>