<?php
$query = mysql_query("SELECT domain FROM user WHERE user='$CKlogin'", $connexion);

$domain = mysql_result($query,0,"domain");
?>

<input type='hidden' value='<?php echo $domain; ?>' id='domain'>

<table class="cadre" cellspacing="0" width="290" align='center'>
    <tr background="../images/clouds.jpg" class="cadre"><td height="43" align="center"><font color="#FFFFFF"><b>Menu</b></font></td></tr>
    <tr><td>
<div id="menu" style="margin:8px;">
    Bonjour <b><?php echo htmlentities($CKnom); ?> </b>!<br>

<div id='menuIT' style='display:none;'>
<br><center><i>Dernier contr&ocirc;le des sauvegardes <BR><b><?php include("../php/last_save.php"); ?></b></i></center><br>
<a href='javascript:link("info");'><img src='../images/oubli.png' border='0' align='absmiddle'></a> <a href='javascript:link("info");'><b>Accueil</b></a><br>
<a href='javascript:link("time");'><img src='../images/time.png' height='25' width='25' border='0' align='absmiddle'></a> <a href='javascript:link("time");'><b>Fiche d'heure </b></a><br>
<a href='javascript:link("insert");'><img src='../images/inscription.png' border='0' align='absmiddle'></a> <a href='javascript:link("insert");'><b>Sauvegarde du jour </b></a><br>
<!--<a href='javascript:link("history");'><img src='images/history.gif' border='0' align='absmiddle'></a> <a href='javascript:link("history");'><b>Consulter les sauvegardes </b></a><br>-->
<a href='javascript:link("mailbox");'><img src='../images/mailbox.png' height='25' border='0' align='absmiddle'></a> <a href='javascript:link("mailbox");'><b>Taille Mailbox </b></a><br>
<a href='javascript:link("server");'><img src='../images/server.png' height='25' border='0' align='absmiddle'></a> <a href='javascript:link("server");'><b>Contrôle des serveurs clients </b></a><br>
<a href='javascript:link("maintenance");'><img src='../images/maintenance.png' height='25' border='0' align='absmiddle'></a> <a href='javascript:link("maintenance");'><b>Maintenance informatique </b></a><br>
<a href='javascript:link("powershell");'><img src='../images/powershell.png' height='25' border='0' align='absmiddle'></a> <a href='javascript:link("powershell");'><b>PowerShell </b></a><br>
<a href='javascript:link("procedure");'><img src='../images/procedure.png' height='25' border='0' align='absmiddle'></a> <a href='javascript:link("procedure");'><b>Procédures d'installation </b></a>
</div>

<div id='menuTous' style='display:none;'>
<a href='javascript:link("info");'><img src='../images/oubli.png' border='0' align='absmiddle'></a> <a href='javascript:link("info");'><b>Accueil</b></a><br>
<a href='javascript:link("time");'><img src='../images/time.png' height='25' width='25' border='0' align='absmiddle'></a> <a href='javascript:link("time");'><b>Fiche d'heure </b></a><br>
</div>
</div></td></tr></table>
<script type="text/javascript">
    domain = $("#domain").val();
    if(domain == "it") {
        $("#menuIT").show();
        $("#menuTous").hide();
    } else {
        $("#menuIT").hide();
        $("#menuTous").show();
    }
    
    
    function link(page) {
        if(page == "mailbox") {
            window.localStorage.setItem("page", page);
            $("#findfo").fadeOut(200, function() {
             $("#main").fadeOut(300, function() {
                $("#main").load("mailbox/liste.php", function() {
                    $("#main").fadeIn(200);
                });
            });
        });
        } else if(page == "server") {
            window.localStorage.setItem("page", page);
            $("#findfo").fadeOut(200, function() {
             $("#main").fadeOut(300, function() {
                $("#main").load("controlServer/liste.php", function() {
                    $("#main").fadeIn(200);
                });
            });
        });
        } else if(page == "time") {
            window.localStorage.setItem("page", page);
                 window.open("../cal/time.php", "nom", "width=1200, height=1000, toolbar=no, adressbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no, top=50, left=400");
        } else if(page == "maintenance") {
            window.localStorage.setItem("maintenance", 1);
            window.localStorage.setItem("page", page);
            $("#findfo").fadeOut(200, function() {
             $("#main").fadeOut(300, function() {
                 $("#main").load("maintenance/maintenance.php", function() {
                    $("#main").fadeIn(200);
                });
            });
        });
        }
    }
    
   
</script>