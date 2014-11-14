<?php header('Access-Control-Allow-Origin: *'); ?>
<script src="../js/jquery.js"></script>
<style>
    body {
        font-family: "Verdana";
        font-size: 5px;
        
    }
    table {
        font-size: 12px;
    }
</style>
<body>
    <div style='display: none; position:absolute; top:50px; left:50px; width:900px; height:800px; border: 2px solid #666; background-color: #9d9d9d;' id='loader'></div>
    <div style='display: none; position:absolute; top:40px; left:940px;' id='closer'><img src='../images/logout.png' onclick='close();'></div>
<?php
include("connexion.php");

$query = mysql_query("SELECT * FROM `TABLE 2` ORDER BY hostname ASC", $connexion);


echo "<table width='800' align='center' style='border:4px solid #333;' cellspacing='0' cellpadding='0'>";
echo "<tr bgcolor='#999999'><td height='30'><b>IP</b></td><td><b>ping</b></td><td><b>hostname</b></td><td><b>ports</b></td></tr>";
while($nb = mysql_fetch_array($query)) {
    echo "<tr><td height='20'><a href='#' onclick='launch(\"".$nb['IP']."\");'>".$nb['IP']."</a></td><td>".$nb['Ping']."</td><td>".$nb['Hostname']."</td><td>".$nb['Ports']."</td></tr>";
}
echo "</table>";
?>
</body>

<script type='text/javascript'>
    function launch(ip) {
        $("#loader").load("http://"+ip+"/");
        $("#loader").fadeIn(300);
        $("#closer").fadeIn(300);
    }
    function close() {
        $("#loader").fadeOut(150);
        $("#closer").fadeOut(150);
    }
    </script>