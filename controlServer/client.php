<table cellspacing="0" width="800" class="cadre"><tr background="images/clouds.jpg" height="40" class="cadre"><td colspan="2"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;<b>Formulaire</b></font></td></tr>
<tr><td height="15"></td></tr>
<?php
$id = $_POST['id'];
include("../php/connexion.php");
$query = mysql_query("SELECT * FROM clientControlServer WHERE idClient='$id' ORDER BY date ASC" , $connexion);
while($nb=mysql_fetch_array($query)){
    echo "<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"javascript:popup('".$nb['id']."')\">".$nb['date']."</a></td></tr>";
}
echo "<tr><td height='15'></td></tr>";
?>

<script type="text/javascript">
    function popup(id) {
        window.open ('controlServer/affiche.php?id='+id, 'Contrôle Serveur', config='height=900, width=820, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');
    }
</script>