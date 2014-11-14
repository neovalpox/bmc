<?php
include("../php/connexion.php");
include("../php/loged.php");

extract($_POST);

mysql_query("INSERT INTO `maintenance`(`id`, `client`, `date`, `selectedSupport`, `selectedBackup`, `selectedHoraire`, `qteUtilisateur`, `qteUtilisateurVIP`, `nbServeur`, `user`) VALUES  ('','$client','$date','$selectedSupport','$selectedBackup','$selectedHoraire','$qteUtilisateur','$qteUtilisateurVIP','$nbServeur','$CKlogin')", $connexion) or die(mysql_error());
       
        
$reponse["lastID"] = mysql_insert_id();
$reponse["erreur"] = mysql_error();

header('Content-Type: application/json');
echo json_encode($reponse);
?>
