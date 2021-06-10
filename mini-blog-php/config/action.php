
<?php
session_start();

include('articles.php');
include('likes.php');


if(isset($_GET['t'],$_GET['id']) AND !empty($_GET['t']) AND !empty($_GET ['id'])) {
   $getid = (int) $_GET['id'];
   $gett = (int) $_GET['t'];

   //Je récupère l'id de l'user courant connecté.
   $idConnectedUser = $_SESSION['user']['id'];
   
   //récupération de l'article en base qui va recevoir un like ou un dislike
   $article = getArticle($getid);


   //si je recupéère bien un article.
   if(!empty($article)) {

      // si gett == 1 alors c'est un like
      if($gett == 1) {
         //A déjà liké ou non.
         $aDejaUnlike =  aDejaUnLikeSurLarticle($article->id, $idConnectedUser);

         //S'il n'y a pas déjà un like alors je peux en rajouter un 
         if(!$aDejaUnlike){
            ajouteUnLikeALarticle($article->id, $idConnectedUser);
         }


      // si gett == 2 alors c'est un dislike
      } elseif($gett == 2){
         $aDejaUnDislike = aDejaUnDislikeSurLarticle($article->id, $idConnectedUser);

         //S'il n'y a pas déjà un disike alors je peux en rajouter un 
         if(!$aDejaUnDislike){
            ajouteUnDislikeALarticle($article->id, $idConnectedUser);
         }
      }
      header('location: http://localhost/mini-blog-php/article.php?id='.$getid);
   }
} else {
   exit ('Erreur fatale. <a href="http://localhost/mini-blog-php/article/">Revenir à l\'accueil');
}
