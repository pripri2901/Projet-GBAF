<?php session_start(); ?>
<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=UTF-8"/>
    <title>Page principale du site</title>
    <meta name="robots" content="noindex, nofollow">
</head>
<body>
<div>
    <a href="index.php">Accueil</a>
    <a href="espace-membre.php">Espace membre</a>
    <a href="inscription.php">Inscription</a>
    <?php if(isset($_SESSION['user']) && !empty($_SESSION['user'])) : ?>
        <a href="deconnexion.php">Déconnexion</a>
    <?php endif; ?>
</div>
