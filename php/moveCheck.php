<?php
include("connexion.php");
include("loged.php");
$CKlogin = $_POST['login'];
$moveCheck = $_POST['check'];
$query = mysql_query("UPDATE user SET move=$moveCheck WHERE login='$CKlogin'");

if (!$query) {
    die('Invalid query: ' . mysql_error());
} else {
    $reponse['error'] = 0;
}

header('Content-Type: application/json');
echo json_encode($reponse);
?>