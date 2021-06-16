<?php

// CONNEXION A LA BDD
function getConnection(){
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=GBAF;charset=utf8','root','root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (Exception $e) {
    var_dump($e->getMessage());die();
    }
}

?>