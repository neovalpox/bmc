<table widht="100%" cellspacing="0">
<?php
$query = mysql_query("SELECT * FROM rss WHERE user='$CKlogin'", $connexion);
$queryCount = mysql_query("SELECT count(*) FROM rss WHERE user='$CKlogin'", $connexion);

$row = mysql_fetch_row($queryCount);
$nbRSS = $row[0];
if($nbRSS == 0) {
    echo "<tr><td>Vous n'avez aucun Flux RSS enregistré.</td></tr>";
}

while($data=  mysql_fetch_array($query)){
    $img = "<img src='images/rss/".$data['img'].".png' align='absmiddle'>";
    $id = $data['id'];
    echo "<tr><td height='30'>$img <a href=\"javascript:flux('$id');\">".$data['nom']."</a></td></tr>";
}
?>
</table>

<script type="text/javascript">
function flux(id){
    $("#main").fadeOut(300, function() {
        $("#main").html("<center><img src='images/loading.gif' style='margin-top:300px;'></center>");
        $("#main").fadeIn(200);
        $.post("rss/flux.php", {id:id}, function(data) {
            $("#main").fadeOut(300, function() {
                $("#main").html(data);
                $("#main").fadeIn(200);
            });
        });
    });
}

</script>
