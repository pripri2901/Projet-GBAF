<?php
// on inclue un fichier contenant nom_de_serveur, nom_bdd, login et password d'accès à la bdd mysql

include ("connect.php");

//on vérifie que le visiteur à correctement saisi puis envoyé le formulaire

if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pdw']) && !empty($_POST['pdw'])) {

    // on se connecte à la bdd

$connexion = mysql_connect (SERVEUR, LOGIN, MDP);

if (!$connexion) {echo "LA CONNEXION AU SERVEUR MYSQL A ECHOUE\n"; exit;}
mysql_select_db (BDD); print "connexion BDD reussie ";echo "br/>";

//on parcourt la bdd pour chercher l'existence du login  mot et mot de passe saisis par l'internaute 
//et on range le résultat dans le tableau $data

$sql = 'SELECT count(*) FROM membres WHERE id="'.mysql_escape_string(md5($_POST['login'])).'"
AND md5="'.mysql_escape_string(md5($_POST['pdw'])).'"';
$req = mysql_query($sql) or die ('Erreur SQL !<br />'.$sql. '<br />'.mysql_error());
$data = mysql_fetch_array($req);
mysql_free_result($req);mysql_close();

if ($data[0] == 1){
session_start ();
$_SESSION['login'] = $_POST['login'];
header('location: espace-mebre.php');
exit ();}

// Le visiteur a saisi un mauvais login ou un mot de passe , on ne trouve aucune réponse

elseif ($data[0] == 0) {
$erreur = 'Login ou mot de passe non reconnu !';echo $erreur;
echo"<br/><a href=\"accueil.php\">Accureil</a>";exit();}
 
// Sinon problème dans la base de donnée

else {
    $erreur = 'Plusieurs membres ont<br/>les memes login et mot de passe !' ;echo $erreur;
    echo"<br/><a href=\"accueil.php\">accueil</a>";exit();}}
else {
    $erreur = 'Erreir de saisie !<br/> Au moins un des champs est vide !'; echo $erreur;
    echo"<br/><a href=\"accueil.php\">Accueil</a>";exit ();}}
    ?>