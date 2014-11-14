<table cellspacing="0" width="800" class="cadre"><tr background="images/clouds.jpg" height="40" class="cadre"><td colspan="2"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;<b>Formulaire</b></font></td></tr>
<tr><td>
<?php
include("../php/connexion.php");
$id = $_POST['id'];
$query = mysql_query("SELECT nom FROM ControlServer WHERE id='$id'", $connexion);
$nom = mysql_result($query,0,"nom");
$date = date("d.m.Y");

?>
        <br>
<form action="controlServer/validForm.php" name="form" method="post">
    <input type="hidden" name="idClient" value="<?php echo $id; ?>">
    <input type="hidden" name="nom" value="<?php echo $nom; ?>">
    <table style="margin:8px;">
        <tr><td><b>Contrôle mensuel de serveur</b></td><td colspan="6">Date : <?php echo $date; ?></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td width="400">Nom de la machine : <input type="text" name="nomMachine"></td><td colspan="6" width="400"> Client : <input type="text" disabled value="<?php echo $nom; ?>"></td></tr>
        <tr><td width="400"></td><td width="400"></td><td width="40"><b>Ok</b></td><td width="40"><b>No</b></td><td width="40"><b>N/A</b></td></tr>
        <tr><td><b>Observateur d'événements</b></td><td>- applications</td><td><label><input type="radio" name="applicationLog" value="1"></td><td><input type="radio" name="applicationLog" value="0"></td><td><input type="radio" name="applicationLog" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- système</td><td><label><input type="radio" name="systemLog" value="1"></td><td><input type="radio" name="systemLog" value="0"></td><td><input type="radio" name="systemLog" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- taille des logs / optimisation</td><td><label><input type="radio" name="logSize" value="1"></td><td><input type="radio" name="logSize" value="0"></td><td><input type="radio" name="logSize" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Accès aux différents réseaux</b></td><td>- local</td><td><label><input type="radio" name="localPing" value="1"></td><td><input type="radio" name="localPing" value="0"></td><td><input type="radio" name="localPing" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- Internet</td><td><label><input type="radio" name="internetPing" value="1"></td><td><input type="radio" name="internetPing" value="0"></td><td><input type="radio" name="internetPing" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- télémaintenance</td><td><label><input type="radio" name="tele" value="1"></td><td><input type="radio" name="tele" value="0"></td><td><input type="radio" name="tele" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- ftp / telnet / dhcp</td><td><label><input type="radio" name="ftp" value="1"></td><td><input type="radio" name="ftp" value="0"></td><td><input type="radio" name="ftp" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- IIS</td><td><label><input type="radio" name="iis" value="1"></td><td><input type="radio" name="iis" value="0"></td><td><input type="radio" name="iis" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Services nécessaires</b></td><td>- fonctionnement</td><td><label><input type="radio" name="serviceFunc" value="1"></td><td><input type="radio" name="serviceFunc" value="0"></td><td><input type="radio" name="serviceFunc" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Tâches planifiées</b></td><td>- fonctionnement</td><td><label><input type="radio" name="taskFunc" value="1"></td><td><input type="radio" name="taskFunc" value="0"></td><td><input type="radio" name="taskFunc" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Gestionnaire des tâches / performances</b></td><td>- processeur(s)</td><td><label><input type="radio" name="cpu" value="1"></td><td><input type="radio" name="cpu" value="0"></td><td><input type="radio" name="cpu" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- mémoire</td><td><label><input type="radio" name="ram" value="1"></td><td><input type="radio" name="ram" value="0"></td><td><input type="radio" name="ram" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Espace disque</b></td><td>- place libre</td><td><label><input type="radio" name="hdd" value="1"></td><td><input type="radio" name="hdd" value="0"></td><td><input type="radio" name="hdd" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Etat des groupes RAID</b></td><td>- vérification des logs</td><td><label><input type="radio" name="raidLog" value="1"></td><td><input type="radio" name="raidLog" value="0"></td><td><input type="radio" name="raidLog" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- envoi des alertes / alarme</td><td><label><input type="radio" name="raidAlert" value="1"></td><td><input type="radio" name="raidAlert" value="0"></td><td><input type="radio" name="raidAlert" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Console Intel Management</b></td><td>- vérification des logs</td><td><label><input type="radio" name="intelLog" value="1"></td><td><input type="radio" name="intelLog" value="0"></td><td><input type="radio" name="intelLog" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- fonctionnement</td><td><label><input type="radio" name="indelFunc" value="1"></td><td><input type="radio" name="intelFunc" value="0"></td><td><input type="radio" name="intelFunc" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Active Directory</b></td><td>- réplication sur les diff. serveurs</td><td><label><input type="radio" name="adReplic" value="1"></td><td><input type="radio" name="adReplic" value="0"></td><td><input type="radio" name="adReplic" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Nettoyage des objets obsolètes</b></td><td>- comptes utilisateurs</td><td><label><input type="radio" name="clearUser" value="1"></td><td><input type="radio" name="clearUser" value="0"></td><td><input type="radio" name="clearUser" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- imprimantes</td><td><label><input type="radio" name="clearPrinter" value="1"></td><td><input type="radio" name="clearPrinter" value="0"></td><td><input type="radio" name="clearPrinter" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- partages</td><td><label><input type="radio" name="clearShare" value="1"></td><td><input type="radio" name="clearShare" value="0"></td><td><input type="radio" name="clearShare" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Contrôle et nettoyage des mails</b></td><td>- administrateur</td><td><label><input type="radio" name="clearMailAdmin" value="1"></td><td><input type="radio" name="clearMailAdmin" value="0"></td><td><input type="radio" name="clearMailAdmin" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- antivirus</td><td><label><input type="radio" name="clearMailAntivirus" value="1"></td><td><input type="radio" name="clearMailAntivirus" value="0"></td><td><input type="radio" name="clearMailAntivirus" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Sauvegardes</b></td><td>- journaux</td><td><label><input type="radio" name="backupEvent" value="1"></td><td><input type="radio" name="backupEvent" value="0"></td><td><input type="radio" name="backupEvent" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- job / sélections / temps de travail</td><td><label><input type="radio" name="backupJob" value="1"></td><td><input type="radio" name="backupJob" value="0"></td><td><input type="radio" name="backupJob" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Arizona</b></td><td>- état des licences</td><td><label><input type="radio" name="arizonaLicence" value="1"></td><td><input type="radio" name="arizonaLicence" value="0"></td><td><input type="radio" name="arizonaLicence" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- Messages broker</td><td><label><input type="radio" name="arizonaBrocker" value="1"></td><td><input type="radio" name="arizonaBrocker" value="0"></td><td><input type="radio" name="arizonaBrocker" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Mise à jour de sécurité</b></td><td>- Windows update</td><td><label><input type="radio" name="updateWindow" value="1"></td><td><input type="radio" name="updateWindow" value="0"></td><td><input type="radio" name="updateWindow" value="3"></label></td></tr>
        <tr><td><b></b></td><td>- service pack</td><td><label><input type="radio" name="updateSP" value="1"></td><td><input type="radio" name="updateSP" value="0"></td><td><input type="radio" name="updateSP" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td><b>Firewall (checkpoint, isa, zywall)</b></td><td>- sauvegarde configuration</td><td><label><input type="radio" name="firewallBackup" value="1"></td><td><input type="radio" name="firewallBackup" value="0"></td><td><input type="radio" name="firewallBackup" value="3"></label></td></tr>
        <tr><td height="15" colspan="10"></td></tr>
        <tr><td colspan="10"><b>Observations :</td></tr>
        <tr><td colspan="10"><textarea cols="80" name="comment"></textarea></td></tr>
        <tr><td colspan="10"><input type="submit" value="Enregistrer"></textarea></td></tr>
    </td></tr>
</table>
</form>