<?php
// FONCTION QUI RECUPERE TOUS LES ARTICLES
function getArticles()
{
    require('config/connect.php');
    $req = $bdd->prepare('SELECT id, title FROM articles ORDER BY id DESC');
    $req->execute();
    $data = $req->fetchALL(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}
//FONCTION QUI RECUPERE UN ARTICLE
function getArticle($id)
{
    require('config/connect.php');
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
}