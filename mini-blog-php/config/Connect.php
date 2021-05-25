<?php
/*remplacer les valeurs suivantes par les valeurs
 exactes*/
define ('SERVEUR', "localhost:3306");
define ('LOGIN', "root");
define ('MDP', "root");
define ('BDD', "GBAF");
?>


<?php
$bdd = new PDO('mysql:host=localhost;dbname=GBAF;charset=utf8','root','root');
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>