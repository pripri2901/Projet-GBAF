<?php
include('view/header.php');?>
<div class="form">
Connexion espace membre :
    <form action="se-connecter.php" method="post">
        <input type="text" name="login" value=""><br />
        <input type="password" name="mdp" value=""><br />
        <input type="submit" name="connexion" value="connexion">
    </form>
</div>

<?php
include('view/footer.php');

?>