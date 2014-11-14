<style type="text/css">
    <?php include('style.php'); ?>
</style>
<p align="right"><a href="javascript:popupPrint();">Exporter</a> <a href="javascript:popupPrint();"><img src="../images/pdf.gif" align="absmiddle"></a></p>
<script type="text/javascript">
            function popupPrint() {
                window.print();
            }
            
        </script>
<table cellspacing="0" width="800" align="center" class="cadre"><tr height="40" class="cadre"><td colspan="2" align="center"><font color="#FFFFFF"><b>Résumé</b></font></td></tr>
<tr>
<td>
<?php
$id = $_GET['id'];
include("../php/connexion.php");
include("../php/loged.php");
$query = mysql_query("SELECT * FROM maintenance WHERE id=$id", $connexion);

$client = mysql_result($query,0,"client");
$date = mysql_result($query,0,"date");
$selectedSupport = mysql_result($query,0,"selectedSupport");
$selectedBackup = mysql_result($query,0,"selectedBackup");
$selectedHoraire = mysql_result($query,0,"selectedHoraire");
$qteUtilisateur = mysql_result($query,0,"qteUtilisateur");
$qteUtilisateurVIP = mysql_result($query,0,"qteUtilisateurVIP");
$nbServeur = mysql_result($query,0,"nbServeur");

if($selectedSupport == 1) {
    $selectedSupport = "Support général & 2 visites annuelles planifiées";
    $prixSupport = 170;
} else if($selectedSupport == 2) {
    $selectedSupport = "Support général & visites trimestrielles planifiées ";
    $prixSupport = 250;
} else if($selectedSupport == 3) {
    $selectedSupport = "Support général & visites planifiées tous les 2 mois";
    $prixSupport = 150;
} else if($selectedSupport == 4) {
    $selectedSupport = "Support général & visites mensuelles planifiées ";
    $prixSupport = 1000;
}

if($selectedBackup == 1) {
    $selectedBackup = "Vérification des sauvegardes mensuelle";
    $prixBackup = 25;
} else if($selectedBackup == 2) {
    $selectedBackup = "Vérification des sauvegardes hebdomadaire";
    $prixBackup = 80;
} else if($selectedBackup == 3) {
    $selectedBackup = "Vérification des sauvegardes journalière";
    $prixBackup = 300;
}

$prixUtilisateur = $qteUtilisateur*30;
$prixUtilisateurVIP = $qteUtilisateurVIP*55;

if($selectedHoraire == 1) {
    $selectedHoraire = "Horaires de support standard";
    $prixHoraire = 0;
} else if($selectedHoraire == 2) {
    $selectedHoraire = "Horaires de support standard 24/7";
    $prixHoraire = 500;
}

echo "<table width='94%' style='margin-left:25px;margin-right: 25px; margin-bottom: 15px; margin-top: 15px;'>";
echo "<tr><td width='80'>Client : <b>".$client."</b></td>";
echo "<td></td><td></td><td></td><td align='right'><i>".$date."</i></td></tr>";
echo "<tr><td><b>Support</b></td></tr><tr><td colspan='4'>";
echo $selectedSupport."</td><td align='right'>CHF ".$prixSupport.".00</td></tr>";
echo "<tr><td><b>Utilisateurs</b></td></tr><tr>";
echo "<td>Utilisateur : ".$qteUtilisateur."</td><td></td><td></td><td></td><td align='right'>CHF ".$prixUtilisateur.".00</td></tr><tr>";
echo "<td>Utilisateur VIP : ".$qteUtilisateurVIP."</td><td></td><td></td><td></td><td align='right'>CHF ".$prixUtilisateurVIP.".00</td></tr>";
echo "<tr><td><b>Backup</b></td></tr><tr>";
echo "<td colspan='4'>".$selectedBackup."</td><td align='right'>CHF ".$prixBackup.".00</td></tr>";
echo "<tr><td><b>Horaire</b></td></tr><tr>";
echo "<td colspan='4'>".$selectedHoraire."</td><td align='right'>CHF ".$prixHoraire.".00</td></tr>";
echo "</table>";

