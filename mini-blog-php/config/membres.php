<?php


require_once('connexion.php');

function getMembers()
{
    $pdo = getConnection();
    $query = $pdo->prepare("SELECT * FROM membres");
    $query->execute();
    $members = $query->fetchAll();
    return $members;
}
/*INSCRIPTION */
function inscrire($login, $mdp , $question , $response ){
    $pdo = getConnection();
    $sql = "INSERT INTO membres (login, password, question, réponse) VALUES (?,?,?,?)";
    $query = $pdo->prepare($sql);
    return $query->execute([$login, md5($mdp) , $question , $response]);
}
/* SE CONNECTER */
function seConnecter($login, $mdp){
    $pdo = getConnection();
    $sql = "SELECT * from membres WHERE login=? AND password=?";
    $query= $pdo->prepare($sql);
    $query->execute([$login, md5($mdp)]);
    return $query->fetchAll();
}

/*QUESTION SECRETE & MODIFICATION DE MDP*/
function récupération($login, $question,$response){
    $pdo = getConnection();
    $sql = "SELECT * from membres where login =? AND  question=? AND réponse=?";
    $query= $pdo->prepare($sql);
    $result =  $query->execute([$login, $question, $response]);
    var_dump($result);die();
}

function modification($login, $mdp , $question , $response){
    $pdo = getConnection();
    $sql = "UPDATE membres SET password=? WHERE login=? AND question=? AND réponse=?";
    $query = $pdo->prepare($sql);
    $result =  $query->execute([md5($mdp) , $login , $question , $response]);
}


?>
