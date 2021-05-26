<?php
  
  include("connexion.php");

    $login = $_POST['login'] ;
    $mdp1 = $_POST['mdp1'];
     $mdp2 = $_POST['mdp2'];


$pdo = getConnection();
$sql = "INSERT INTO membres (login, password) VALUES (?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$login, $mdp1]);

header('Location: http://localhost/mini-blog-php/espace-membre.php');
exit();
?>