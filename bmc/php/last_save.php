<?php
include("connexion.php");
$query = mysql_query("SELECT MAX(date) FROM sauvegardes", $connexion);
$last_date = mysql_result($query,0,"MAX(date)");

$user_query = mysql_query("SELECT user FROM sauvegardes WHERE date='$last_date'", $connexion);
$user_name = mysql_result($user_query,0,"user");
$new_date = explode(" ",$last_date);

$query_nom_complet = mysql_query("SELECT nom FROM user WHERE login='$user_name'", $connexion);
$nom_complet = mysql_result($query_nom_complet,0,"nom");

//echo $new_date[0]."</b> &agrave; <b>".$new_date[1]."</b><br> par <b><a href=# alt='$nom_complet'>".$user_name."</a></b>";

if($new_date[0] == date("Y-m-d")) {
	echo "Aujourd'hui </b>&agrave; <b>".$new_date[1]."</b><br> par <b><a href='javascript:profile($user_name)' alt='$nom_complet'>".$user_name."</a></b>";
} else if($new_date[0] == date("Y-m-d")-1) {
	echo "Hier </b> &agrave; <b>".$new_date[1]."</b><br> par <b><a href='javascript:profile($user_name)' alt='$nom_complet'>".$user_name."</a></b>";
	echo "Hier</b> &agrave; <b>".$new_date[1]."</b><br> par <b><a href='javascript:profile($user_name)' alt='$nom_complet'>".$user_name."</a></b>";
} else {
	echo "le ".$new_date[0]."</b> &agrave; <b>".$new_date[1]."</b><br> par <b><a href='javascript:profile($user_name)' alt='$nom_complet'>".$user_name."</a></b>";
}
?>