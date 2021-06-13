<?php
include('view/header.php');
?>

    <form action="verification.php" method="post">
      <div class="form">
          <div class=formulaire>
        <label>Login</label>
        <input type="text" name="login">
        <br>
        <label>Mot de passe</label>
        <input type="password" name="mdp1">
        <br>
        <label>Confirmation mot de passe</label>
        <input type="password" name="mdp2">
        

        <div class="QuestionS">
              <label for="question">Question secrète</label>
              <select class="form-input form-select form-control" id="question" name="question" required>
                <option value="">--- Selectionner une question ---</option>
                <option value="Quel est le nom de mon premier animal domestique ?" selected>Votre question : Quel est le nom de mon premier animal domestique ?</option>
                <option value="Quel est le nom de mon premier animal domestique ?">Quel est le nom de mon premier animal domestique ?
                <option value="Quel est le nom du pays que j’aimerais le plus visiter ?">Quel est le nom du pays que j’aimerais le plus visiter ?
                <option value="Quel est le nom du personnage historique que j’admire le plus ?">Quel est le nom du personnage historique que j’admire le plus ?
                <option value="Quelle est la  marque du premier véhicule que j’ai conduit ?">Quelle est la  marque du premier véhicule que j’ai conduit ?
                <option value ="Quelle est votre couleur préférée ?">Quelle est votre couleur préférée ?</option>
                <option value ="Quelle est votre équipe sportive favorite ?">Quelle est votre équipe sportive favorite ?</option>
                <option value ="Quel était le métier de votre grand-père ?">Quel était le métier de votre grand-père ?</option>
              </select>

                <p class="card-text">
                    <label for="reponse">Réponse</label>
                    <input class="form-input form-control" type="text" id="reponse" name="reponse" value="kinook" required>
                </p>
                <input type="submit" value="Enregistrer">
    </form>
      </div>
    </div>
    
<?php
include('view/footer.php');
?>