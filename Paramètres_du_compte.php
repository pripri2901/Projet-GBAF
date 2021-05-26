<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBAF - Paramètres</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body class="connecter">
    <header>
      <a href="index.php"><img src="img/GBAF.png" alt="logo1"></a>
      <ul class="en-tête>
        <li><a href="parametres.php?account=32" class="text-white"><i class="fas fa-cog"></i>Paramètres du compte</a></li>
        <li class="text-white"><a href="deconnexion.php" class="text-white"><i class="fas fa-university"></i>Deconnexion</a></li>
      </ul>
    </header>
    <main>
      <form class="" action="valid_modif_parametres.php" method="post">
                <div class="card border-primary mb-3">
          <div class="card-header">Paramètres du compte</div>
          <div class="card-body">
            <p class="card-text">
              <label for="nom">Nom</label>
              <input class="form-input form-control" type="text" id="nom" name="nom" value="fdsq" required>
            </p>
            <p class="card-text">
              <label for="prenom">Prénom</label>
              <input class="form-input form-control" type="text" id="prenom" name="prenom" value="qdsdf" required>
            </p>
            <p class="card-text">
              <label for="username">Username</label>
              <input class="form-input form-control" type="text" id="username" name="username" value="coucou" required>
            </p>
            <p class="card-text">
              <label for="password">Password</label>
              <input class="form-input form-control" type="password" name="password" id="password" required>
              <label for="checkbox">
              <input type="checkbox" id="checkbox">
              Afficher le mot de passe
              </label>
            </p>
            <div class="form-input form-group">
              <label for="question">Question secrète</label>
              <select class="form-input form-select form-control" id="question" name="question" required>
                <option value="Quel est le nom de mon premier animal domestique ?" selected>Votre question : Quel est le nom de mon premier animal domestique ?</option>
                <option value="">--- Selectionner une question ---</option>
                <option value="Quel est le nom de mon premier animal domestique ?">Quel est le nom de mon premier animal domestique ?
                <option value="Quel est le nom du pays que j’aimerais le plus visiter ?">Quel est le nom du pays que j’aimerais le plus visiter ?
                <option value="Quel est le nom du personnage historique que j’admire le plus ?">Quel est le nom du personnage historique que j’admire le plus ?
                <option value="Quelle est la  marque du premier véhicule que j’ai conduit ?">Quelle est la  marque du premier véhicule que j’ai conduit ?
                <option value ="Quelle est votre couleur préférée ?">Quelle est votre couleur préférée ?</option>
                <option value ="Quelle est votre équipe sportive favorite ?">Quelle est votre équipe sportive favorite ?</option>
                <option value ="Quel était le métier de votre grand-père ?">Quel était le métier de votre grand-père ?</option>
              </select>
            </div>
            <p class="card-text">
              <label for="reponse">Réponse</label>
              <input class="form-input form-control" type="text" id="reponse" name="reponse" value="kinook" required>
            </p>
            <input type="hidden" name="account" value="32">
            <ul class="account center">
              <li><input id="submit" type="submit" class="btn btn-primary" value="Modifier"></li>
              <li><a href="index.php" class="btn btn-link">Annuler</a></li>
            </ul>
          </div>
        </div>
      </form>
      <div class="push"></div>
    </main>
  </body>
</html>