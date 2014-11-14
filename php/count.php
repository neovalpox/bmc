
<?php
include("connexion.php");
$query = mysql_query("SELECT * FROM clients", $connexion);

echo "<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Client</b></i></td><td align='center'><b><i>Valid&eacute;e</b></i></td><td align='center'><b><i>Erreur</b></i></td></tr>";
$i=0;
while($data=mysql_fetch_array($query)) {
    $nom = $data['nom'];
    $query_count2 = mysql_query("SELECT COUNT(valide) FROM sauvegardes WHERE nom='$nom' AND valide='1'", $connexion);
    $rom2 = mysql_fetch_row($query_count2);
    $tot2 = $rom2[0];

    $query_count3 = mysql_query("SELECT COUNT(valide) FROM sauvegardes WHERE nom='$nom' AND valide='0'", $connexion);
    $rom3 = mysql_fetch_row($query_count3);
    $tot3 = $rom3[0];
    
    if ($i%2) {
        $color = "#EAEAEA";
    } else {
        $color = "#FFFFFF";
    }
    echo "<tr id='idtr_$i' bgcolor='$color'><td height='35' width='500'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:link2(\"log\",\"$nom\",\"$i\",\"$color\");'>".$nom."</a></td><td align='center'><i>$tot2</i></td><td align='center'><i>$tot3</i></td></tr>";
    $i++;
}
?>
<script type="text/javascript">
    window.localStorage.setItem("idtrNow", 0);
    window.localStorage.setItem("colorNow", "#FFFFFF");
    $("#idtr_0").css("background-color", "#333333");
    
    function link2(page, nom, i, color) {
        window.localStorage.setItem("idtrOld", window.localStorage.getItem("idtrNow"));
        window.localStorage.setItem("colorOld", window.localStorage.getItem("colorNow"));
        $("#idtr_"+i).css("background-color", "#333333");
        window.localStorage.setItem("idtrNow", i);
        window.localStorage.setItem("colorNow", color);
        
        i_old = window.localStorage.getItem("idtrOld")
        colorOld = window.localStorage.getItem("colorOld")
        $("#idtr_"+i_old).css("background-color", colorOld);
        
        
        $("#findfo").fadeOut(300, function() {
            $.post("log.php", {"nom": nom}, function(data) {
               $("#findfo").html(data);
                   $("#findfo").fadeIn(300);
               });
        });
        
    }
</script>