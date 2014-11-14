
<?php
include("php/connexion.php");
include("php/loged.php");
?>
<script language="javascript" type="text/javascript">
function click(id,i) {
//window.alert("CLICK");
var selected = document.getElementById("selected"+i).value;
//var statut_deal = document.getElementById("stat_cool"+i).value;
	
	if(id == "valid") {
		valid_stat = "1";
	} else if(id == "wrong") {
		valid_stat = "0";
	} else {
		valid_stat = "2";
	}

	if(selected == "false") {
		document.getElementById("stat_cool"+i).value = valid_stat;
		
		document.getElementById("selected"+i).value = "true";
		document.getElementById(id+i).src = "images/"+id+".png";
	} else {
		document.getElementById("stat_cool"+i).value = "0";
		
		document.getElementById("selected"+i).value = "false";
		document.getElementById(id+i).src = "images/"+id+"_b.png";
	}
	
}
</script>
<form action="php/valid_insert.php" method="POST" name="insert">

<table cellspacing="0" class="cadre" width="800">

<tr height="43" class="cadre">
<td align="center" width="70" background="images/clouds.jpg"></td>
<td background="images/clouds.jpg"><font color="#FFFFFF"><b>Nom</b></font></td>
<td background="images/clouds.jpg"><font color="#FFFFFF"><b>Remarque</b></font></td>
<td align='center' background="images/clouds.jpg" width="100"><font color="#FFFFFF"><b>Connexion</b></font></td>
</tr>
<tr><td colspan="5" height="10"></td></tr>

<?php
$query = mysql_query("SELECT * FROM clients", $connexion);
$query_count = mysql_query("SELECT count(id) FROM clients", $connexion);
$num_row = mysql_fetch_row($query_count);
$tot_clients = $num_row[0];
$i=0;
while($data=mysql_fetch_array($query)) {
    
    $prtg = $data['prtg'];
    if($prtg == "" OR $data['type'] == "manuel") {
        $link = "";
        $link_end = "";
        $img_link = "prtg_black";
    } else {
        $link = "<a href='".$data['prtg']."' target='_blank'>";
        $link_end = "</a>";
        $img_link = "prtg";
    }
		echo "<input type='hidden' name='statut$i' id='stat_cool$i' value='0'>";
		echo "<input type='hidden' name='selected$i' id='selected$i' value='false'>";
		$img = "$link<img src='images/$img_link.png' border='0'alt='PRTG'>$link_end
				<a href=".$data['rdp']."><img src='images/RDC.gif' border='0' alt='Connexion RDP'></a>";
	echo 	"<tr><td align='center' height='45'><a href='javascript:click(\"valid\",$i);'><img src='images/valid_b.png' style='margin-right:3px;' id='valid$i'></a><a href='javascript:click(\"wrong\",$i);'><img src='images/wrong_b.png' id='wrong$i' width='25' height='25'></a></td>
			<td width='220'>".$data['nom']."<br><font color='#FFB200' size='1'><i>".$data['type']."</i></font></td>
			<td><input type='hidden' name='nom$i' value='".$data['nom']."'>"
                        . "<input type='text' name='remarque$i' size='60'></td>
			";
	$i++;
}
?>
<tr>
<td colspan="5" align="right"><input type="hidden" name="tot_clients" value="<?php echo $tot_clients; ?>"><input type="submit" value="Enregistrer" style="margin-right:30px; margin-bottom:10px; margin-top:10px;"></td>
</tr>

</table>

</form>