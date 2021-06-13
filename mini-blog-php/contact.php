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
    <div class=contact>
      <h2>Contact</h2>
    <form class=formulaire>
      <label >Pseudo</label>
      <input type="text" name="login">
      <br>
      <label>Email</label>
      <input type="Email" name="email">
      <br>
      <label>Objet</label>
      <input type="Objet" name="objet">
      <br>
      <label>Votre message</label>
      <input type="Votre message" name="message">
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