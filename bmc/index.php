<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>BMC</title>
        <link rel="icon" type="image/gif" href="favicon.gif" />
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>
        <link href="css/ui-lightness/jquery-ui-1.10.1.custom.css" rel="stylesheet">
    </head>
    <body>
        <?php include("php/loged.php"); ?>
        <?php include("php/connexion.php"); ?>
        
        <div id="topLane">
            
        </div>
        <div id="menu">
            <div style='position: absolute; top:0px; left:0px; width:100%; height:30px; background-color: #333333; text-align: center;'>
                <div style='margin-top: 8px;'><b><font color="#EEEEEE">Menu</font></b></div>
            </div>
            <div style='margin:10px;'>
                <div style='margin-top:35px;'>
                    Bonjour <b><?php echo $CKnom; ?></b> !<br>
                    <br><center><i>Dernier contr&ocirc;le des sauvegardes <br><br><b><?php include("php/last_save.php"); ?></b></i></center><br>
                    <center>______________________</center><br>
                    
                    <img src="img/oubli.png" align="absmiddle"> <a href="#" onclick="page('accueil')">Accueil</a><br>
                    <img src="imaimg/inscription.pnglign="absmiddle"> <a href="#" onclick="page('sauvegardes')">Contrôle des sauvegardes</a><br>
                    <img src="imagesimg/icons/word.pngn="absmiddle"> <a href="#" onclick="page('creation')">Création d'offres</a><br>
                    <img src="images/tiimg/time.pngabsmiddle"> <a href="#" onclick="page('creation')">Fiche d'heure</a><br>
                    <img src="images/mailbimg/mailbox.pngmiddle"> <a href="#" onclick="page('mailbox')">Taille des Mailbox</a><br>
                    <img src="images/server.pimg/server.pngdle"> <a href="#" onclick="page('controle')">Contrôle mensuel serveur</a><br>
                    <img src="images/maintenanceimg/maintenance.png"> <a href="#" onclick="page('maintenance')">Maintenance informatique</a><br>
                    <img src="images/powershell.pngimg/powershell.png<a href="#" onclick="page('procedure')">Procédure d'installation</a><br>
                    <img src="images/procedure.png" alimg/procedure.pnghref="#" onclick="page('powershell')">Scripts PowerShell</a><br>
                </div>
            </div>
        </div>  
        <div id="center">
            
        </div>
        <div id="botLane">
            
        </div>
    </body>
</html>