$query2 = mysql_query("SELECT * FROM maintenanceServeur WHERE uid=$id", $connexion);

$i = 1;
while($data=mysql_fetch_array($query2)) {
    $num = $data['num'];
    $type = $data['type'];
    $niveau = $data['niveau'];
    $horaire = $data['horaire'];
    $exchange = $data['exchange'];
    $sharepoint = $data['sharepoint'];
    
    if($horaire == 0) {
        $horaire = "";
    } else if($horaire == 1) {
        $horairePrix = 100;
        $horaire = '<tr bgcolor="#ECECE2"><td>
                    <div class="margin"><b>Extension horaires de maintenance Windows Updates Serveurs </b><br>
                    LU-VE jusqu\'à 21h30
                    </div></td><td align="right">CHF '.$horairePrix.'.00</td></tr>';
    }
    
    if($exchange == 0) {
        $exchange = "";
    } else if($exchange == 1) {
        $exchangePrix = 100;
        $exchange = '<tr bgcolor="#ECECE2"><td>
                    <div class="margin"><b>Option MS Exchange</b>
                    </div></td><td align="right">CHF '.$exchangePrix.'.00</td></tr>';
    }
    
    if($sharepoint == 0) {
        $sharepoint = "";
    } else if($sharepoint == 1) {
        $sharepointPrix = 200;
        $sharepoint = '<tr bgcolor="#ECECE2"><td>
                    <div class="margin"><b>Option MS SharePoint</b>
                    </div></td><td align="right">CHF '.$sharepointPrix.'.00</td></tr>';
    }
    
    if($type == 1) {
        $type = "virtuel";
        $type2 = "Serveur virtualisé sur infrastructure VMware";
        $typePrix = 80;
    } else if ($type == 2) {
        $type = "physique";
        $type2 = "Machine physique (HP, Dell, IBM, etc ...)";
        $typePrix = 80;
    }
    
    if($niveau == 0) {
        $niveau = "SILVER";
        $niveau2 = "Temps de réaction et d’intervention standard";
        $niveauPrix = 0;
    } else if($niveau == 1) {
        $niveau = "GOLD";
        $niveau2 = "Temps de réaction et d’intervention";
        $niveauPrix = 80;
    }
    
    echo '<table width="94%" align="center" style="margin-left: 25px;margin-right: 25px; margin-bottom: 15px; margin-top: 15px;" cellspacing="0"><tr>
          <td colspan="3" height="40" bgcolor="#A0CED8" align="center">
          <div class="margin"><img src="../images/server2.png" align="absmiddle"><b>Serveur numéro '.$i.'</b></div>
          </td></tr>';
    
    echo '<tr><td height="1" bgcolor="#FFFFFF" colspan="3"></td></tr><tr><td height="1" bgcolor="#DDDDDB" colspan="3"></td></tr>';
    
    echo '<tr bgcolor="#ECECE2"><td>
          <div class="margin"><b>Maintenance serveur '.$type.'</b><br>
          '.$type2.'</div>
          </td><td align="right">CHF '.$typePrix.'.00</td></tr>';
    
    echo '<tr bgcolor="#ECECE2"><td>
          <div class="margin"><b>Niveau d\'intervention: '.$niveau.'</b><br>
          '.$niveau2.'</div>
          </td><td align="right">CHF '.$niveauPrix.'.00</td></tr>';
    echo $horaire;
    echo $exchange;
    echo $sharepoint;
    
    $i++;
}

$totPrix = $prixSupport+$prixBackup+$prixUtilisateur+$prixUtilisateurVIP+$prixHoraire+$horairePrix+$exchangePrix+$sharepointPrix+$typePrix+$niveauPrix;

echo '<table width="94%" align="center" style="margin-left: 25px;margin-right: 25px; margin-bottom: 15px; margin-top: 15px;" cellspacing="0"><tr>
          <td colspan="3" height="40">
          <div class="margin"><b>Prix total : </b></td><td align="right"><b>CHF '.$totPrix.'.00</b></div>
          </td></tr>';

?>
</td>
</tr>
</table>