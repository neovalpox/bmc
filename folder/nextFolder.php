<?php
//$directory = $_POST["nextFolder"]."/";
//$directoryName = $_POST["nextFolder"];
//$num = $_POST["num"];
//$numBack = $_POST["num"]-1;
//$totSubFolder = $num+1;
//
//$folderBack = "";
//
//$folderArray = explode("/",$directoryName);
//
//for($i=0;$i<$totSubFolder;$i++) {
//    $folderBack .= $folderArray[$i]."/";
//}
// 
//$files = glob($directory . "*");
//
//echo "<table width='100%'>";
//
//if($directoryName != "/samba/share" or $directoryName != "/samba/share/") {
//    echo "<tr><td width='32'><img src='images/miniFolder.png'></td><td><a href='#' onclick='prevFolder(\"".$folderBack."\", ".$numBack.")'>..</td></tr>";
//}
//foreach($files as $file)
//{
// if(is_dir($file))
// {
//     $fileShort = explode("/", $file);
//  echo "<tr><td width='32'><img src='images/miniFolder.png'></td><td><a href='#' onclick='chargeFolder(\"".htmlentities($file)."\", ".$num.")'>".end($fileShort)."</td></tr>";
// }
//}
//echo "</table>";
?>

<?php
$directory = $_POST["nextFolder"]."/";
$directoryName = $_POST["nextFolder"];
$num = $_POST["num"];
$numBack = $_POST["num"]-1;
$totSubFolder = $num+1;
            echo "<table width='100%'>";
    if ($handle = opendir($directory)) {
        while (false !== ($entry = readdir($handle))) {

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
//                   $directoryNew = str_replace("/samba/share/", "", $directory);
//                   $fullPath = str_replace("/","\\", $directoryNew);
                   echo "<tr><td><img src='images/icons/$type.png' align='absmiddle' style='margin-right:5px;'><a href='".$directory."".$entry."'>$entry</a></td><td></td></tr>";
                  } else {
                      $type = "folder";
                      echo "<tr><td><img src='images/icons/$type.png' align='absmiddle' style='margin-right:5px;'><a href='#' onclick='chargeFolder(\"$directory".htmlentities($entry)."\", 1)'>$entry</a></td><td></td></tr>";
                  }
//               
                
        }
        closedir($handle);
   }
   echo "</table>";
?>