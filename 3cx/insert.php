<?php
extract($_GET);
include("../php/connexion.php");

$date = date("Y-m-d");
$heure = date("H:i:s");

$query = mysql_query("INSERT INTO 3cx (id,numero,date,time,user) VALUES (NULL,'$id','$date','$heure','$nom')", $connexion);
?>
<script>
   window.close();
</script>
  