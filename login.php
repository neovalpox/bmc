<link href="style.css" rel="stylesheet" type="text/css" />

<?php
include("php/connexion.php");
	
if(isset($_POST) && !empty($_POST['login'])) {
	extract($_POST);
	// on recup�re le password de la table qui correspond au login du visiteur
	$sql = "SELECT * FROM user WHERE login='".$login."'";
	$result = mysql_query($sql, $connexion) or die(mysql_error());
	$affected_rows = mysql_num_rows($result);
  
	if($affected_rows == 1) {
		$nom = mysql_result($result,0,"nom");	
		$ext3CX = mysql_result($result,0,"ext3CX");
		$face = mysql_result($result,0,"face");
		setcookie('login[log]', 'logged');
		setcookie('login[login]', $login);
		setcookie('login[nom]', $nom);
		setcookie('login[ext3CX]', $ext3CX);
		setcookie('login[face]', $face);
                
		$CKlogin = $login;
		$CKnom = htmlentities($nom);
		
		echo '<SCRIPT LANGUAGE="JavaScript">window.location.replace("index.php");</SCRIPT>';
	} else {
		
		echo '<table style="margin-top:280px;" class="cadre" width="350" align="center" border="0" cellspacing="0" height="220">
		<tr></td><td background="images/degrade.jpg" height="40" valign="center" align="center"><b>Erreur</b></td></tr>
<tr><td align="center"><img src="images/wrong.png"><br><br><center><font face="Verdana" size="1" color="#FF0000"><b>Mauvais login / password.</b></font><br><br><a href="Javascript:history.go(-1)">Retour</a></center></td></tr>
</table>';
		//include('menu_gauche.php'); // On inclut le formulaire d'identification
		exit;
	}
} else {
	echo '<table style="margin-top:280px;" class="cadre" width="350" align="center" border="0" cellspacing="0" height="220">
	<tr></td><td background="images/degrade.jpg" height="40" valign="center" align="center"><b>Erreur</b></td></tr>
<tr><td align="center"><img src="images/wrong.png"><br><br><center><font face="Verdana" size="1" color="#FF0000"><b>Veuillez entrer un login et un mot de passe !</b></font><br><br><a href="Javascript:history.go(-1)">Retour</a></center></td></tr>
</table>';
	}
?>
</body>
