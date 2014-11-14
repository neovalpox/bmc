<?php
include("../php/connexion.php");
include("../php/loged.php");

extract($_POST);

$query = mysql_query("INSERT INTO maintenance SET ('id','selectedSupport','selectedBackup','selectedHoraire','qteUtilisateur','qteUtilisateurVIP','nbServeur','user') VALUES ('','$selectedSupport','$selectedBackup','$selectedHoraire','$qteUtilisateur','$qteUtilisateurVIP','$nbServeur','$CKlogin')", $connexion);

$reponse["lastID"] = mysql_insert_id();

header('Content-Type: application/json');
echo json_encode($reponse);
?>
