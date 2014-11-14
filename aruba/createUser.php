<?php
include("php/connexion.php");

extract($_POST);

$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randomString = '';
for ($i = 0; $i < 5; $i++) {
    $randomString .= $characters[rand(0, strlen($characters) - 1)];
}

$username = strtolower(substr($prenom,0,1). substr($nom, 0,2));
$passe = $randomString;
$requete = mysql_query("INSERT INTO users SET nom='$nom', prenom='$prenom', societe='$societe', username='$username', passe='$passe'", $connexion);

$idSend = mysql_insert_id();

include("php/connexionRadius.php");
$requeteRadius = mysql_query("INSERT INTO radcheck SET id=NULL, username='$username', value='$passe', attribute='User-Password', op=':='", $connexion);


$reponse["nom"] = $nom;
$reponse["prenom"] = $prenom;
$reponse["passe"] = $passe;
$reponse["username"] = $username;
if($requete) {
    $reponse["error"] = 0;
    $reponse["id"] = $idSend;
} else {
    $reponse["error"] = 1;
}

header('Content-Type: application/json');
echo json_encode($reponse);