<?php
require_once('config/functions.php');

$articles = getArticles();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>GBAF</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">

    <body>
        <div class="container-fluid">
            <h1>Articles : </h1>

            <?php foreach($articles as $article): ?>
                <h2><?= $article->title ?></h2>
            <time><?= $article->date ?></time>
            <br /><br />
                <a href="article.php?id=<?= $article->id ?>" class="btn btn-primary">Lire la suite</a>
            <?php endforeach; ?>
        </div>
        
    </body>
</html>
