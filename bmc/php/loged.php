<?php
if (isset($_COOKIE['login']['log'])) {
	if ($_COOKIE['login']['log'] == "logged") {
	
		$loged = "ok";
		$CKlogin = $_COOKIE['login']['login'];
		$CKnom = $_COOKIE['login']['nom'];
		$adresse_ip = $_SERVER["REMOTE_ADDR"];
		$ext3CX = $_COOKIE['login']['ext3CX'];
                
                $pin3CX = "1052";
		
//                mysql_db_query("UPDATE users SET online='$timestamp' ip='$adresse_ip' WHERE pseudo='$CKlogin'", $connexion);
	}else{
		$loged="error";
		$CKlogin="";
	}

} else {
	$loged="no";	
}
?>
