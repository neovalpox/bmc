<?php
$todayDate = date("Y-m-d");
$lundi = date("d/m/Y",strtotime(date("Y-m-d", strtotime($todayDate)) . " -1 day"));
$mardi = date("d/m/Y");
$mercredi = date("d/m/Y",strtotime(date("Y-m-d", strtotime($todayDate)) . " +1 day"));
$jeudi = date("d/m/Y",strtotime(date("Y-m-d", strtotime($todayDate)) . " +2 day"));
$vendredi = date("d/m/Y",strtotime(date("Y-m-d", strtotime($todayDate)) . " +3 day"));
$samedi = date("d/m/Y",strtotime(date("Y-m-d", strtotime($todayDate)) . " +4 day"));
$dimanche = date("d/m/Y",strtotime(date("Y-m-d", strtotime($todayDate)) . " +5 day"));
?>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<table cellspacing="0" class="cadre" width="800">
<tr height="43" class="cadre"><td background="images/clouds.jpg" align="center" colspan="6"><font color="#FFFFFF"><b>Fiches d'heures</b></font></td></tr>
<tr>
<td>
    <div style="margin:8px;">
        <table width="100%" cellspacing="0">
            <tr>
                <td width="43" height="45"></td><td width="1" bgcolor="#EAEAEA" rowspan="51"></td>
                <td width="107" align="center"><?php echo $lundi ?><br><b>Lundi</b></td>
                <td width="1" bgcolor="#EAEAEA" rowspan="51"></td>
                <td width="107" align="center"><?php echo $mardi ?><br><b>Mardi</b></td>
                <td width="1" bgcolor="#EAEAEA" rowspan="51"></td>
                <td width="107" align="center"><?php echo $mercredi ?><br><b>Mercredi</b></td>
                <td width="1" bgcolor="#EAEAEA" rowspan="51"></td>
                <td width="107" align="center"><?php echo $jeudi ?><br><b>Jeudi</b></td>
                <td width="1" bgcolor="#EAEAEA" rowspan="51"></td>
                <td width="107" align="center"><?php echo $vendredi ?><br><b>Vendredi</b></td>
                <td width="1" bgcolor="#EAEAEA" rowspan="51"></td>
                <td width="107" align="center"><?php echo $samedi ?><br><b><font color="#CCCCCC">Samedi</font></b></td>
                <td width="1" bgcolor="#EAEAEA" rowspan="51"></td>
                <td width="107" align="center"><?php echo $dimanche ?><br><b><font color="#CCCCCC">Dimanche</font></b></td>
            </tr>
            <tr>
                <td colspan="15" height="1" bgcolor="#EAEAEA"></td>
            </tr>
            <?php
            $j=1;
                for($i=0;$i<15;$i++) {
                    $heure = 6+$i;
                    if($j==0) {
                        $demi = "30";
                    } else {
                        $demi = "00";
                    }
                    echo '<tr><td>'.$heure.'h'.$demi.'</td>';
                    if($demi == "00") {
                        for($f=0;$f<7;$f++) {
                            $surligne = " onmouseover=\"javascript:this.style.backgroundColor='#FFE07A';\" onmouseout=\"javascript:this.style.backgroundColor='#FFFFFF';\" onmousedown=\"selectRow(".$i.",".$f.");\" ";
                            echo '<td id="'.$i.'/'.$f.'" align="center" '.$surligne.' rowspan="2" height="52"></td>';
                        }
                    }
                    echo '</tr>';
                    
                    $j++;
                    if($demi == "00") {
                        $j = 0;
                        $i--;
                    } else {
                        echo '<tr><td colspan="15" height="1" bgcolor="#EAEAEA"></td></tr>';
                    }
                }
            ?>
        </table>
    </div>

</td>
</tr>
</table>
<script type="text/javascript">
    function selectRow(i,f) {
        var jour = new Array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");
        window.open("time/insertTime.php?jour="+jour[f]+"&heure="+i, "Time", "width=500, height=570, toolbar=no, adressbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no, top=350, left=600");
    }
</script>