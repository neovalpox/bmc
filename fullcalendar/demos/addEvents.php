<?php
include("php/connexion.php");
include("php/loged.php");

$title = $_POST['title'];
if(isse($_POST['info'])) {
    $info = $_POST['info'];
} else {
    $info = "";
}
$start = $_POST['start'];
$end = $_POST['end'];
$title = $_POST['title'];

$query = mysql_query("INSERT INTO events (id,title,info,start,end,allDays,user), VALUES ('','$title','$info','$start','$end','false','$CKlogin'", $connexion);

if(!$query) {
    echo "Erreur mysql : <br>".mysql_error();
    $reponse['erreur'] = 0;
} else {
    $reponse['erreur'] = 0;
}
header('Content-Type: application/json');
echo json_encode($reponse);

?>