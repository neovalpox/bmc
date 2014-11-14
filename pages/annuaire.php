<?php
$host="localhost";
$user="bmc";
$pass="superbmc";
$db="phonebook";

$connexion = mysql_connect($host, $user, $pass) or die("Pas de connexion au serveur");
mysql_select_db($db, $connexion) or die(mysql_error());

include("../php/loged.php");

$query = mysql_query("SELECT * FROM phonebook_company ORDER BY name ASC", $connexion);

echo "<div style='margin:10px; overflow-y: scroll; height:96%;'><table width='100%' cellspacing='0'>";
$i = 0;
while($nb = mysql_fetch_array($query)) {
    $nom = $nb['name'];
    $phone = $nb['phone'];
    echo "<tr height='28' id='$i' onMouseOver='overLigne(\"$i\");' onMouseOut='outLigne(\"$i\");'><td>".ucfirst(strtolower($nom))."</td><td><a href='#' onclick='launchCall(\"$ext3CX\",\"$phone\",\"$pin3CX\",\"$nom\");'><font color='#333333'>$phone</font></td></tr>";
    $i++;
}
echo "</table></div>";
?>
<script type="text/javascript">
    function overLigne(id) {
        $("#"+id).css({
            "background" : "-webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,197,120,1)), color-stop(100%,rgba(251,157,35,1)))",
            "font-weight" : ""
        });
    }
    function outLigne(id) {
        $("#"+id).css({
            "background" : "",
            "font-weight" : ""
        });
    }
    function launchCall(ext,phone,pin,nom) {
        affiche("callBox");
        window.localStorage.setItem("ext", ext);
        window.localStorage.setItem("phone", phone);
        window.localStorage.setItem("pin3cx", pin);
        window.localStorage.setItem("nomPhone", nom);
    }
</script>