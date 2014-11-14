<?php
include("connexion.php");
include("loged.php");
$tot_clients = $_POST['tot_clients'];
$date = date("Y-m-d H:i:s");
for($i=0; $i<$tot_clients; $i++) {
	$nom = htmlentities($_POST["nom$i"]);
	$statut = $_POST["statut$i"];
	$remarque = htmlentities($_POST["remarque$i"]);
	$query = mysql_query("INSERT INTO `backup_bmc`.`sauvegardes` (`id`, `nom`, `date`, `valide`, `user`, `remarque`) VALUES (NULL,'$nom','$date','$statut','$CKlogin','$remarque')", $connexion);
}

if(!$query) {
    $reponse["erreur"] = 1;
} else {
    $reponse["erreur"] = 0;
}

header('Content-Type: application/json');
echo json_encode($reponse);


?>