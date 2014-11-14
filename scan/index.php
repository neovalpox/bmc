<link rel="icon" type="image/png" href="favicon.png" />
<title>Network Scanner BMC</title>
<style>
a:link {
	color: #C60;
	font-weight: bold;
}
a:visited {
	color: #C60;
	font-weight: bold;
}
a:hover {
	color: #F90;
	font-weight: bold;
}
a:active {
	color: #C60;
	font-weight: bold;
}

table {
	font-family:"Verdana";
	font-size:13;
}
body {
	font-family:"Verdana";
	font-size:12;
	background-color:#EEEEEE;
	background-image:url('images/bmc.png');
	background-repeat:no-repeat;
	background-position:right bottom;
	background-attachment:fixed;
}
.cadre {
	border-style:groove;
	border-width:5px;
	box-shadow: 8px 8px 12px #555;
	background-color:#FFFFFF;
}
</style>
 <SCRIPT language="javascript">
    function popup(page,host) {
      window.open("affiche.php?ip="+page, host, 'resizable=no, location=no, width=1300, height=700, menubar=no, status=no, scrollbars=no, menubar=no, left=200, top=200');
    }
  </SCRIPT>
<?php
$host="localhost";
$user="bmc";
$pass="superbmc";
$db="networkscan";

$connexion = mysql_connect($host, $user, $pass) or die("Pas de connexion au serveur");
mysql_select_db($db, $connexion) or die(mysql_error());

mysql_connect($host, $user, $pass) or die(mysql_error());
$query = mysql_query("SELECT * FROM `TABLE 1` WHERE ping != '[n/a]' GROUP BY IP", $connexion);

echo "<table align='center' class='cadre'>";
echo "<tr><td width='500' height='30'><b>Nom</b></td><td width='120'><b>IP</b></td><td width='50'><b>Ping</b></td><td><b>Hostname</b></td></tr>"; 
while($data=mysql_fetch_array($query) or die(mysql_error())) {
        $mystring = $data['Nom'];
        $find = "Switch";
        $pos = strpos($mystring, $find);
        if($pos === false) {
            $b = "";
            $b2 = "";
        } else {
            $b = "<font color='#FF0000'><b>";
            $b2 = "</b></font>";
        }
	echo "<tr><td>".$b.$data['Nom'].$b2."</td><td><a href=javascript:popup(\"".$data['IP']."\")>".$data['IP']."</a></td><td>".$data['Ping']."</td><td>".$data['Hostname']."</td></tr>";
}
echo "</table>";
?>