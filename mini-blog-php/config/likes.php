<?php
require_once('connexion.php');

//Méthode qui sert à ajouter un like à article avec l'user connecté
function ajouteUnLikeALarticle($articleId, $idConnectedUser){
    $pdo = getConnection();
    $ins = $pdo->prepare('INSERT INTO likes (id_article, id_membre) VALUES (?, ?)');
    $ins->execute(array($articleId, $idConnectedUser));
}


//Méthode qui sert à ajouter un dislike à article avec l'user connecté
function ajouteUnDislikeALarticle($articleId, $idConnectedUser){
    $pdo = getConnection();
    $ins = $pdo->prepare('INSERT INTO dislikes (id_article, id_membre) VALUES (?, ?)');
    $ins->execute(array($articleId, $idConnectedUser));
}

//Méthode qui vérifie si l'user a déjà like un article donné
function aDejaUnLikeSurLarticle($articleId, $idConnectedUser)
{
    $pdo = getConnection();
    $req = $pdo->prepare('SELECT * FROM likes WHERE id_article = :id_article AND id_membre = :id_membre'); // where articles.id = membre_article.article_id ORDER BY articles.id DESC
    $req->execute([
        "id_article" => $articleId,
        "id_membre" => $idConnectedUser
    ]);
    $result = $req->fetchALL(PDO::FETCH_OBJ);
    
    // Il n'y pas de liek associé à cet article ET à cet user
    if(empty($result)){
        return false; //non 
    }
    // Il y a déjà un like associé à cet article ET à cet User.
    else{
        return true; //oui
    }

}

//Méthode qui vérifie si l'user a déjà like un article donné
function aDejaUnDislikeSurLarticle($articleId, $idConnectedUser)
{
    $pdo = getConnection();
    $req = $pdo->prepare('SELECT * FROM dislikes WHERE id_article = :id_article AND id_membre = :id_membre'); 
    $req->execute([
        "id_article" => $articleId,
        "id_membre" => $idConnectedUser
    ]);
    $result = $req->fetchALL(PDO::FETCH_OBJ);
    
    // Il n'y pas de dislike associé à cet article ET à cet user
    if(empty($result)){
        return false; //Non pas de dislike
    }
    // Il y a déjà un dislike associé à cet article ET à cet User.
    else{
        return true; // Oui a à un dislike
    }

}

function getNombreLikePourArticle($articleId){
    $pdo = getConnection();
    $req = $pdo->prepare('SELECT * FROM likes WHERE id_article = :id_article');
    $req->execute([
        "id_article" => $articleId
    ]);
    $articles = $req->fetchAll(); 
    $nombreArticles = count($articles);

    return $nombreArticles;
    
}

function getNombreDislikePourArticle($articleId){
    $pdo = getConnection();
    $req = $pdo->prepare('SELECT * FROM dislikes WHERE id_article = :id_article');
    $req->execute([
        "id_article" => $articleId
    ]);
    $articles = $req->fetchAll(); 
    $nombreArticles = count($articles);
    return $nombreArticles;
}