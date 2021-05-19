<?php
if(!isset($_GET['id']) OR !is_numeric($_GET['id']))
    header('Location: index.php');
else
{
        extract($_GET);
        $id = strip_tags($id);

        require_once('config/functions.php');

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

}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $article->title ?></title>
    </head>

        <body>

            <h1><?= $article->title ?></h1>
            <time><?= $article->date ?></time>
            <p><?= $article->content ?></p>

            <hr />

            <?php
            if(isset($sucess))
                echo $sucess;

            if(!empty($errors)):?>

                <?php foreach($errors as $error): ?>
                    <P><?= $error ?></P>
                <?php endforeach; ?>

            <?php endif; ?>

            <form action="article.php?id=<?= $article->id ?>" method="post">
                <p><label for="author">Pseudo :</label><br />
                <input type="text" name="author" id="author" /></p>
                <p><label for="comment">Commentaire :</label><br /></p>
                <textarea name="comment" id="comment" cols="30" rows="8"></textarea></p>
                <button type="submit">Envoyer</button>
            </form>

        </body>
</html>