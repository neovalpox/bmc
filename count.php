<?php
include("php/connexion.php");
$query = mysql_query("SELECT count(valide) FROM sauvegardes WHERE valide=1", $connexion);
$row = mysql_fetch_row($query);
$ok = $row[0];

$query2 = mysql_query("SELECT count(valide) FROM sauvegardes WHERE valide=0", $connexion);
$row2 = mysql_fetch_row($query2);
$false = $row2[0];
     
$reponse['faux'] = $false;
$reponse['ok'] = $ok;
header('Content-Type: application/json');
echo json_encode($reponse);
?>
