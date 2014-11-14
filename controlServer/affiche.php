<link href="../style.css" rel="stylesheet" type="text/css" />
<table cellspacing="0" width="800" class="cadre">
<tr><td>
<?php
include("../php/connexion.php");
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM clientControlServer WHERE id='$id'", $connexion);

$nom = mysql_result($query,0,"nom");
$idClient = mysql_result($query,0,"idClient");
$nomMachine = mysql_result($query,0,"nomMachine");
$date = mysql_result($query,0,"date");
$par = mysql_result($query,0,"par");
$applicationLog = mysql_result($query,0,"applicationLog");
$systemLog = mysql_result($query,0,"systemLog");
$logSize = mysql_result($query,0,"logSize");
$localPing = mysql_result($query,0,"localPing");
$internetPing = mysql_result($query,0,"internetPing");
$tele = mysql_result($query,0,"tele");
$ftp = mysql_result($query,0,"ftp");
$iis = mysql_result($query,0,"iis");
$serviceFunc = mysql_result($query,0,"servicesFunc");
$taskFunc = mysql_result($query,0,"taskFunc");
$cpu = mysql_result($query,0,"cpu");
$ram = mysql_result($query,0,"ram");
$hdd = mysql_result($query,0,"hdd");
$raidLog = mysql_result($query,0,"raidLog");
$raidAlert = mysql_result($query,0,"raidAlert");
$intelLog= mysql_result($query,0,"intelLog");
$intelFunc = mysql_result($query,0,"intelFunc");
$adReplic = mysql_result($query,0,"adReplic");
$clearUser = mysql_result($query,0,"clearUser");
$clearPrinter = mysql_result($query,0,"clearPrinter");
$clearShare= mysql_result($query,0,"clearShare");
$clearMailAdmin = mysql_result($query,0,"clearMailAdmin");
$clearMailAntivirus = mysql_result($query,0,"clearMailAntivirus");
$backupEvent = mysql_result($query,0,"backupEvent");
$backupJob = mysql_result($query,0,"backupJob");
$arizonaLicence = mysql_result($query,0,"arizonaLicence");
$arizonaBrocker = mysql_result($query,0,"arizonaBrocker");
$updateWindow = mysql_result($query,0,"updateWindow");
$updateSP = mysql_result($query,0,"updateSP");
$firewallBackup = mysql_result($query,0,"firewallBackup");
$comment = mysql_result($query,0,"comment");
?>
<form action="controlServer/validForm.php" name="form" method="post">
    <table style="margin:8px;">
        <tr><td><b>Contrôle mensuel de serveur</b></td><td colspan="6">Date : <?php echo $date; ?></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td width="400">Nom de la machine : <?php echo $nomMachine; ?></td><td colspan="6" width="400"> Client : <?php echo $nom; ?></td></tr>
        <tr><td width="400"></td><td width="400"></td><td width="40"></td><td width="40"></td><td width="40"></td></tr>
        <tr><td><b>Observateur d'événements</b></td><td>- applications</td><td><img src="../images/<?php echo $applicationLog; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- système</td><td><img src="../images/<?php echo $systemLog; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- taille des logs / optimisation</td><td><img src="../images/<?php echo $logSize; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Accès aux différents réseaux</b></td><td>- local</td><td><img src="../images/<?php echo $localPing; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- Internet</td><td><img src="../images/<?php echo $internetPing; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- télémaintenance</td><td><img src="../images/<?php echo $tele; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- ftp / telnet / dhcp</td><td><img src="../images/<?php echo $ftp; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- IIS</td><td><img src="../images/<?php echo $iis; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Services nécessaires</b></td><td>- fonctionnement</td><td><img src="../images/<?php echo $serviceFunc; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Tâches planifiées</b></td><td>- fonctionnement</td><td><img src="../images/<?php echo $taskFunc; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Gestionnaire des tâches / performances</b></td><td>- processeur(s)</td><td><img src="../images/<?php echo $cpu; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- mémoire</td><td><img src="../images/<?php echo $ram; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Espace disque</b></td><td>- place libre</td><td><img src="../images/<?php echo $hdd; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Etat des groupes RAID</b></td><td>- vérification des logs</td><td><img src="../images/<?php echo $raidLog; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- envoi des alertes / alarme</td><td><img src="../images/<?php echo $raidAlert; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Console Intel Management</b></td><td>- vérification des logs</td><td><img src="../images/<?php echo $intelLog; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- fonctionnement</td><td><img src="../images/<?php echo $intelFunc; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Active Directory</b></td><td>- réplication sur les diff. serveurs</td><td><img src="../images/<?php echo $adReplic; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Nettoyage des objets obsolètes</b></td><td>- comptes utilisateurs</td><td><img src="../images/<?php echo $clearUser; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- imprimantes</td><td><img src="../images/<?php echo $clearPrinter; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- partages</td><td><img src="../images/<?php echo $clearShare; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Contrôle et nettoyage des mails</b></td><td>- administrateur</td><td><img src="../images/<?php echo $clearMailAdmin; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- antivirus</td><td><img src="../images/<?php echo $clearMailAntivirus; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Sauvegardes</b></td><td>- journaux</td><td><img src="../images/<?php echo $backupEvent; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- job / sélections / temps de travail</td><td><img src="../images/<?php echo $backupJob; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Arizona</b></td><td>- état des licences</td><td><img src="../images/<?php echo $arizonaLicence; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- Messages broker</td><td><img src="../images/<?php echo $arizonaBrocker; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Mise à jour de sécurité</b></td><td>- Windows update</td><td><img src="../images/<?php echo $updateWindow; ?>.png" width="16"></td></tr>
        <tr><td><b></b></td><td>- service pack</td><td><img src="../images/<?php echo $updateSP; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Firewall (checkpoint, isa, zywall)</b></td><td>- sauvegarde configuration</td><td><img src="../images/<?php echo $firewallBackup; ?>.png" width="16"></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td colspan="10"><b>Observations :</td></tr>
        <tr><td colspan="10"><?php echo html_entity_decode($comment); ?></td></tr>
    </td></tr>
</table>
</form>
        <script type="text/javascript">
            window.print();
        </script>