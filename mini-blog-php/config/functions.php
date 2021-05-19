<?php
// FONCTION QUI RECUPERE TOUS LES ARTICLES
function getArticles()
{
    require('config/connect.php');
    $req = $bdd->prepare('SELECT id, title, date FROM articles ORDER BY id DESC');
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
    $req->closecursor();
}
function addComment($articleId, $author, $comment)
{
    require('config/connect.php');
    $req = $bdd->prepare('INSERT INTO comments (articleId, author, comment, date) VALUES
    (?, ?, ?, NOW()');
    $req->exectute(array($articleId, $author, $comment));
    $req->closeCursor();
}