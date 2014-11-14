<table width="100%">
    <tr height="23">
        <td><h3>Prénom</h3></td>
        <td><h3>Nom</h3></td>
        <td><h3>Société</h3></td>
        <td><h3>Actions</h3></td>
    </tr>
<?php
include("php/connexion.php");
$queryUsers = mysql_query("SELECT * FROM users ORDER BY nom ASC", $connexion);

while($data=mysql_fetch_array($queryUsers)) {
        $id = $data['id'];
	$nom = $data['nom'];
	$prenom = $data['prenom'];
	$societe = $data['societe'];
	$date = $data['date'];
	$time = $data['time'];
	
        echo "<tr>";
        echo "<td>$prenom</td><td>$nom</td><td>$societe</td><td><img src='images/delete.png' onclick='deleteUser($id);'><img src='images/print.png' onclick='affichePrint($id);' style='margin-left:5px;'></td>";
        if($date != "0000-00-00") {
            
            echo "</tr><tr>";
            echo "<td colspan='3' align='right'><i>connecté le <b>$date</b> à <b>$time</b></i></td></tr>";
        }
}
?>
</table>