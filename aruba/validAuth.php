<?php
extract($_POST);

$host="localhost";
$user="aruba";
$pass="ytadS6fELUEexRAf";
$db="aruba";

//echo $password;

$connexion = mysql_connect($host, $user, $pass) or die("Pas de connexion au serveur");
mysql_select_db($db, $connexion) or die(mysql_error());

$query = mysql_query("SELECT * FROM configuration", $connexion);

$superPasse = mysql_result($query,0,"superPasse");

$date = date("Y-m-d");
$time = date("H:i:s");

$queryUpdateDateTime = mysql_query("UPDATE users SET date='$date', time='$time' WHERE passe='$password'", $connexion);

$queryUser = mysql_query("SELECT * FROM users WHERE passe='$password'", $connexion) or die(mysql_error());

if($queryUser) {
    $nom = mysql_result($queryUser,0,"nom");
    $prenom = mysql_result($queryUser,0,"prenom");
    $societe = mysql_result($queryUser,0,"societe");
    $username = mysql_result($queryUser,0,"username");
    
    $nomGet = $prenom." ".$nom." ".$societe;
}



?>

<head>
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=480, target-densitydpi=320" />  
</head>

<div id="passConnect" style="display:none;"><?php echo $superPasse; ?></div>

<div style="margin-top:150px; text-aling:center; width:100%"><center><font color="#FFFFFF"><b>Connexion en cour...</b></font></center></div>

<style>
body {
	background-position: center;
	font-family:'Verdana', 'HelveticaNeue', Helvetica, Arial, sans-serif;
}
</style>

<form method="post" action="https://securelogin.arubanetworks.com/cgi-bin/login" name="validConnexion">
<input name="user" value="<?php echo $username; ?>" type="hidden">
<input name="password" value="<?php echo $password; ?>" type="hidden">
<input name="cmd" value="authenticate" type="hidden">
<input name="url" value="http://www.google.ch" type="hidden">
<input name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" type="hidden">
<input name="essid" value="BMC-GUEST" type="hidden">
</form>
<script type="text/javascript">
//	window.location.replace("http://www.google.ch");
document.forms["validConnexion"].submit();
</script>
