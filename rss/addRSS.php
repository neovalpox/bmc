<?php
include("../php/connexion.php");
include("../php/loged.php");
?>
<script src="../js/jquery.js"></script>
<style type="text/css">
    <?php include('style.php'); ?>
</style>
<form name="formAjout" action="validAjout.php" method="POST">
﻿<table class="cadre" cellspacing="0" width="100%">
    
    <tr class="cadre"><td height="43" align="center"><font color="#FFFFFF"><img src="../images/rss.png" align="absmiddle" id="titreImage"> <b>Ajouter Flux RSS</b></font></td></tr>
    <tr class="vierge"><td>
            <div style="margin:8px;">
                Nom du Flux :<br>
                <input type="text" style="text-align: center" name="nom" size="50%"><br>
                Lien du Flux :<br>
                <input type="text" style="text-align: center" name="adresse" size="50%"><br>
                <input type="hidden" name="idImage" id="idImage" value="1">
            </div>
        </td>
        <td width="200" rowspan="2">
            <table width="100%" cellspacing="0"><tr>
            <?php
            $j = 0;
            for($i=1;$i<10;$i++) {
                if($j == 3) {
                    echo "</tr><tr>";
                    $j = 0; 
                }
                echo '<td><a href="#" onclick="selectImage(\''.$i.'\')"><img src="../images/rss/'.$i.'.png" id="image'.$i.'"></a></td>';
                $j++;
            }
            
            ?>
                </tr></table>
        </td>
        
    </tr>
    <tr><td colspan="2"><center><a href="#" onclick="document.formAjout.submit();">Enregistrer</a> <img src="../images/save.png" align="absmiddle"></center></td></tr>
</table>
</form>
<script type="text/javascript">
    function selectImage(id) {
        $("#titreImage").attr("src", "../images/rss/"+id+".png");
        $("#idImage").val(id);
    }
</script>