<?php
include("../php/loged.php");
include("../php/connexion.php");
extract($_POST);
$par = $CKlogin;
$date = date("Y-m-d");
$query = mysql_query("INSERT INTO clientControlServer (id,nom,idClient,nomMachine,date,par,applicationLog,systemLog,logSize,localPing,internetPing,tele,ftp,iis,servicesFunc,taskFunc,cpu,ram,hdd,raidLog,raidAlert,intelLog,intelFunc,adReplic,clearUser,clearPrinter,clearShare,clearMailAdmin,clearMailAntivirus,backupEvent,backupJob,arizonaLicence,arizonaBrocker,updateWindow,updateSP,firewallBackup,comment) VALUES ('','$nom','$idClient','$nomMachine','$date','$par','$applicationLog','$systemLog','$logSize','$localPing','$internetPing','$tele','$ftp','$iis','$serviceFunc','$taskFunc','$cpu','$ram','$hdd','$raidLog','$raidAlert','$intelLog','$intelFunc','$adReplic','$clearUser','$clearPrinter','$clearShare','$clearMailAdmin','$clearMailAntivirus','$backupEvent','$backupJob','$arizonaLicence','$arizonaBrocker','$updateWindow','$updateSP','$firewallBackup','".htmlentities($comment)."')", $connexion);
        
echo "<script type='text/javascript'>window.location.reload();</script>";
?>
