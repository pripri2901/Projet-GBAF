<?php
require_once("config/articles.php");
require_once("config/comments.php");

if(!isset($_GET['id']) OR !is_numeric($_GET['id']))
    header('Location: accueil.php');
else
{
        extract($_GET);
        $id = strip_tags($id);

        require_once('config/articles.php');

        if(!empty($_POST))
         {
             extract($_POST);
             $errors = array();

             $author = strip_tags($author);
             $comment = strip_tags($comment);

             if(empty($author))
                array_push($errors, 'Entrez un pseudo');

            if(empty($comment))
                array_push($errors, 'Entrez un commentaire');

            if(count($errors) == 0)
            {
               $comment = addComment($id, $author, $comment);
               
               $success = 'Votre commentaire à été publié';

               unset($author);
               unset($comment);
            }
         }

        $article = getArticle($id);
        $comment = getComments($id);

}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $article->title ?></title>

        
        <link rel="stylesheet" href="style.css">
        
    </head>
 
        <body>
            <a href="espace-membre.php">Retour aux articles</a>

            <div class="container-fluid">
                <h1><?= $article->title ?></h1>
                <time><?= $article->date ?></time>
                <p><?= $article->content ?></p>

                <hr />

                <?php
                if(isset($sucess))
                    echo $sucess;

                if(!empty($errors)):?>

                    <?php foreach($errors as $error): ?>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="alert alert-danger"><?= $error ?></div>
                        </div>
                    <?php endforeach; ?>

                <?php endif; ?>
                
                <div class="row">
                    <div class="col-md-6">
                        <form action="article.php?id=<?= $article->id ?>" method="post">
                                <p><label for="author">Pseudo :</label><br />
                                <input type="text" name="author" id="author"  value="<?php if(isset($author)) echo $author ?>" class="form-control" /></p>
                                <p><label for="comment">Commentaire :</label><br /></p>
                                <textarea name="comment" id="comment" cols="30" rows="8" class="form-control"></textarea></p>
                                <button type="submit" >Envoyer</button>
                        </form>
                    </div>
                </div>
                

                <h2>commentaire :</h2>

                <?php foreach($comment as $com): ?>
                    <h3><?= $com->author ?></h3>
                <time><?= $com->date ?></time>
                <p><?= $com->comment ?></p>
                <?php endforeach; ?>
            </div>
            
        </body>
</html>