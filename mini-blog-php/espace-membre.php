<?php
include('view/header.php');
require_once('config/articles.php');

if(!isset($_SESSION['user']) || empty($_SESSION['user'])){
    header('Location: index.php');
    exit();
}
$articles = getArticles();


?>


<table>
    <thead>
    <link rel="stylesheet" href="/mini-blog-php/css/style.css">
        <tr>
        
        </tr>
    </thead>    
    <tbody>
    
   


  
       <h1>Présentation du GBAF et du site </h1>
       <div class="paragraphe">
            <p> Le Groupement Banque Assurance Français (GBAF) est une fédération représentant les 6 grands groupes français :
</br>
<lu>
<li> BNP Paribas</li>
<li>BPCE</li>
<li>Crédt Agricole</li>
<li>Crédit Mutuel-CIC</li>
<li>Société Générale</li>
<li>La Banque Postale</li>
</lu></br>
Même s’il existe une forte concurrence entre ces entités, elles vont toutes travailler de la même façon pour gérer près de 80 millions de comptes sur le territoire national.
Le GBAF est le représentant de la profession bancaire et des assureurs sur tous les axes de la réglementation financière française. Sa mission est de promouvoir l'activité bancaire à l’échelle nationale. C’est aussi un interlocuteur privilégié des pouvoirs publics.
</p>
    </div>
<div class="Bordure">
       <h2>Acteurs et partenaires</h2><br />
      

       <?php foreach($articles as $article): ?>
           <h3><?= $article->title ?></h3>
           <img class="logo" src="/mini-blog-php/img/<?php echo $article->logo;?>" alt="">
           
       <br /><br />
        <div class=LLS>
           <a href="article.php?id=<?= $article->id ?>">Lire la suite</a>
           </div>
       <?php endforeach; ?>
    
   
       </div>
   
   
        
        
    </tbody>

</table>



<?php
    include('view/footer.php');
?>
