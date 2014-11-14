<?php
include("php/connexion.php");

$query_who = mysql_query("SELECT user FROM sauvegardes GROUP BY user", $connexion);
$i=0;
while($nb=mysql_fetch_array($query_who)) {
    $user = $nb['user'];
    $query = mysql_query("SELECT count(user) FROM sauvegardes WHERE user='$user'", $connexion);
$row = mysql_fetch_row($query);
$tot = round($row[0]/8);
$reponse['user_'.$i] = $user;
$reponse['tot_'.$i] = $tot;
$i++;
}

header('Content-Type: application/json');
echo json_encode($reponse);
?>
