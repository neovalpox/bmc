<script type="text/javascript">
    thisButtonClose = "closeBackupButton";
    thisWindow = "backupBox";
    $("#myId").attr("id", thisButtonClose);
$(function() {
    $( "#backupBox" ).tabs();
});
$(function() {
    $( "#backupBox" ).resizable();
});
$(function() {
    $( "#sliderOpacityBackup" ).slider({
        value:100,
        min: 30,
        max: 100,
        step: 5,
        slide: function(event, ui) {
            $("#chiffreOpacityBackup").text(ui.value + "%");
            $("#backupBox").css({ opacity: ui.value/100 });
        }
    });
});

</script>
<style>
    
    a {
    color: #333333;
    font-weight: bold;
}
a:hover {
    color: #2b81af;
    font-weight: bold;
}
</style>
<div style='position:absolute; right:-12px; top:-12px; z-index: 20;'><img src='../images/logout.png' id='closeBackupButton' onclick='cache("backupBox");' onmouseover="overEffect('closeBackupButton');" onmouseout="outEffect('closeBackupButton');"></div>
<div style='position:absolute; top: -30px; right:0px;'>
    <table><tr><td><div id='sliderOpacityBackup' style='width:120px;'></div></td><td><div id='chiffreOpacityBackup' style='color: #FFFFFF; font-weight: bold; width:30px; font-size: 12px; text-align: center; margin-left: 10px;'>100%</div></td></tr></table>
</div>
<div style="position: absolute; left:0px; top: -25px; z-index: 22;" id="titreFenetre"><b>Sauvegardes</b></div>
    
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Sauvegardes</a></li>
    <li><a href="#tabs-2">Historique</a></li>
  </ul>
    
  <div id="tabs-1">
        <?php
        include("../php/connexion.php");
        include("../php/loged.php");
        ?>
        <script language="javascript" type="text/javascript">
        function click(id,i) {
        //window.alert("CLICK");
        var selected = document.getElementById("selected"+i).value;
        //var statut_deal = document.getElementById("stat_cool"+i).value;

                if(id == "valid") {
                        valid_stat = "1";
                } else if(id == "wrong") {
                        valid_stat = "0";
                } else {
                        valid_stat = "2";
                }

                if(selected == "false") {
                        document.getElementById("stat_cool"+i).value = valid_stat;

                        document.getElementById("selected"+i).value = "true";
                        document.getElementById(id+i).src = "../images/"+id+".png";
                } else {
                        document.getElementById("stat_cool"+i).value = "0";

                        document.getElementById("selected"+i).value = "false";
                        document.getElementById(id+i).src = "../images/"+id+"_b.png";
                }

        }
        </script>
        <form action="../php/valid_insert.php" method="POST" name="insert" id="insert">

        <table cellspacing="0" class="cadre" width="100%">


        <?php
        $query = mysql_query("SELECT * FROM clients", $connexion);
        $query_count = mysql_query("SELECT count(id) FROM clients", $connexion);
        $num_row = mysql_fetch_row($query_count);
        $tot_clients = $num_row[0];
        $i=0;
        while($data=mysql_fetch_array($query)) {

            $prtg = $data['prtg'];
            if($prtg == "" OR $data['type'] == "manuel") {
                $link = "";
                $link_end = "";
                $img_link = "prtg_black";
            } else {
                $link = "<a href='".$data['prtg']."' target='_blank'>";
                $link_end = "</a>";
                $img_link = "prtg";
            }
                        echo "<input type='hidden' name='statut$i' id='stat_cool$i' value='0'>";
                        echo "<input type='hidden' name='selected$i' id='selected$i' value='false'>";
                        $img = "$link<img src='../images/$img_link.png' border='0'alt='PRTG'>$link_end";
                echo 	"<tr><td align='center' height='45'><a href='javascript:click(\"valid\",$i);'><img src='../images/valid_b.png' style='margin-right:3px;' id='valid$i'></a><a href='javascript:click(\"wrong\",$i);'><img src='../images/wrong_b.png' id='wrong$i' width='25' height='25'></a></td>
                                <td><font size='2'>".$data['nom']."</font><br><input type='text' name='remarque$i' size='50%' id='remarque_cool$i' style='display:none;'><font color='#FFB200' size='1'><i>".$data['type']."</i></font></td>
                                <td><input type='hidden' name='nom$i' value='".$data['nom']."' id='nom_cool$i'></td>
                                <td align='center'><b>".$img."</b></td>";
                $i++;
        }
        ?>
<tr>
<td colspan="5" align="center"><input type="hidden" id="tot_clients" name="tot_clients" value="<?php echo $tot_clients; ?>">
    
<!--    <input type="submit" value="Enregistrer" style="margin-right:30px; margin-bottom:10px; margin-top:10px;">-->
    <input type="button" id="buttonSubmit" value="Enregistrer" onclick="sendForm();">

</td>
</tr>

</table>

</form>
</div>
    
    <div id="tabs-2">
        
        <font color='#000000'>
        <center>
        <?php
            include("../php/last_save.php");
        ?>
        </center>
        </font> 
  </div>
</div>

<script type="text/javascript" language="javascript">
    function sendForm() {
        totClient = $("#tot_clients").val();
        
        for(i=0;i<totClient;i++) {
            eval("stat_cool"+i = $("#stat_cool"+i).val());
            eval("nom_cool"+i = $("#nom_cool"+i).val());
            eval("remarque_cool"+i = $("#remarque_cool"+i).val());
            
            alert(stat_cool1);
        }   
        
        $.post("php/valid_insert.php", {stat_cool0:stat_cool0, nom_cool0:nom_cool0, remarque_cool0:remarque_cool0,stat_cool1:stat_cool1, nom_cool1:nom_cool1, remarque_cool1:remarque_cool1,stat_cool2:stat_cool2, nom_cool2:nom_cool2, remarque_cool2:remarque_cool2,stat_cool3:stat_cool3, nom_cool3:nom_cool3, remarque_cool3:remarque_cool3,stat_cool4:stat_cool4, nom_cool4:nom_cool4, remarque_cool4:remarque_cool4,stat_cool5:stat_cool5, nom_cool5:nom_cool5, remarque_cool5:remarque_cool5,stat_cool6:stat_cool6, nom_cool6:nom_cool6, remarque_cool6:remarque_cool6,stat_cool7:stat_cool7, nom_cool7:nom_cool7, remarque_cool7:remarque_cool7,stat_cool8:stat_cool8, nom_cool8:nom_cool8, remarque_cool8:remarque_cool8,stat_cool9:stat_cool9, nom_cool9:nom_cool9, remarque_cool9:remarque_cool9,stat_cool10:stat_cool10, nom_cool10:nom_cool10, remarque_cool10:remarque_cool10}, function(data) {
            alert(data.error);
        })
    }
</script>