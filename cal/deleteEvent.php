<?php
include("../php/connexion.php");
include("../php/loged.php");

extract($_POST);

mysql_query("DELETE FROM events WHERE id='$id'") or die(mysql_error());

?>
