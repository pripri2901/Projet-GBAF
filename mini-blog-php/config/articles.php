<?php
require_once('connexion.php');

// FONCTION QUI RECUPERE TOUS LES ARTICLES
function getArticles()
{
    $pdo = getConnection();
    $req = $pdo->prepare('SELECT * FROM articles'); // where articles.id = membre_article.article_id ORDER BY articles.id DESC
    $req->execute();
    $data = $req->fetchALL(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}
//FONCTION QUI RECUPERE UN ARTICLE
function getArticle($id)
{
    $bdd = getConnection();
    $req = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $req->execute(array($id));
    if($req->rowCount() == 1)
    {
       $data = $bdd->prepare('SELECT*FROM articles WHERE id = ?');
       $req->execute(array($id));
       if($req->rowCount() == 1)
        {
            $data = $req->fetch(PDO::FETCH_OBJ);
            return $data;
        }

    }
    else
        header('Location:index.php');
    $req->closecursor();
}
