<?php
    $pdo = new PDO('mysql:host=localhost;dbname=GBAF;charset=utf8','root','root');

    if(isset($_GET['t'],$_GET['id']) AND !empty($_GET['t']) AND !empty($_GET ['id'])) {
        $getid = (int) $_GET['id'];
        $gett = (int) $_GET['t'];

        $check = $bdd->prepare('SELECT id FROM articles where id = ?');
        $check->execute(array($getid));

        if($check->rowCount() == 1) {
            if($gett == 1) {
                $ins = $bdd->prepare('INSERT INTO likes (id_article) VALUES (?)');
                $ins->execute(array($getid));
            } elseif($gett == 2){
                $ins = $bdd->prepare('INSERT INTO dislikes (id_article) VALUES (?)');
                $ins->execute(array($getid));
            }
             header('location: http://localhost/mini-blog-php/article.php?id='.$getid);
        } else {
            exit ('Erreur fatale');
        }
    } else {
        exit ('Erreur fatale. <a href="http://localhost/mini-blog-php/article/">Revenir à l\'accueil');
    }