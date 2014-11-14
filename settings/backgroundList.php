<div style='position:absolute; right:-12px; top:-12px;'><img src='images/logout.png' id='closeBackgroundButton' onclick='cache("selectBackground");' onmouseover="overEffect('closeBackgroundButton');" onmouseout="outEffect('closeBackgroundButton');"></div>

<center>Selectionner votre fond d'écran.</center>
<?php
$j = 0;
$backgroundTot = 25;
echo "<table width='100%' style='margin-top:15px;'><tr height='65'>";
for($i=0;$i<$backgroundTot;$i++) {
    echo "<td align='center'><img src='images/background/mini/backgroundLight".$i.".jpg' width='100' height='56' onclick='changeBackground(".$i.");' id='wallpaper_".$i."' class='borderImage'></td>";
    $j++;
    if($j == 5) {
        $j = 0;
        echo "</tr><tr height='65'>";
    }
}
echo "</tr></table>"
?>