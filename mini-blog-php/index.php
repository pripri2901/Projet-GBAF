<link rel="stylesheet" href="/mini-blog-php/css/style.css">
        <p class="flotte">
    <img src="img/GBAF.png" alt="logo" />
            </p>
    <form class="container" action="se-connecter.php" method="post">
        <div class=titreForm>
            Connexion espace membre :
        </div><br>

        <label class="aligne">Login</label>
        <input type="text" name="login" value=""><br />
        <label class="aligne">mot de passe</label>
        <input type="password" name="mdp" value=""><br />
        <button type="submit" name="connexion" action="se-connecter.php">Connexion</button>
        <button href="inscription.php">inscription</button>
        <button class=mdp href="mdp-oublier.php">mot de passe oublié</button>
    </form>
    </div>
</div>

<?php
include('view/footer.php');

?>