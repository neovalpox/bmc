<?php
include("../php/connexion.php");
include("../php/loged.php");

$query = mysql_query("SELECT * FROM events WHERE user='$CKlogin'", $connexion);

if(!$query) {
    echo "Erreur MySQL : ".mysql_error();
} else {
    $i=0;
    while($nb=mysql_fetch_array($query)) {
        $reponse[$i]['id'] = $nb['id']*2/2;
        $reponse[$i]['start'] = $nb['start'];
        $reponse[$i]['end'] = $nb['end'];
        $reponse[$i]['title'] = html_entity_decode($nb['title']);
        $reponse[$i]['body'] = html_entity_decode($nb['info']);
        $i++;
    }
}

header('Content-Type: application/json');
echo json_encode($reponse);
?>
