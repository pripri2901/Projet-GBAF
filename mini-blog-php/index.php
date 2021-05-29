<?php
include('view/header.php');?>
Connexion espace membre :<br />
    <form action="se-connecter.php" method="post">
        <input type="text" name="login" value=""><br />
        <input type="password" name="mdp" value=""><br />
        <input type="submit" name="connexion" value="connexion">
    </form>

<?php
include('view/footer.php');

?>