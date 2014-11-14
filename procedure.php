<div style='position:absolute; right:-12px; top:-12px; z-index: 21;'>
    <img src='images/logout.png' id='closeProceduresButton' onclick='cache("proceduresBox");' onmouseover="overEffect('closeProceduresButton');" onmouseout="outEffect('closeProceduresButton');">
</div>

            <div style="margin-left: 5px;margin-right: 5px; margin-bottom: 5px; margin-top: 5px; overflow-y: scroll; height:100%; width:100%;">
                <table width='100%'>
    <?php
    if ($handle = opendir('./procedures')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $extension = explode(".", $entry);
                
                if($extension[1] == "doc" || $extension[1] == "docx" ) {
                    $type = "word";
                }
                echo "<tr><td><img src='images/$type.png' align='absmiddle' style='margin-right:5px;'><a href=\"procedures/". $entry." \">$entry</a></td><td></td></tr>";
            }
        }
        closedir($handle);
   }
?>
                
                </table></div>