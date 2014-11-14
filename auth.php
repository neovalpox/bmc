<?php
$host="localhost";
$user="aruba";
$pass="ytadS6fELUEexRAf";
$db="aruba";

$connexion = mysql_connect($host, $user, $pass) or die("Pas de connexion au serveur");
mysql_select_db($db, $connexion) or die(mysql_error());

$query = mysql_query("SELECT * FROM configuration", $connexion);

$nomSociete = mysql_result($query,0,"nomSociete");
$couleurFond = mysql_result($query,0,"couleurFond");
$passe = mysql_result($query,0,"passe");


?>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=480, target-densitydpi=272" />     
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<div id="header" style="position: absolute; top:0px; width:100%; height:20px; left:0; background-color:#565656;"></div>

<center>
<img src="images/bmc2.png" style="margin-top:60px; margin-bottom:30px;">
</center> 
<div style="width:100%; text-align:center;">
<center>
<div id="connexion" style="width:250px; background-color:#FFFFFF; border: 3px solid #CCCCCC; text-align:center; margin-left:10%; margin-right:10%;box-shadow: 8px 8px 12px #999999;">
<div style="margin:10px;">Bienvenue sur le Wifi invité de <b><?php echo $nomSociete; ?></b></div>

<!-- email : <input type="text" id="email"><br><br> -->
<div style="margin:10px;">
Veuillez entrer le mot de passe que vous avez reçu à la récéption<br><br> <input type="password" id="passe">
</div>

<input id="getPass" type="hidden" value="<?php echo $passe; ?>">
 
<input type="submit" id="connexion" value="Connexion" onclick="connexion();" style="margin:10px;">

</div>
</center>
</div>

<div id="footer" style="position: absolute; bottom:0px; width:100%; height:20px; left:0; background-color:#565656;"></div>
</body>
</html>

<script type="text/javascript">
function connexion() {
	alert(passe +" / "+getPass );
	passe = $("#passe").val();
	getPass = $("#getPass").val();
	alert(passe +" / "+getPass );
	if(passe == getPass) {
		window.location.replace("validAuth.php");
	} else {
		alert("Mauvais mot de passe !");
	}
	
}

</script>

<style>
body {
	background-color: <?php echo $couleurFond; ?>;
	background-position: center;
	font-family:'Verdana', 'HelveticaNeue', Helvetica, Arial, sans-serif;
}
</style>
