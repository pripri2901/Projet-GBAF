<?php
require_once('config/membres.php');

$login = $_POST['login'];
$mdp1 = $_POST['mdp1'];
$mdp2 = $_POST['mdp2'];
$question = $_POST['question'];
$response = $_POST['réponse'];

if(isset($login) && !empty($login) && isset($mdp1) && !empty($mdp1) && isset($mdp2) && !empty($mdp2) && isset($question) && !empty($question) && isset($response) && !empty($response)){

    $success = inscrire($login, $mdp1, $question , $response);
    if($success){
        header('Location: index.php');
    }else{
        header('Location: erreur-inscription.php');
        
    }

}else{
    header('Location: erreur-inscription.php');
}


?>