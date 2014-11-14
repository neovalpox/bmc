<script type="text/javascript">
$(function() {
    $("#outilsBox").resizable();
});
$(function() {
    $( "#sliderOpacity" ).slider({
        value:100,
        min: 30,
        max: 100,
        step: 5,
        slide: function(event, ui) {
            $("#chiffreOpacity").text(ui.value + "%");
            $("#outilsBox").css({ opacity: ui.value/100 });
        }
    });
});
</script>
<div style='position:absolute; right:-12px; top:-12px; z-index: 20;'><img src='images/logout.png' id='closeOutilsButton' onclick='cache("outilsBox");' onmouseover="overEffect('closeOutilsButton');" onmouseout="outEffect('closeOutilsButton');"></div>


            <div style="margin-left: 5px;margin-right: 5px; margin-bottom: 5px; margin-top: 5px; height:100%; width:100%;">
                <table width='100%'>
    <?php
    if ($handle = opendir('./outils')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $extension = explode(".", $entry);
                
                if($extension[1] == "exe" || $extension[1] == "msc" ) {
                    if($entry == "putty.exe") {
                        $type = "putty";
                    } else {
                        $type = "exe";
                    }
                }
                echo "<tr><td><img src='images/icons/$type.png' align='absmiddle' style='margin-right:5px;'><a href=\"outils/". $entry." \">$entry</a></td><td></td></tr>";
            }
        }
        closedir($handle);
   }
?>
                
                </table></div>
