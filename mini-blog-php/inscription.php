<link rel="stylesheet" href="/mini-blog-php/css/style.css">
<p class="flotte">
    <img src="img/GBAF.png" alt="logo" />
            </p>
    <form action="verification.php" method="post">
      
          <div class=container>
          <div class="titreForm">
        Inscription
         </div><br>
            <form>
        <label class="aligne">Login</label>
        <input type="text" name="login">
        <br>
        <label class="aligne">Mot de passe</label>
        <input type="password" name="mdp1">
        <br>
        <label class="aligne">Confirmation mot de passe</label>
        <input type="password" name="mdp2">
        

      
              <label class="aligne">Question secrète</label>
              <select class="question" id="question" name="question" required>
                <option value="">--- Selectionner une question ---</option>
                <option value="Quel est le nom de mon premier animal domestique ?" selected>Quel est le nom de mon premier animal domestique ?</option>
                <option value="Quel est le nom du pays que j’aimerais le plus visiter ?">Quel est le nom du pays que j’aimerais le plus visiter ?</option>
                <option value="Quel est le nom du personnage historique que j’admire le plus ?">Quel est le nom du personnage historique que j’admire le plus ?</option>
                <option value="Quelle est la  marque du premier véhicule que j’ai conduit ?">Quelle est la  marque du premier véhicule que j’ai conduit ?</option>
                <option value ="Quelle est votre couleur préférée ?">Quelle est votre couleur préférée ?</option>
                <option value ="Quelle est votre équipe sportive favorite ?">Quelle est votre équipe sportive favorite ?</option>
                <option value ="Quel était le métier de votre grand-père ?">Quel était le métier de votre grand-père ?</option>
              </select>

                    <label class="aligne">Réponse</label>
                    <input class="réponse" type="text" id="réponse" name="réponse" value="" required>
                
                <input type="submit" value="Enregistrer">
                <button href="espace-membre.php" class="btn btn-link">Retour</button>
    </form>
          </div>  
          
      
    
    
<?php
include('view/footer.php');
?>