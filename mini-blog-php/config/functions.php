<?php
  require('Connexion.php');

// FONCTION QUI RECUPERE TOUS LES ARTICLES
function getArticles()
{
    $pdo = getConnection();
    $req = $pdo->prepare('SELECT * FROM articles ORDER BY id DESC');
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
// FONCTION QUI AJOUTE UN COMMENTAIRE EN BDD
function addComment($articleId, $author, $comment)
{
    $bdd = getConnection();
    $req = $bdd->prepare('INSERT INTO comments (articleId, author, comment, date) VALUES
    (?, ?, ?, NOW())');
    $req->execute(array($articleId, $author, $comment));
    $req->closeCursor();
}
// FONCTION QUI RECUPERE LES COMMENTAIRES D'UN ARTICLE
function getComments($id)
{
    $bdd = getConnection();
    $req = $bdd->prepare('SELECT * FROM comments WHERE articleId = ?');
    $req->execute(array($id));
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}