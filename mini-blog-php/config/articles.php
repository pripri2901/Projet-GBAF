<?php
require_once('connexion.php');

// FONCTION QUI RECUPERE TOUS LES ARTICLES
function getArticles()
{
    $pdo = getConnection();
    $req = $pdo->prepare('SELECT * FROM articles');
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
    $article = $req->fetchALL(PDO::FETCH_OBJ);
    if(!empty($article)){
        return $article[0];
    }else{
        return null;
    }
}
