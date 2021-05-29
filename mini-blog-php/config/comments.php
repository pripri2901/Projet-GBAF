<?php
require_once('connexion.php');

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
