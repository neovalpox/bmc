<table class="cadre" width="800" cellspacing="0">
<tr><td background="images/clouds.jpg"><table cellspacing="0" width="100%"><tr background="images/clouds.jpg" height="40" class="cadre"><td width='250'><font color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;Date</b></font></td><td><font color="#FFFFFF"><b>Remarques</b></font></td><td width="40" align="center"><font color="#FFFFFF"><b>Statut</b></font></td><td width="60" align="center"><font color="#FFFFFF"><b>User</b></font></td></tr>

<?php
include("php/connexion.php");
$query = mysql_query("SELECT * FROM sauvegardes WHERE remarque!='' GROUP BY date, remarque, valide ORDER BY date DESC LIMIT 12", $connexion);
$i=0;
$j=0;
while($nb=mysql_fetch_array($query)) {
	/*
	if($i == 0) {
		$date[$j] = $nb['date']['date'];
	}
	//echo $date.$j."<br>";
	$date.$i = $nb['date'];
	$j = $i-1;
	if($date.$i == $date.$j) {
		$space = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	} else {
		$space = "";
	}
	*/
	if ($i%2 == 1) {
		$couleur = "#FFFFFF";
		$surligne = " onmouseover=\"javascript:this.style.backgroundColor='#FFE07A';\" onmouseout=\"javascript:this.style.backgroundColor='#FFFFFF';\" onmousedown=\"selectRow(this);\" ";

	} else { 
		$couleur = "EAEAEA";
		$surligne = " onmouseover=\"javascript:this.style.backgroundColor='#FFE07A';\" onmouseout=\"javascript:this.style.backgroundColor='#EAEAEA';\" onmousedown=\"selectRow(this);\" ";

	}
	echo "<tr height='28' bgcolor='$couleur'".$surligne.">";
	$date = $nb['date'];
	$new_date = explode(" ",$date);
        $date = explode("-", $new_date[0]);
	$date = $date[2]."/".$date[1]."/".$date[0];
        
        $date = $date." à ".$new_date[1];
	$user = $nb['user'];
	$statut = $nb['valide'];
	//$date = $nb['date']
	if($statut == 1) {
		$statut = "<img src='images/valid.png'>";
		$remarque = "";
	} else if($statut == 2) {
		$statut = "<img src='images/wait.png' height='25' width='25'>";
		$remarque = "<font color='#FFB200'><b>".$nb['nom']."</b> : ".htmlentities($nb['remarque'])."</font>";
	} else {
		$statut = "<img src='images/wrong.png' height='25' width='25'>";
		$remarque = "<font color='#FFB200'><b>".$nb['nom']."</b> : ".htmlentities($nb['remarque'])."</font>";
	}
	if($new_date[0] == date("Y-m-d")) {
		$date = "Aujourd'hui";
		echo "<td height='35'><b>&nbsp;&nbsp;&nbsp;".$date ."</td><td><i>". $remarque."</i></td><td align='center'>". $statut."</b></td><td align='center'><a href='javascript:user(\"$user\");'><i>". $user."</i></a></b></td>";
	} else {
		echo "<td height='35'>&nbsp;&nbsp;&nbsp;".$date ."</td><td><i>". $remarque."</i></td><td align='center'>". $statut."</b></td><td align='center'><a href='javascript:user(\"$user\");'><i>". $user."</i></a></td>";
	}
	echo "</tr>";
	$i++;
	$date.$j = $date.$i;
}
?>
</tr></td>
</table>
        </table>