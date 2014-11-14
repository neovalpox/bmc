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
	font-color:#FFFFFF;
	background-color:#000000;
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
<?php

$ip = $_GET['ip'];

?>
<form action='valider.php' method='POST'>
<font color='#FFFFFF'><b>Nom </b></font><input type='text' name='nom'><input type='submit' name='envoyer' value='Enregistrer'>
<input type='hidden' name='ip' value='<?php echo $ip; ?>'>
<br><br>

<iframe src="http://<?php echo $ip; ?>" width='1280' align='center' height='600'>

</iframe>