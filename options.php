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
	background-color:#666666;
}
.cadre {
	border-style:solid;
	border-width:1px;
	box-shadow: 8px 8px 12px #555;
	background-color:#FFFFFF;
        background-image: url("images/color_0.jpg");
        background-repeat: repeat-x;
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
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="icon" type="image/gif" href="favicon.gif" />
<table cellspacing="0" class="cadre" width="480">
<tr height="43" class="cadre"><td class="cadre" align="center" colspan="6"><font color="#FFFFFF"><b>R&eacute;sum&eacute; des sauvegardes</b></font></td></tr>
<tr>
<td>
    <div style="margin:8px;">
   
<?php
include("php/connexion.php");
include("php/loged.php");
$query = mysql_query("SELECT * FROM user WHERE login='$CKlogin'");

while($nb=  mysql_fetch_array($query)) {
    $background = $nb['backgroud'];
    $color = $nb['color'];
    $move = $nb['move'];
    
    if($move == 1) {
        $checkMouvement = "checked";
        $checkValue = 0;
    } else {
        $checkValue = 1;
        $checkMouvement = "";
    }
    
    echo "<script type='text/javascript'>window.localStorage.setItem('oldBackground', '$background');</script>";
    echo "<script type='text/javascript'>window.localStorage.setItem('oldColor', '$color');</script>";
    
    echo "<center><b>Fond d'ecran :</b><br>";
    echo "Mouvement <input type='checkbox' $checkMouvement onclick='javascript:moveCheck(\"$CKlogin\",$checkValue);'><br>";
   
    for($i=1;$i<6;$i++) {
        
        if($i == $background) {
            echo "<a href='#'><img alt='background_$i' id='background_$i' src='images/bg".$i.".jpg' height='200' style='border:3px solid black'></a>&nbsp;";
        } else {
            echo "<a href='javascript:setBackground($i,\"$CKlogin\");' onmouseover='javascript:overBackground($i);' onmouseout='javascript:outBackground($i);'><img id='background_$i' src='images/bg".$i.".jpg' height='200' style='border:3px solid #CCCCCC'></a>&nbsp;";
        }
    }
    
    echo "<br><br><b>Couleur :</b><br>";
    $k = 0;
    for($j=0;$j<8;$j++) {
        if($k == 4) {
            echo "<br>";
            $k = 0;
        }
            $display = "color_".$j;
        if($j == $color) {
            echo "<a href='#'><img id='color_$j' src='images/$display.jpg' width='40' height='40' style='border:3px solid black; margin:2px;'></a>";
        } else {
            echo "<a href='javascript:setColor($j,\"$CKlogin\");' onmouseover='overColor($j);' onmouseout='outColor($j);'><img id='color_$j' src='images/$display.jpg' width='40' height='40' style='border:3px solid #CCCCCC; margin:2px;'></a>";
        }
        $k++;
    }
    
    echo "</center>";
}
?>
        </div>

</td>
</tr>
</table>
<script type="text/javascript">
    oldBackground = window.localStorage.getItem("oldBackground");
    oldColor = window.localStorage.getItem("oldColor");
     function setBackground(id,login) {
         $.post("php/setBackground.php", {background: id, login: login}, function(data){
             $("#background_"+id).css("border", "3px dotted black");
             $("#background_"+oldBackground).css("border", ":0px dotted with");
             window.localStorage.setItem("oldBackground", id);
             window.opener.changeBackground(id);
             window.location.reload(true);
         });
     }
     function setColor(id, login) {
         $.post("php/setColor.php", {color : id, login: login}, function(data){
             $("#color_"+id).css("border", "3px dotted black");
             $("#color_"+oldColor).css("border", ":0px dotted with");
             window.localStorage.setItem("oldColor", id);
             window.opener.changeColor(id);
             window.location.reload(true);
         });
     } 
     function overColor(id) {
         $("#color_"+id).css("border-color", "red");
     }
     function outColor(id) {
         $("#color_"+id).css("border-color", "#CCCCCC");
     }
     
     function overBackground(id) {
        $("#background_"+id).css("border-color", "red");
     }
     function outBackground(id) {
        $("#background_"+id).css("border-color", "#CCCCCC");
     }
     
     function moveCheck(login,checkValue) {
         $.post("php/moveCheck.php", {login: login, check: checkValue}, function(data){
             if(checkValue == 1) {
                 window.opener.startMove2(oldBackground);
             } else {
                 window.opener.stopMove();
             }
         });
     }
</script>