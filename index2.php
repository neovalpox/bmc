<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-Frame-Options" content="ALLOWALL">

        <title>BMC - IntranetEraZZer</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="styleCSS.css" />

        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!--        <link rel="stylesheet" href="/resources/demos/style.css">-->
        <script>
            url = "10.90.10.182";
        // Définition de la page actuelle //
            window.localStorage.setItem("currentPage", "accueil");
        //////////////////////////////////////////////
        // Récupération de la position de la souris //
        //////////////////////////////////////////////
        function getMousePosition() {
           $(document).mousemove(function(e){
             var positionMouseX = e.pageX;
             var positionMouseY = e.pageY;
             return positionMouseX;
             alert(positionMouseX);
             return positionMouseY;
          });
        };
        //////////////////////////////////////////
        // Définition des éléments déplaceables //
        //////////////////////////////////////////
        $(function() {
          $( "#selectBackground" ).draggable();
        });
        $(function() {
          $( "#settingBox" ).draggable();
        });
        $(function() {
          $( "#folderBox" ).draggable();
        });
        $(function() { 
          $( "#timeBox" ).draggable();
        });
        $(function() { 
          $( "#backupBox" ).draggable();
        });
        $(function() { 
          $( "#debugConsole" ).draggable();
        });
        $(function() { 
          $( "#notesBox" ).draggable();
        });
        $(function() { 
          $( "#proceduresBox" ).draggable();
        });
        $(function() { 
          $( "#liensBox" ).draggable();
        });
        $(function() { 
          $( "#outilsBox" ).draggable();
        });
        $(function() { 
          $( "#callBox" ).draggable();
        });
        $(function() { 
          $( "#keepassBox" ).draggable();
        });
        $(function() { 
          $( "#vacancesBox" ).draggable();
        });
        $(function() { 
          $( "#faceBox" ).draggable();
        });

        </script>
    </head>
    <body>
        <div id="loaderScreen" style="width:100%; height:100%; position: absolute; top:0px; left:0px; z-index: 1000; background-color: #000000; text-align: center;">
            <div style="margin-top:500px;">
                <font color="#FFFFFF">Chargement</font>
            </div>
        </div>
        <?php include("php/loged.php"); ?>
        <div style="position:absolute; text-align: center; width:100%; top:0px; left:0px; height:143px; background-image: url('images/bgTop.gif');"></div>
        
        <div id="afficheLoader" style="position:absolute; text-align: center; width:100%; top:10px; left:0px; height:60px; display:none;">
            <center><div id="loaderImage" style="text-align: center"></div></center>
            <script type="text/javascript">
                    var cSpeed=5;
                    var cWidth=80;
                    var cHeight=80;
                    var cTotalFrames=10;
                    var cFrameWidth=80;
                    var cImageSrc='images/sprites.png';

                    var cImageTimeout=false;
                    var cIndex=0;
                    var cXpos=0;
                    var SECONDS_BETWEEN_FRAMES=0;

                    function startAnimation(){

                            document.getElementById('loaderImage').style.backgroundImage='url('+cImageSrc+')';
                            document.getElementById('loaderImage').style.width=cWidth+'px';
                            document.getElementById('loaderImage').style.height=cHeight+'px';

                            //FPS = Math.round(100/(maxSpeed+2-speed));
                            FPS = Math.round(100/cSpeed);
                            SECONDS_BETWEEN_FRAMES = 1 / FPS;

                            setTimeout('continueAnimation()', SECONDS_BETWEEN_FRAMES/1000);

                    }

                    function continueAnimation(){

                            cXpos += cFrameWidth;
                            //increase the index so we know which frame of our animation we are currently on
                            cIndex += 1;

                            //if our cIndex is higher than our total number of frames, we're at the end and should restart
                            if (cIndex >= cTotalFrames) {
                                    cXpos =0;
                                    cIndex=0;
                            }

                            document.getElementById('loaderImage').style.backgroundPosition=(-cXpos)+'px 0';

                            setTimeout('continueAnimation()', SECONDS_BETWEEN_FRAMES*1000);
                    }

                    function imageLoader(s, fun)//Pre-loads the sprites image
                    {
                            clearTimeout(cImageTimeout);
                            cImageTimeout=0;
                            genImage = new Image();
                            genImage.onload=function (){cImageTimeout=setTimeout(fun, 0)};
                            genImage.onerror=new Function('alert(\'Could not load the image\')');
                            genImage.src=s;
                    }

                    //The following code starts the animation
                    new imageLoader(cImageSrc, 'startAnimation()');
            </script>
        </div>
        
        <div style="position:absolute; text-align: center; width:100%; top:143px; left:0px; height:5px; background-image: url('images/tail.gif');"></div>
        <div style="position:absolute; text-align: center; width:100%; top:100px; left:0px; height:43px; background-image: url('images/texture.gif');"></div>
        
        <div id="profilUser" style=" text-align: left; border-radius: 4px; position:absolute; width:190; top:77px; left:80px; height:30px; background-image: url('images/bgTop.gif'); border: 2px solid #000000; box-shadow: 4px 4px 10px #000;">
            <div style='margin: 5px;'>
                <div id="imageProfile" style="position:absolute; left: -70px; top: -20px;"><img src="images/face/mini/<?php echo $face; ?>.png" onclick='affiche("selectFace");' onmouseover="overEffect('menuFace');" onmouseout="outEffect('menuFace');"></div>
                <font color='#FFFFFF'><b><?php echo $CKnom; ?></b></font>
            
            </div>
        </div>
        
        <div id="menuTop" style="position:absolute; text-align: center; width:100%; top:110px; left:0px; height:50px;">
            <table align="center" class="menuTop"><tr>
                    <td><img src="images/icons/home.png" align="absmiddle"> <a href="#" onclick="mainAffiche('accueil');">Accueil</a></td>
                    <td width="20"></td>
                    <td><img src="images/icons/outlook.png" align="absmiddle"> <a href="#" onclick="mainAffiche('Owa');">Outlook Web Access</a></td>
                    <td width="20"></td>
                    <td><img src="images/icons/car.png" align="absmiddle"> <a href="#" onclick="mainAffiche('Kilometres');">Tables kilométrique</a></td>
                    <td width="20"></td>
                    <td><img src="images/icons/phone.png" align="absmiddle"> <a href="#" onclick="mainAffiche('Phone');">Téléphones interne</a></td>
                    <td width="20"></td>
                    <td><img src="images/icons/phone.png" align="absmiddle"> <a href="#" onclick="mainAffiche('Annuaire');">Annuaire téléphonique</a></td>
            </tr></table>
        
        </div>
        
        <div id="menuTS" style="position:absolute; text-align: right; width:100%; top:20px; left:0px; height:50px;">
            <table style='position:absolute; top:0px; right:50px;' class="menuTS"><tr>
                    <td align='center' class="tsText"><img src='images/terminalServer.png' onclick="terminalServer('mont');"><br><a href='rdp/sbmcmots1.rdp'>SBMCMOTS1</a></td>
                    <td width='10'></td>
                    <td align='center' class="tsText"><img src='images/terminalServer.png' onclick="terminalServer('tchaux');"><br><a href='rdp/sbmcchts1.rdp'>SBMCCHTS1</a></td>
                </tr></table>
        </div>
        
        <div id='backgroundBouton' style='position: absolute; right:20px; top: 150px;'>
            <img src='images/backgroundIcon.png' id="menuBackground" onclick='affiche("selectBackground");' onmouseover="overEffect('menuBackground');" onmouseout="outEffect('menuBackground');">
        </div>
        
        <div id="CenterMenu" style="position: absolute; width:100%; text-align: center; left: 0px; top: 200px;">
            <div id="menu">
                <table align='center' id='textMenu'><tr>
                    <td><img src="images/menu/backup.png" style="margin:25px;" id='menuBackup' onmouseover="overEffect('menuBackup');" onmouseout="outEffect('menuBackup');" onclick='affiche("backupBox");'></td>
                    <td><img src="images/menu/time.png" style="margin:25px;" id="menuTime" onmouseover="overEffect('menuTime');" onmouseout="outEffect('menuTime');" onclick='affiche("timeBox");'></td>
                    <td><img src="images/menu/folderBN.png" style="margin:25px;" id="menuFolder" onmouseover="overEffect('menuFolder');" onmouseout="outEffect('menuFolder');" onclick='affiche("folderBox");'></td>
                    <td><img src="images/menu/notes.png" style="margin:25px;" id="menuNotes" onmouseover="overEffect('menuNotes');" onmouseout="outEffect('menuNotes');" onclick='affiche("notesBox");'></td>
                    <td><img src="images/menu/setting.png" style="margin:25px;" id="menuSetting" onmouseover="overEffect('menuSetting');" onmouseout="outEffect('menuSetting');" onclick='affiche("settingBox");'></td>
                </tr>
                <tr> 
                    <td align='center'>Sauvegardes</td>
                    <td align='center'>Fiche d'heures</td>
                    <td align='center'>Documents</td>
                    <td align='center'>Notes</td>
                    <td align='center'>Paramètres</td>
                </tr>
                <tr>
                    <td><img src="images/menu/procedure.png" style="margin:25px;" id='menuProcedures' onmouseover="overEffect('menuProcedures');" onmouseout="outEffect('menuProcedures');" onclick='affiche("proceduresBox");'></td>
                    <td><img src="images/menu/outils.png" style="margin:25px;" id='menuOutils' onmouseover="overEffect('menuOutils');" onmouseout="outEffect('menuOutils');" onclick='affiche("outilsBox");'></td>
                    <td><img src="images/menu/link.png" style="margin:25px;" id='menuLiens' onmouseover="overEffect('menuLiens');" onmouseout="outEffect('menuLiens');" onclick='affiche("liensBox");'></td>
                    <td><img src="images/menu/keepass.png" style="margin:25px;" id='menuKeepass' onmouseover="overEffect('menuKeepass');" onmouseout="outEffect('menuKeepass');" onclick='affiche("keepassBox");'></td>
                    
                    <td><img src="images/menu/vacances.png" style="margin:25px;" id='menuVacances' onmouseover="overEffect('menuVacances');" onmouseout="outEffect('menuVacances');" onclick='affiche("vacancesBox");'></td>
                </tr>
                <tr> 
                    <td align='center'>Procédures<br>d'installation</td>
                    <td align='center'>Outils</td>
                    <td align='center'>Liens utiles</td>
                    <td align='center'>Keepass</td>
                    <td align='center'>Vacances</td>
                </tr>
                </table>
            </div>
        </div>
        
        
        <div id="menuNotesShow" style="display: none;">
            <table>
                <tr>
                    <td><img src="images/icons/note.png"></td>
                    <td><img src="images/icons/add.png"></td>
                </tr>
            </table>
        </div>

        <div id='mainFrame' style="witdh:100%; height: 60%; display:none;">
            <table align='center'><tr><td>
                        <div id="mainFrameContent" class="ui-widget-content" style='display: none;'></div>
                        <div id="mainOwa" class="ui-widget-content" style='display: none;'></div>
                        <div id="mainKilometres" class="ui-widget-content" style='display: none;'></div>
                        <div id="mainPhone" class="ui-widget-content" style='display: none;'></div>
                        <div id="mainAnnuaire" class="ui-widget-content" style='display: none;'></div>
                    </td></tr></table>
        </div>
        
        <div style="position:absolute; width:800px; bottom:5px; right:10px; height:130px; overflow-y: scroll; background-color: #000000; z-index: 10; border: 2px solid silver; opacity:0.6; filter:alpha(opacity=60);" id='debugConsole'>
            <div id='debugLog' style='color:#a9a9a9; font-size: 12px; margin:5px;'></div>  
        </div>
        <div style="position:absolute; text-align: center; width:100%; bottom:143px; left:0px; height:5px; background-image: url('images/tail.gif');"></div>
        <div style="position:absolute; text-align: center; width:100%; bottom:0px; left:0px; height:143px; background-image: url('images/bgTop.gif');"></div>
         
        <div id="selectBackground" class="ui-widget-content" style='display: none; z-index: 10;'></div>
        <div id="settingBox" class="ui-widget-content" style='display: none; z-index: 11;'></div>
        <div id="folderBox" class="ui-widget-content" style='display: none; z-index: 12;'></div>
        <div id="timeBox" class="ui-widget-content" style='display: none; z-index: 13;'></div>
        <div id="backupBox" class="ui-widget-content" style='display: none; z-index: 14;'></div>
        <div id="notesBox" class="ui-widget-content" style='display: none; z-index: 15;'></div>
        <div id="proceduresBox" class="ui-widget-content" style='display: none; z-index: 16;'></div>
        <div id="liensBox" class="ui-widget-content" style='display: none; z-index: 17;'></div>
        <div id="outilsBox" class="ui-widget-content" style='display: none; z-index: 18;'></div>
        <div id="callBox" class="ui-widget-content" style='display: none; z-index: 19;'></div>
        <div id="keepassBox" class="ui-widget-content" style='display: none; z-index: 20;'></div>
        <div id="faceBox" class="ui-widget-content" style='display: none; z-index: 21;'></div>
        
        
        <input type="hidden" id="CKlogin" value="<?php echo $CKlogin; ?>">
        <script type='text/javascript'>
            
           
            
            user = $("#CKlogin").val();
            window.localStorage.setItem("user", user);

            $("#selectBackground").load("settings/backgroundList.php");
            $("#settingBox").load("settings/settings.php");
            $("#folderBox").load("folder/index.php");
            $("#backupBox").load("sauvegardes/indexBackup.php");
            $("#proceduresBox").load("procedure.php");
            $("#notesBox").load("notes/notesIndex.php");
            $("#liensBox").load("liens.php");
            $("#outilsBox").load("outils.php");
            $("#callBox").load("pages/call.php");
            $("#keepassBox").load("pages/keepass.php");
            $("#faceBox").load("settings/faceList.php");
            $("#timeBox").load("cal/time2.php");

            $("#mainPhone").load("pages/phone.php");
            $("#mainAnnuaire").load("pages/annuaire.php");
            $("#mainKilometres").load("pages/kilometres.php");
            $("#mainOwa").load("pages/owa.php");

            //////////////////////////////////////////////////////
            // Afficher / Cacher un menu //
            //////////////////////////////////////////////////////
            function affiche(nomFonction) {
                $("#"+nomFonction).fadeIn(150);
                nomFonction = nomFonction.split("Box");
                visible = 1;
                $.post("php/setOpen.php", {nom: nomFonction[0], login: user}, function(data){
                    
                })
            }
            function savePosition(nomFonction) {
                $("#"+nomFonction).fadeIn(150);
                posX = $("#"+nomFonction).css("left");
                posX = posX.split("px");
                posX = posX[0];
                posY = $("#"+nomFonction).css("top");
                posY = posY.split("px");
                posY = posY[0];
                nomFonction = nomFonction.split("Box");
                visible = 1;
                $.post("php/savePosition.php", {posX: posX, posY: posY, nom: nomFonction[0], login: user}, function(data){
                    
                })
            }
            function cache(nomFonction) {
                $("#"+nomFonction).fadeOut(150);
                nomFonction = nomFonction.split("Box");
                $.post("php/setClose.php", {nom: nomFonction[0], login: user}, function(data){
                    
                })
                visible = 0;
            }
            ///////////////////////////////////////////////
            // Enregistrer le changement de fond d'écran //
            ///////////////////////////////////////////////
            function changeBackground(num) {
                $.post("php/setBackground.php", {background: num, user: user}, function(data) {
                    window.localStorage.setItem("background", num);
                    background = num;
                    $("body").css("background-image", "url('images/background/backgroundLight"+num+".jpg')");
                })
            }

            function overEffect(id) {
                $("#"+id).css("-webkit-filter", "drop-shadow(0px 0px 18px rgba(255,255,255,0.8))");
            }
            function outEffect(id) {
                $("#"+id).css("-webkit-filter", "");
            }
            
            function afficheDebug(valeur) {
                if(valeur == 1) {
                    $("#debugConsole").show();
                } else {
                    $("#debugConsole").hide();
                }
            }
            
            function mainAffiche(page) {
                currentPage = window.localStorage.getItem("currentPage");
                $("#debugLog").html("currentPage : "+currentPage+" / page choisir : "+page+"<br>"+$("#debugLog").html());
                if(page != "accueil" && currentPage == "accueil") {
                    $("#debugLog").html("Bizzard<br>"+$("#debugLog").html());
                    $("#CenterMenu").hide(function() {
                        $("#debugLog").html("LoaderPage<br>#main"+page+"<br>"+$("#debugLog").html());
                        $("#main"+page).show(function() {
                            $("#mainFrame").show("slide", {direction: "right"});
                        });
                        
                    })
                } else if(page == "accueil" && currentPage != "accueil") {
                    //$("#afficheLoader").show();
                    $("#mainFrame").hide("slide", {}, function() {
                        $("main"+currentPage).hide();
                        //$("#afficheLoader").hide();
                        $("#CenterMenu").show("slide", {direction: "right"});
                    })
                } else if(currentPage != page) {
                    $("#debugLog").html("Chargement d'une nouvelle page (<b>"+page+"</b>)<br>"+$("#debugLog").html());
                    //$("#afficheLoader").show();
                    $("#mainFrame").hide("slide", {}, function() {                           // $("#afficheLoader").hide();
                        $("#main"+currentPage).hide();
                        $("#main"+page).show(function() {
                            $("#mainFrame").show("slide", {direction: "right"});
                        });
                    })
                }
                window.localStorage.setItem("currentPage", page);
            }

                    ///////////////////////////////////////////
                    // Récupération des réglages utilisateur //
                    ///////////////////////////////////////////
                    $.post("/php/reglages.php", {user: user}, function(data) {
                        changeBackground(data.background);
                        afficheDebug(data.debug);
                        $("#backupBox").css({
                            "left" : data.backupX+"px",
                            "top" : data.backupY+"px",
                            "display" : data.backupOpen,
                        }).mouseup(function() {
                            savePosition("backupBox");
                        });
                        $("#timeBox").css({
                            "left" : data.timeX+"px",
                            "top" : data.timeY+"px",
                            "display" : data.timeOpen,
                        }).mouseup(function() {
                            savePosition("timeBox");
                        });
                        $("#settingBox").css({
                            "left" : data.settingX+"px",
                            "top" : data.settingY+"px",
                            "display" : data.settingOpen,
                        }).mouseup(function() {
                            savePosition("settingBox");
                        });
                        $("#notesBox").css({
                            "left" : data.notesX+"px",
                            "top" : data.notesY+"px",
                            "display" : data.notesOpen,
                        }).mouseup(function() {
                            savePosition("notesBox");
                        });
                        $("#folderBox").css({
                            "left" : data.folderX+"px",
                            "top" : data.folderY+"px",
                            "display" : data.folderOpen,
                        }).mouseup(function() {
                            savePosition("folderBox");
                        });
                        $("#proceduresBox").css({
                            "left" : data.proceduresX+"px",
                            "top" : data.proceduresY+"px",
                            "display" : data.proceduresOpen,
                        }).mouseup(function() {
                            savePosition("proceduresBox");
                        });
                        $("#outilsBox").css({
                            "left" : data.outilsX+"px",
                            "top" : data.outilsY+"px",
                            "display" : data.outilsOpen,
                        }).mouseup(function() {
                            savePosition("outilsBox");
                        });
                        $("#liensBox").css({
                            "left" : data.liensX+"px",
                            "top" : data.liensY+"px",
                            "display" : data.liensOpen,
                        }).mouseup(function() {
                            savePosition("liensBox");
                        });
                        $("#keepassBox").css({
                            "left" : data.keepassX+"px",
                            "top" : data.keepassY+"px",
                            "display" : data.keepassOpen,
                        }).mouseup(function() {
                            savePosition("keepassBox");
                        });
                        $("#loaderScreen").delay(300).fadeOut(500);

                    })

                    function addNote() {

                    }
        </script> <
    </body>
</html> 