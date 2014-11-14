<?php
include("loged.php");
$query = mysql_query("SELECT * FROM user WHERE login='$CKlogin'");

while($nb=  mysql_fetch_array($query)) {
    $reponse['background'] = $nb['backgroud'];
    $reponse['color'] = $nb['color'];
    $reponse['move'] = $nb['move'];
}
header('Content-Type: application/json');
echo json_encode($reponse);
?>
 