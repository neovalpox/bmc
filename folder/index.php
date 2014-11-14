<script type="text/javascript">
$(function() {
    $( "#folderBox" ).resizable();
});
$(function() {
    $( "#sliderOpacityFolder" ).slider({
        value:100,
        min: 30,
        max: 100,
        step: 5,
        slide: function(event, ui) {
            $("#chiffreOpacityFolder").text(ui.value + "%");
            $("#folderBox").css({ opacity: ui.value/100 });
        }
    });
});
</script>
<div style='position:absolute; right:-12px; top:-12px; z-index: 20;'><img src='images/logout.png' id='closeFolderButton' onclick='cache("folderBox");' onmouseover="overEffect('closeFolderButton');" onmouseout="outEffect('closeFolderButton');"></div>
<div style='position:absolute; top: -30px; left:0px;'>
    <table><tr><td><div id='sliderOpacityFolder' style='width:120px;'></div></td><td><div id='chiffreOpacityFolder' style='color: #FFFFFF; font-weight: bold; width:30px; font-size: 12px; text-align: center; margin-left: 10px;'>100%</div></td></tr></table>
</div>
    <div id='folder1' style='position:absolute; top:15px; left:15px; width:94%; height:90%; overflow-y: scroll;'>
    <?php
//$directory = "/samba/share/";
// 
//$files = glob($directory . "*");
//
//
//echo "<table width='100%'>";
//foreach($files as $file)
//{
// if(is_dir($file))
// {
//     $fileShort = explode("/", $file);
//  echo "<tr><td width='32'><img src='images/miniFolder.png'></td><td><a href='#' onclick='chargeFolder(\"".htmlentities($file)."\", 1)'>".$fileShort[3]."</td></tr>";
// }
//}
//echo "</table>";
?>
        
            <?php
            echo "<table width='100%'>";
    if ($handle = opendir('/samba/share')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                if (strpos($entry, '.') !== false) {
                   $extension = explode(".", $entry);
                   if(end($extension) == "exe" || end($extension) == "msc") {
                       if($entry == "putty.exe") {
                           $type = "putty";
                       } else {
                           $type = "exe";
                       }
                   } else if(end($extension) == "jpg" || end($extension) == "png" || end($extension) == "JPG" || end($extension) == "jpeg" || end($extension) == "gif" || end($extension) == "tif"){
                       $type = "images";
                   } else {
                       $type = end($extension);
                   }
                  } else {
                      $type = "folder";
                  }
//               
                echo "<tr><td><img src='images/icons/$type.png' align='absmiddle' style='margin-right:5px;'><a href='#' onclick='chargeFolder(\"/samba/share/".htmlentities($entry)."\", 1)'>$entry</a></td><td></td></tr>";
            }
        }
        closedir($handle);
   }
   echo "</table>";
?>
    </div>
<div id='folder2' style='display: none; position:absolute; top:15px; left:15px; width:94%; height:90%; overflow-y: scroll;'></div>
<div id='folder3' style='display: none; position:absolute; top:15px; left:15px; width:94%; height:90%; overflow-y: scroll;'></div>
<div id='folder4' style='display: none; position:absolute; top:15px; left:15px; width:94%; height:90%; overflow-y: scroll;'></div>
<div id='folder5' style='display: none; position:absolute; top:15px; left:15px; width:94%; height:90%; overflow-y: scroll;'></div>
<div id='folder6' style='display: none; position:absolute; top:15px; left:15px; width:94%; height:90%; overflow-y: scroll;'></div>
<div id='folder7' style='display: none; position:absolute; top:15px; left:15px; width:94%; height:90%; overflow-y: scroll;'></div>

<script type='text/javascript'>
    window.localStorage.setItem("currentFolderNum", 1);
    
    function chargeFolder(nom, num) {
        
        nextFolderNum = (num/2*2)+1;
        $("#debugLog").html("FolderName : "+nom+"<br>"+$("#debugLog").html());
        
        currentFolder = nom;
        window.localStorage.setItem("currentFolderName", currentFolder);
        var options = {};
        
        $("#debugLog").html("FolderName : "+currentFolder+"<br>"+$("#debugLog").html());
        $( "#folder"+num).hide( "slide", options, 200, function() {
            $.post("folder/nextFolder.php", {nextFolder: currentFolder, num: nextFolderNum}, function(data){
                $( "#folder"+(num+1) ).html(data);
                $( "#folder"+(num+1) ).show( "slide", {direction: 'right'}, 200)
            })
            
        });
    }
    
    function prevFolder(nom, num) {
        currentFolderNum = window.localStorage.getItem("currentFolderNum");
        
        currentFolder = nom;
        window.localStorage.setItem("currentFolderName", currentFolder);
        $("#debugLog").html("FolderBack : "+nom+"<br>"+$("#debugLog").html());
        var options = {};
        $( "#folder"+(num+1) ).hide( "slide", {direction: 'right'}, 200, function() {
            $.post("folder/nextFolder.php", {nextFolder: nom, num: num}, function(data){
                $( "#folder"+(num) ).html(data);
                $( "#folder"+(num) ).show( "slide", {direction: 'left'}, 200)
            })
            
        });
    }

</script>