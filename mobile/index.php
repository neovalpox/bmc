<html>
<head>
    <style type="text/css">
    <?php include('style.php'); ?>
</style>
<link rel="icon" type="image/gif" href="../favicon.gif" />
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=480, target-densitydpi=272" />     
<script type="text/javascript" src="../js/jquery.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="../js/jquery.js"></script>
<script src="../js/jquery-ui.js"></script>
<link href="../css/ui-lightness/jquery-ui-1.10.1.custom.css" rel="stylesheet">


</head>
<body onload="getInfos();">
    
    <div id="option" style="position : absolute; top: 20px; right:10px;">
        <a href="javascript:popup(options.php);"><img src="../images/config.png" align="absmiddle" border="0"></a>
        <br>
        <a href='deco.php'><img src='../images/logout.png' border='0' align='absmiddle'></a>
        <br>
        <a href='javascript:rss();'><img src='../images/rss.png' border='0' align='absmiddle'></a>
        <br>
        <a href='javascript:note();'><img src='../images/note.png' border='0' align='absmiddle'></a>
    </div>
    
<?php
include("../php/connexion.php");
include("../php/loged.php");

if($loged == "ok") {
	include("menu.php");
} else {
	include("../menu_login.php");
}
?>
    
    
    <script type="text/javascript">

function backgroundFixe(bg) {
    $('body').css('background-image', 'url(../images/bg' + bg + '.jpg)');
}

function StartMove(bg) {
$('body').css('background-image', 'url(../images/bg' + bg + '.jpg)');
var cssBGImage=new Image();
cssBGImage.src="../images/bg"+bg+".jpg";

window.cssMaxWidth=640;
window.cssXPos=0;
setInterval("MoveBackGround()",40);
}

function MoveBackGround () {
    if(window.localStorage.getItem("mouvement") == 1) {
        window.cssXPos=window.cssXPos+0.9;
        if (window.cssXPos>=window.cssMaxWidth) {
        window.cssXPos=0;
        }
        toMove=document.body;
        toMove.style.backgroundPosition=window.cssXPos+"px 0px";
    }
}
function popup(){
    window.open("options.php", "nom", "width=500, height=570, toolbar=no, adressbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no, top=350, left=600");
}
    
function getInfos() {
    $.post("../php/getOptions.php", function(data){
        backgroudGet = data.background;
        colorGet = data.color;
        move = data.move;
        window.localStorage.setItem("mouvement", move);
        $('.cadre').css('background-image', 'url(../images/color_' + colorGet + '.jpg)');
        if(move == 1) {
            StartMove(backgroudGet);
        } else {
            backgroundFixe(backgroudGet);
        }
    });       
}
function changeBackground(id) {
    $('body').css('background-image', 'url(../images/bg' + id + '.jpg)');
}
function changeColor(id) {
    $('.cadre').css('background-image', 'url(../images/color_' + id + '.jpg)');
}
function stopMove(){
    window.localStorage.setItem("mouvement", 0);
}
function startMove2(bg){
    StartMove(bg);
    window.localStorage.setItem("mouvement", 1);
}

function rss() {
    window.localStorage.setItem("rss", 1);
     $("#graphique").fadeOut(500);
        $("#graphique2").fadeOut(500, function() {
                $("#rss").fadeIn(500);
                $("#findfo").fadeOut(200, function() {
                    $("#main").fadeOut(300, function() {
                    $("#main").load("../rss/rss.php", function() {
                        $("#main").fadeIn(200);
                    });
                });
            });
        });
}
</script>
</body>
</html>