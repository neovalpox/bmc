<html>
    <head>
<style type="text/css">
    <?php include('style.php'); ?>
</style>
<link rel="icon" type="image/gif" href="favicon.gif" />
<script type='text/javascript'>
    var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

if( isMobile.any() ) {
    window.location.replace("mobile/index.php");
};
    </script>

<script type="text/javascript" src="js/jquery.js"></script>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<link href="css/ui-lightness/jquery-ui-1.10.1.custom.css" rel="stylesheet">

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
<script>
$(function() {
    $("#note1").draggable();
  });
</script>
  
<style>
    #draggable {
        width: 150px; height: 150px; padding: 0.5em;
    }
    
    .gradientNote {
        background: #fb83fa; /* Old browsers */
        background: -moz-linear-gradient(top,  #fb83fa 0%, #ffccff 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fb83fa), color-stop(100%,#ffccff)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top,  #fb83fa 0%,#ffccff 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top,  #fb83fa 0%,#ffccff 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top,  #fb83fa 0%,#ffccff 100%); /* IE10+ */
        background: linear-gradient(to bottom,  #fb83fa 0%,#ffccff 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fb83fa', endColorstr='#ffccff',GradientType=0 ); /* IE6-9 */

    }
</style>


</head> 
<body onload="getInfos();">
    <div id="option" style="position : absolute; top: 20px; left:1500px;"><a href="javascript:popup(options.php);"><img src="images/config.png" align="absmiddle" border="0"></a><b> <a href="javascript:popup('options.php');">Options</a></b>
        <br>
        <a href='deco.php'><img src='images/logout.png' border='0' align='absmiddle'></a> <a href='deco.php'><b>Deconnexion </b></a>
        <br>
        <a href='javascript:rss();'><img src='images/rss.png' border='0' align='absmiddle'></a> <a href='javascript:rss();'><b>Flux RSS</b></a>
        <br>
        <a href='javascript:note();'><img src='images/note.png' border='0' align='absmiddle'></a> <a href='javascript:note();'><b>Notes</b></a>
    </div>
 
    <div id='note1' style='display:none; position:absolute; top:20px; right:50px; width:230px; height:280px; z-index: 10000' class="ui-widget-content">
        <table width='100%' style='background-color: #FFCCFF; box-shadow: -2px 3px 5px 1px rgba(0, 0, 0, 0.7); ' cellspacing='0' cellpadding='0'>
            <tr><td height='45' class='gradientNote'><input type='text' style='border:0px; width:100%; background: none; text-align: center; font-weight: bold' value='Titre'></td></tr>
            <tr><td height='235'></td></tr>
        </table>
    </div>
    
<?php
include("php/connexion.php");
include("php/loged.php");

if($loged == "ok") {
	include("accueil.php");
} else {
	include("menu_login.php");
}
?>
<script type="text/javascript">

function backgroundFixe(bg) {
    $('body').css('background-image', 'url(images/bg' + bg + '.jpg)');
}

function StartMove(bg) {
$('body').css('background-image', 'url(images/bg' + bg + '.jpg)');
var cssBGImage=new Image();
cssBGImage.src="images/bg"+bg+".jpg";

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
    $.post("php/getOptions.php", function(data){
        backgroudGet = data.background;
        colorGet = data.color;
        move = data.move;
        window.localStorage.setItem("mouvement", move);
        $('.cadre').css('background-image', 'url(images/color_' + colorGet + '.jpg)');
        if(move == 1) {
            StartMove(backgroudGet);
        } else {
            backgroundFixe(backgroudGet);
        }
    });       
}
function changeBackground(id) {
    $('body').css('background-image', 'url(images/bg' + id + '.jpg)');
}
function changeColor(id) {
    $('.cadre').css('background-image', 'url(images/color_' + id + '.jpg)');
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
                    $("#main").load("rss/rss.php", function() {
                        $("#main").fadeIn(200);
                    });
                });
            });
        });
}

function note() {
    $("#note1").show();
}
</script>

</body>
</html>