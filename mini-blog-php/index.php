<?php
include('view/header.php');?>
<div class="form">

Connexion espace membre :
    <form class="formulaire" action="se-connecter.php" method="post">
        <label class="aligne">Login</label>
        <input type="text" name="login" value=""><br />
        <label class="aligne">mot de passe</label>
        <input type="password" name="mdp" value=""><br />
        <input type="submit" name="connexion" value="connexion">
    </form>
</div>

<?php
include('view/footer.php');

?>