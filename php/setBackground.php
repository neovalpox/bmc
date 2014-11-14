<?php
include("connexion.php");
include("loged.php");
$id = $_POST['background'];
$CKlogin = $_POST['user'];
$query = mysql_query("UPDATE reglages SET background=$id WHERE user='$CKlogin'");

if (!$query) { 
    die('Invalid query: ' . mysql_error());
} else {
    $reponse['error'] = 0;
}

header('Content-Type: application/json');
echo json_encode($reponse);
?>