url = "http://37.59.52.128/MagicalWind/";									////////////////////////////////////////////
									// R�cup�aration de la taille du document //
									////////////////////////////////////////////
function alertSize() {
  var myWidth = 0, myHeight = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    myWidth = window.innerWidth;
    myHeight = window.innerHeight;
  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    myWidth = document.documentElement.clientWidth;
    myHeight = document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    myWidth = document.body.clientWidth;
    myHeight = document.body.clientHeight;
  }
  createTable(myWidth, myHeight);
}
        
function createTable(width, height) {
    w = width-20;
    h = height-20;
    c = h/2;
    $('div.divPrincipale').html('<div id="menuTop" class="menuTop" style="display:none"></div><table border="0" width="'+w+'" height="'+h+'" class="cadre"><tr><td align="center" valign="top"><div class="main" id="main"></div><div id="page"></div></td></tr></table>');
    $('div.main').html('<div id="splash" style="display:none;"><center><img src="images/avatar/lune.png" style="margin-top:20px"></center> </div>'+
        '<div id="splash2" style="display:none"><img src="images/titre.png"></div>'+
        '<div id="general"></div>');
}

function loadPage(page) {

    $("#general").fadeOut(400, function() {
        $("#general").load(page+".html", function() {
            $("#general").fadeIn(400);
        });
    });
}

function menu(page, num) {
    if(num != null || num != "") {
        window.localStorage.setItem("num_page", num);
    } else {
        window.localStorage.setItem("num_page", "1");
    }
    $("#center").fadeOut(400, function() {
        $("#center").load(page+".html", function() {
            $("#center").fadeIn(400);
        });
    });
}
///////////////////////////
// Fonction affiche menu //
///////////////////////////
function afficheMenuTop(page_now) {
$('div.menuGeneral').html('\
    <table width="100%" height="42">\n\
    <tr><td width="40" align="center">\n\
    <img src="images/icon/livre1.png" onClick="javascript:page(\'grimoire\')">\n\
    </td><td width="40" align="center"><img src="images/home.png" onClick="javascript:page(\'accueil\')"></td>\n\\n\
    <td width="40" align="center"><img src="images/profil.png" onClick="javascript:page(\'profil\')"></td>\n\
    <td width="40" align="center"><img src="images/setting.png" onClick="javascript:page(\'setting\')"></td>\n\
    <td width="40" align="center"><img src="images/bug.png" onClick="javascript:bug()"></td>\n\
    <td width="40" align="center"><img src="images/supp.png" onClick="javascript:quitter()"></td></tr></table>\n\
    ');
} 