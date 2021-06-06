<?php
include('view/header.php');
require_once('config/articles.php');

if(!isset($_SESSION['user']) || empty($_SESSION['user'])){
    header('Location: index.php');
    exit();
}
$articles = getArticles();


?>


<h2>Bienvenue <?= $_SESSION['user']['login']; ?> dans l'espace membre</h2>

<table>
    <thead>
        <tr>
        
        </tr>
    </thead>    
    <tbody>
    
    <a href="parametre-du-compte.php">paramètres du compte</a>


   <div class="container-fluid">
       <h1>Présentation du GBAF et du site </h1>

       <h2>acteurs et partenaires</h2><br />
      

       <?php foreach($articles as $article): ?>
           <h3><?= $article->title ?></h3>
           <img class="logo" src="/mini-blog-php/img/<?php echo $article->logo;?>" alt="">
           
       <br /><br />
           <a href="article.php?id=<?= $article->id ?>">Lire la suite</a>
       <?php endforeach; ?>
       </div>
   
   
   <?php include('view/footer.php'); ?>
        
        
    </tbody>

</table>



<?php
    include('view/footer.php');
?>
