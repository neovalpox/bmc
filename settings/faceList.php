<div style='position:absolute; right:-12px; top:-12px;'><img src='images/logout.png' id='closeFaceButton' onclick='cache("selectFace");' onmouseover="overEffect('closeFaceButton');" onmouseout="outEffect('closeFaceButton');"></div>

<center>Selectionner votre face</center>
<?php
$j = 0;
$backgroundTot = 67;
echo "<table width='100%' style='margin-top:15px;'><tr height='65'>";
for($i=0;$i<$backgroundTot;$i++) {
    echo "<td align='center'><img src='images/face/mini/".$i.".png' width='100' height='56' onclick='changeFace(".$i.");' id='face_".$i."'></td>";
    $j++;
    if($j == 5) {
        $j = 0;
        echo "</tr><tr height='65'>";
    }
}
echo "</tr></table>"
?>