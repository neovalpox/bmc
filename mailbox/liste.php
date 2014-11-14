<table cellspacing="0" width="800" class="cadre"><tr background="images/clouds.jpg" height="40" class="cadre"><td><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;<b>Clients</b></font></td></tr>
<?php
//mysql_connect("localhost", "root", "Vertex008821");
//$result = mysql_list_tables("backup_bmc") or die(mysql_error());
//$num_rows = mysql_num_rows($result);
//for ($i = 0; $i < $num_rows; $i++) {
//    $nom = explode("_",mysql_tablename($result, $i));
//    $table = $nom[0]; 
//    if($table == "Mailbox" ) {
//        echo "<tr><td height='28'>&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:link3(\"liste\",\"$nom[1]\",\"$i\");'<b>", $nom[1] , "</b></a></td></tr>";
//   }
//   
//}

include("../php/connexion.php");
$query = mysql_query("SELECT nom FROM MailboxClient", $connexion);

$i = 0;
while($data = mysql_fetch_array($query)) {
    $nom = $data['nom'];
    echo "<tr><td height='28'>&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:link3(\"liste\",\"$nom\",\"$i\");'<b>", $nom , "</b></a></td></tr>";
    $i++;
}
?>

</table>
<script type="text/javascript">
    window.localStorage.setItem("idtrNow", 0);
    window.localStorage.setItem("colorNow", "#FFFFFF");
    $("#idtr_0").css("background-color", "#333333");
    
    function link3(page, nom, i, color) {
        window.localStorage.setItem("idtrOld", window.localStorage.getItem("idtrNow"));
        window.localStorage.setItem("colorOld", window.localStorage.getItem("colorNow"));
        $("#idtr_"+i).css("background-color", "#333333");
        window.localStorage.setItem("idtrNow", i);
        window.localStorage.setItem("colorNow", color);
        
        i_old = window.localStorage.getItem("idtrOld")
        colorOld = window.localStorage.getItem("colorOld")
        $("#idtr_"+i_old).css("background-color", colorOld);
        
        
        $("#findfo").fadeOut(300, function() {
            $.post("mailbox/mailbox.php", {"client": nom}, function(data) {
               $("#findfo").html(data);
                   $("#findfo").fadeIn(300);
               });
        });
        
    }
</script>