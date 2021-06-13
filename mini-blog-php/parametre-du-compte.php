<?php include('view/header.php') ;?>
  
    <main>
      <div class="container">
        <div class="titreForm">
          Paramètre du compte
          </div><br>
      <form >

            
              <label class="aligne">Pseudo</label>
              <input class="form-input form-control" type="text" value="<?= $_SESSION['user']['login']; ?>" required>
            <br>


           
              <label class="aligne">Mot de passe</label>
              <input class="form-input form-control" type="password" name="password" id="password" required>
              <br>
            
           
            
              <label class="aligne">Question secrète</label>
              <select class="Choix multiple" id="question" name="question" required>
                <option value="1">--- Selectionner une question ---</option>
                <option value="Quel est le nom de mon premier animal domestique ?" selected>Votre question : Quel est le nom de mon premier animal domestique ?</option>
                <option value="Quel est le nom de mon premier animal domestique ?">Quel est le nom de mon premier animal domestique ?
                <option value="Quel est le nom du pays que j’aimerais le plus visiter ?">Quel est le nom du pays que j’aimerais le plus visiter ?
                <option value="Quel est le nom du personnage historique que j’admire le plus ?">Quel est le nom du personnage historique que j’admire le plus ?
                <option value="Quelle est la  marque du premier véhicule que j’ai conduit ?">Quelle est la  marque du premier véhicule que j’ai conduit ?
                <option value ="Quelle est votre couleur préférée ?">Quelle est votre couleur préférée ?</option>
                <option value ="Quelle est votre équipe sportive favorite ?">Quelle est votre équipe sportive favorite ?</option>
                <option value ="Quel était le métier de votre grand-père ?">Quel était le métier de votre grand-père ?</option>
              </select></br>
            
              <label class="aligne">Réponse</label>
              <input class="form-input form-control" type="text" id="reponse" name="reponse" value="" required>
            
            <input type="hidden" name="account" value="32">
            <ul class="account center">
             <input id="submit" type="submit" class="btn btn-primary" value="Modifier">
              <a href="espace-membre.php" class="btn btn-link">Annuler</a>
            </ul>
          
        
      </form>
      </div>
    </main>
  </body>
  <?php
    include('view/footer.php');
?>
</html>