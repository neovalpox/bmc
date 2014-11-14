<?php
extract($_POST);

include("php/connexion.php");
// Suppression utilisateur Aruba //

$queryGetId = mysql_query("SELECT username FROM users WHERE id='$id'", $connexion);

$username = mysql_result($queryGetId,0,"username");
$queryDeleteUser = mysql_query("DELETE FROM users WHERE id='$id'", $connexion);

include("php/connexionRadius.php");
// Suppression utilisateur Radius //
$queryDeleteUserRadius = mysql_query("DELETE FROM radcheck WHERE username='$username'", $connexion);

if($queryDeleteUserRadius) {
    $reponse["error"] = 0;
} else {
    $reponse["error"] = 1;
}

header('Content-Type: application/json');
echo json_encode($reponse);

