<?php
$host="localhost";
$user="aruba";
$pass="ytadS6fELUEexRAf";
$db="aruba";

$connexion = mysql_connect($host, $user, $pass) or die("Pas de connexion au serveur");
mysql_select_db($db, $connexion) or die(mysql_error());

extract($_POST);

$queryUpdate = mysql_query("UPDATE configuration SET passe='$passe', nomSociete='$societe'", $connexion);
?>