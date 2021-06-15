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
function récupération($login) {
    $pdo = getConnection();
    $sql = "SELECT * from membres where login =?";
    $query= $pdo->prepare($sql);
    return $query->execute([$login]);
}

function modification($login, $mdp , $question , $response){
    $pdo = getConnection();
    $sql = "UPDATE membres SET mdp=? WHERE login=? AND question=? AND response=?";
    $query = $pdo->prepare($sql);
    return $query->execute([$login , md5($mdp) , $question , $response]);
}


?>
