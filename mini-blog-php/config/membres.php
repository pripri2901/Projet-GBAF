<?php

require('Connexion.php');

function getMembers()
{
    $pdo = getConnection();
    $query = $pdo->prepare("SELECT * FROM membres");
    $query->execute();
    $members = $query->fetchAll();
    return $members;
}