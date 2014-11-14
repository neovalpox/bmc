<?php
$host="localhost";
$user="root";
$pass="Vertex008821";
$db="networkscan";

$connexion = mysql_connect($host, $user, $pass) or die("Pas de connexion au serveur");
mysql_select_db($db, $connexion) or die(mysql_error());

$ip = $_POST['ip'];
$nom = $_POST['nom'];

$query = mysql_query("UPDATE `TABLE 1` SET nom='".$nom."' WHERE `IP`='".$ip."'", $connexion) or die(mysql_error());
echo "<script language='javascript'>
    window.opener.location.reload();
    window.close();
    </script>";
?>