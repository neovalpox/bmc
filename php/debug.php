<?php
include("connexion.php");

extract($_POST);

$query = mysql_query("UPDATE reglages SET debug='$etat' WHERE pseudo='$pseudo'");

?>