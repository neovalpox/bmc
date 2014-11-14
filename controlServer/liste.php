<table cellspacing="0" width="800" class="cadre"><tr background="images/clouds.jpg" height="40" class="cadre"><td colspan="2"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;<b>Clients</b></font></td></tr>
<?php
include("../php/connexion.php");
$query = mysql_query("SELECT * FROM ControlServer") or die(mysql_error());
$i=0;
while($data=  mysql_fetch_array($query)) {
    $nom = $data['nom'];
    $id = $data['id'];
    echo "<tr><td height='28'>&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:history(\"$id\",\"$i\");'<b>".$nom."</b></a></td><td align='right'><a href='#' onclick='add(\"$id\")'><img src='images/add.png' align='absmiddle'></a></td></tr>";
    $i++;
}

//mysql_free_result($result);
?>

</table>
<script type="text/javascript">
    window.localStorage.setItem("idtrNow", 0);
    window.localStorage.setItem("colorNow", "#FFFFFF");
    $("#idtr_0").css("background-color", "#333333");
    function add(id) {
        $("#findfo").fadeOut(300, function() {
            $.post("controlServer/form.php", {"id": id}, function(data) {
               $("#findfo").html(data);
                   $("#findfo").fadeIn(300);
               });
        });
    }
    function history(id, i, color) {
        window.localStorage.setItem("idtrOld", window.localStorage.getItem("idtrNow"));
        window.localStorage.setItem("colorOld", window.localStorage.getItem("colorNow"));
        $("#idtr_"+i).css("background-color", "#333333");
        window.localStorage.setItem("idtrNow", i);
        window.localStorage.setItem("colorNow", color);
        
        i_old = window.localStorage.getItem("idtrOld")
        colorOld = window.localStorage.getItem("colorOld")
        $("#idtr_"+i_old).css("background-color", colorOld);
        
        
        $("#findfo").fadeOut(300, function() {
            $.post("controlServer/client.php", {"id": id}, function(data) {
               $("#findfo").html(data);
                   $("#findfo").fadeIn(300);
               });
        });
        
    }
</script>