<?php
include('view/header.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-Type" content="text/html; charset=UTF-8"/>
    <title>Contact </title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="/mini-blog-php/css/style.css">
    
  </head>
  <body>
    <div class=container>
      <div class=titreForm>
    Contact
      </div><br>
    <form >
      <label class="aligne">Pseudo</label>
      <input type="text" name="login">
      <br>
      <label class="aligne">Email</label>
      <input type="Email" name="email">
      <br>
      <label class="aligne">Objet</label>
      <input type="text" name="objet">
      <br>
      <label class="aligne">Votre message</label>
      <input type="text" name="message">
      </form>
      </br>
      <button type="submit" >Envoyer</button>
      <a href="espace-membre.php" class="btn btn-link">Annuler</a>
      </div>
  </body>
 
  <?php
    include('view/footer.php');
?>
</html>