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

function inscrire($login, $mdp){
    $pdo = getConnection();
    $sql = "INSERT INTO membres (login, password) VALUES (?,?)";
    $query = $pdo->prepare($sql);
    return $query->execute([$login, md5($mdp)]);
}

function seConnecter($login, $mdp){
    $pdo = getConnection();
    $sql = "SELECT * from membres WHERE login=? AND password=?";
    $query= $pdo->prepare($sql);
    $query->execute([$login, md5($mdp)]);
    return $query->fetchAll();
}