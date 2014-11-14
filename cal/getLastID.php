<?php
include("../php/connexion.php");
include("../php/loged.php");

$query = mysql_query("SELECT * FROM events ORDER BY id DESC LIMIT 1", $connexion);

if(!$query) {
    echo "Erreur MySQL : ".mysql_error();
} else {
    while($nb=mysql_fetch_array($query)) {
        $reponse['id'] = $nb['id']*2/2;
    }
}

header('Content-Type: application/json');
echo json_encode($reponse);
?>
