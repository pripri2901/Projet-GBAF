<?php
include('view/header.php');
?>

    <form action="verification.php" method="post">
        <label>Login</label>
        <input type="text" name="login">
        <br>
        <label>Mot de passe</label>
        <input type="password" name="mdp1">
        <br>
        <label>Confirmation mot de passe</label>
        <input type="password" name="mdp2">
        <input type="submit" value="Enregistrer">
    </form>

<?php
include('view/footer.php');
?>