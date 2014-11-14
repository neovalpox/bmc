<?php
include("php/connexion.php");
include("php/loged.php");
$query = mysql_query("SELECT * FROM user WHERE login='$CKlogin'");
while($nb=  mysql_fetch_array($query)) {
    $background = $nb['backgroud'];
    $color = $nb['color'];
}
?>
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
        background-image: url("images/bg<?php echo $background; ?>.jpg");
}
.cadre {
	border-style:solid;
	border-width:1px;
	box-shadow: 8px 8px 12px #555;
	background-color:#FFFFFF;
        background-image: url("images/color_<?php echo $color; ?>.jpg");
        background-repeat: no-repeat;
}
div.cadran
{
	position: absolute;
	left: 20px;
	width: 150px;
	top: 20px;
	height: 70px;
	border-top-width: 1px;
	border-top-style: solid;
	border-top-color: #0000FF;
	border-right-width: 1px;
	border-right-style: dashed;
	border-right-color: #EAEAEA;
	background-image: url("./menu.jpg");
	background-repeat: repeat-y;
}

hr
{
	border-color: #EAEAEA;
	border-width: 1px;
	border-style: solid;
}

div.cadran fieldset
{
	border-width: 0px;
}

.margin
{
	margin-left: 17px;
}
.resume
{
	font-size: 10;
}