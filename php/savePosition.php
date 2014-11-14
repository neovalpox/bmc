<?php
extract($_POST);

include("connexion.php");

$positionX = "$nom"."X";
$positionY = "$nom"."Y";
$positionOpen = "$nom"."Open";

$query = mysql_query("UPDATE reglages SET $positionX=$posX, $positionY=$posY WHERE user='$login'", $connexion);

if (!$query) { 
    die('Invalid query: ' . mysql_error());
} else {
    $reponse['error'] = 0;
}

header('Content-Type: application/json');
echo json_encode($reponse);
?>