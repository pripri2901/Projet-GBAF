<?php
include('view/header.php');
include('config/membres.php');

include('config/functions.php');
include('view/header.php');
$articles = getArticles();
?>


<h2>Bienvenue dans l'espace membre</p>

<table>
    <thead>
        <tr>
        
        </tr>
    </thead>    
    <tbody>

    <a href="Paramètres_du_compte.php">paramètres du compte</a>;

<p class="flotte">
<img src="img/GBAF.png" alt="logo" />
</p>
   <div class="container-fluid">
       <h1>Présentation du GBAF et du site </h1>

       <h2>acteurs et partenaires</h2><br />
      

       <?php foreach($articles as $article): ?>
           <h3><?= $article->title ?></h3>
           <img class="logo" src="/mini-blog-php/img/<?php echo $article->logo;?>" alt="" width="150">
           
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
