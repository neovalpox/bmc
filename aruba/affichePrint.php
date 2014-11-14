<?php

include("php/connexion.php");
extract($_GET);

$querySociete = mysql_query("SELECT nomSociete FROM configuration");
$societe = mysql_result($querySociete,0,"nomSociete");

$query = mysql_query("SELECT * FROM users WHERE id='$id'", $connexion);

$prenom = mysql_result($query,0,"prenom");
$nom = mysql_result($query,0,"nom");
$societeClient = mysql_result($query,0,"societe");
$passe = mysql_result($query,0,"passe");

?>
<style>
body {
	font-family:"Verdana";
	font-size:12;}
td {
	font-size:11;
}
</style>
<div id="center" style="position:absolute; width: 100%; height:100%;">
    
    <div id="logo" style="text-align: center;">
        <img src="images/logo.png" style="margin-top:50px;">
        <br><br>
        Bienvenue sur le réseau Wifi-Guest de<br>
        <h2><?php echo $societe; ?></h2><br><br>

        Voici votre mot de passe :<br><br>
        <b><?php echo $passe; ?></b>
        <br><br> 
        Votre session Wifi est valable durant 24h
        <br><br>
        Avec nos meilleures salutations.
    </div>
    
</div>

<script type="text/javascript">
    window.print();
</script>