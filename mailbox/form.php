<?php
function formatBytes($b,$p = null) {
    /**
     *
     * @author Martin Sweeny
     * @version 2010.0617
     *
     * returns formatted number of bytes.
     * two parameters: the bytes and the precision (optional).
     * if no precision is set, function will determine clean
     * result automatically.
     *
     **/
    $units = array("B","kB","MB","GB","TB","PB","EB","ZB","YB");
    $c=0;
    if(!$p && $p !== 0) {
        foreach($units as $k => $u) {
            if(($b / pow(1024,$k)) >= 1) {
                $r["bytes"] = $b / pow(1024,$k);
                $r["units"] = $u;
                $c++;
            }
        }
        return number_format($r["bytes"],2) . " " . $r["units"];
    } else {
        return number_format($b / pow(1024,$p)) . " " . $units[$p];
    }
}
include("../php/connexion.php");

if(isset($_POST['client'])) {
    $client = $_POST['client'];
}


$query = mysql_query("SELECT * FROM ".$client." ORDER BY ROUND(TotalItemSize) DESC LIMIT 100", $connexion);
$content = '<table width="800" class="cadre" cellspacing="0"><tr background="images/clouds.jpg" class="cadre"><td height="35"><b><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nom</font></b></td><td><b><font color="#FFFFFF">Taille</font></b></td><td><b><font color="#FFFFFF">Nombre d&apos;email</font></b></td><td><b><font color="#FFFFFF">Limite</font></b></td><td><div class="button"></div></td></tr>';
$i=0;
$taille_tot = 0;
while($data=mysql_fetch_array($query)) {
    $dot = explode(".",$data['TotalItemSize']);
    
    if(($dot[0]/2*2) >= 1 ) {
    
        $taille = $data['TotalItemSize']*1024*1024;
        $tailleSuppr = $data['TotalDeletedItemSize']*1024*1024;

        $taille_tot = $taille_tot+($data['TotalItemSize']*1024*1024) + ($data['TotalDeletedItemSize']*1024*1024);

        $bold = '<font color="#000000">';
        $boldEnd = '</font>';

        if($taille > 10737418240 AND $taille < 21474836480) {
            $bold = '<font color="#CC00000">';
            $boldEnd = '</font>';

            } else if ($taille > 21474836480) {
                $bold = '<font color="#9900000">';
                $boldEnd = '</font> <img src="images/warning.png" align="absmiddle" id="warning" style="margin-left:4px;">';
            }
            if ($i%2 == 1) {
                    $couleur = '#FFFFFF';
                    $surligne = " onmouseover=\"javascript:this.style.backgroundColor=\"#FFE07A\";\" onmouseout=\"javascript:this.style.backgroundColor=\"#FFFFFF\";\" onmousedown=\"selectRow(this);\" ";

            } else { 
                    $couleur = 'EAEAEA';
                    $surligne = ' onmouseover=\"javascript:this.style.backgroundColor=\"#FFE07A\";\" onmouseout=\"javascript:this.style.backgroundColor=\"#EAEAEA\";\" onmousedown=\"selectRow(this);\" ';

            }



        $content .= '<tr bgcolor="'.$couleur.'" '.$surligne.'><td height="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.htmlentities($data['DisplayName']).'</td><td>'.$bold.'<b>'.formatBytes($taille).$boldEnd.'</b></td><td>'.$data['ItemCount'].'</td><td colspan="2">'.$data['StorageLimitStatus'].'</td></tr>';
        $i++;
    }
}
$content .= '<tr bgcolor="#999999"><td height="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Total </b></td><td colspan="1"><b>'.formatBytes($taille_tot).'</b></td><td colspan="4">Total utilisateurs : <b>'.$i.'</b></td></tr>';
$content .= '</table>';
  
echo $content;
?>
<form name="pdf" method="POST" action="convert2pdf.php" target="_blank">
    <input type='hidden' value='<?php echo  htmlentities($content); ?>' name='content'>
    <input type='hidden' value='<?php echo $_POST['client']; ?>' name='client'>
</form>