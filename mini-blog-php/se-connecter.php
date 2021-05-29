<?php
session_start();
require_once("config/membres.php");
$login = $_POST['login'];
$mdp = $_POST['mdp'];

if(isset($login) && !empty($login) && isset($mdp) && !empty($mdp) ){
    $result = seConnecter($login, $mdp);
    if(count($result) >  0 ){
        $_SESSION['user']['id'] = $result[0]['id'];
        $_SESSION['user']['login'] = $result[0]['login'];
        header('Location: espace-membre.php');
        exit();
    }

}
