<?php
$host="localhost";
$user="bmc";
$pass="superbmc";
$db="backup_bmc";

$connexion = mysql_connect($host, $user, $pass) or die("Pas de connexion au serveur");
mysql_select_db($db, $connexion) or die(mysql_error());
?>