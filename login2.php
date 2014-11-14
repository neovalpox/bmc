<?php
include("php/connexion.php");
if(isset($_POST) && !empty($_POST['pseudo'])) {
	extract($_POST);
	// on recupère le password de la table qui correspond au login du visiteur
	$sql = "SELECT * FROM user WHERE login='".$pseudo."'";
	$result = mysql_query($sql, $connexion) or die(mysql_error());
	$affected_rows = mysql_num_rows($result);
  
	if($affected_rows == 1) {
		$nom = mysql_result($result,0,"nom");	
		$ext3CX = mysql_result($result,0,"ext3CX");	
		$face = mysql_result($result,0,"face");	
		setcookie('login[log]', 'logged');
		setcookie('login[login]', $pseudo);
		setcookie('login[nom]', $nom);
		setcookie('login[ext3CX]', $ext3CX);
                setcookie('login[face]', $face);
		
		$CKlogin = $pseudo;
		$CKnom = htmlentities($nom);
		
		$reponse["error"] = 0;
	} else {
		$reponse["error"] = 1;
		exit;
	}
} else {
	$reponse["error"] = 2;
}



header('Content-Type: application/json');
echo json_encode($reponse);
