<?php
include("connexion.php");
include("loged.php");
$id = $_POST['color'];
$CKlogin = $_POST['login'];
$query = mysql_query("UPDATE user SET color=$id WHERE login='$CKlogin'");

if (!$query) {
    die('Invalid query: ' . mysql_error());
} else {
    $reponse['error'] = 0;
}

header('Content-Type: application/json');
echo json_encode($reponse);
?>
