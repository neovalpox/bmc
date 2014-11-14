<?php
$host="localhost";
$user="bmc";
$pass="superbmc";
$db="backup_bmc";

$connexion = mysql_connect($host, $user, $pass) or die("Pas de connexion au serveur");
mysql_select_db($db, $connexion) or die(mysql_error());

//$user = $_POST["user"];
$user = "fva";

$query = mysql_query("SELECT * FROM reglages WHERE user='$user'");

while($data =  mysql_fetch_array($query)) {
    extract($data);
}

$reponse["background"] = $background;
$reponse["debug"] = $debug;

$reponse["backupX"] = $backupX;
$reponse["backupY"] = $backupY;
$reponse["backupOpen"] = $backupOpen;
$reponse["backupAlpha"] = $backupAlpha;

$reponse["timeX"] = $timeX;
$reponse["timeY"] = $timeY;
$reponse["timeOpen"] = $timeOpen;
$reponse["timeAlpha"] = $timeAlpha;

$reponse["folderX"] = $folderX;
$reponse["folderY"] = $folderY;
$reponse["folderOpen"] = $folderOpen;
$reponse["folderAlpha"] = $folderAlpha;

$reponse["notesX"] = $notesX;
$reponse["notesY"] = $notesY;
$reponse["notesOpen"] = $notesOpen;
$reponse["notesAlpha"] = $notesAlpha;

$reponse["settingX"] = $settingX;
$reponse["settingY"] = $settingY;
$reponse["settingOpen"] = $settingOpen;
$reponse["settingAlpha"] = $settingAlpha;

$reponse["proceduresX"] = $proceduresX;
$reponse["proceduresY"] = $proceduresY;
$reponse["proceduresOpen"] = $proceduresOpen;
$reponse["proceduresAlpha"] = $proceduresAlpha;

$reponse["outilsX"] = $outilsX;
$reponse["outilsY"] = $outilsY;
$reponse["outilsOpen"] = $outilsOpen;
$reponse["outilsAlpha"] = $outilsAlpha;

$reponse["liensX"] = $liensX;
$reponse["liensY"] = $liensY;
$reponse["liensOpen"] = $liensOpen;
$reponse["liensAlpha"] = $liensAlpha;

$reponse["keepassX"] = $keepassX;
$reponse["keepassY"] = $keepassY;
$reponse["keepassOpen"] = $keepassOpen;
$reponse["keepassAlpha"] = $keepassAlpha;

$reponse["i"] = 9;

header('Content-Type: application/json');
echo json_encode($reponse);

?>