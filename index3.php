<html>
    <head>
        <meta charset="utf-8" />
        <title>BMC - IntranetEraZZer</title>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="styleCSS.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script type='text/javascript'>
        var chargement = 2;
        </script>
        <link rel="stylesheet" href="/resources/demos/style.css" />
        <script>
        $(function() {
          $( "#selectBackground" ).draggable();
        });
        $(function() {
          $( "#settingBox" ).draggable();
        });
        </script>
    </head>
    <body>
        <div style="position:absolute; text-align: center; width:100%; top:0px; left:0px; height:143px; background-image: url('images/bgTop.gif');"></div>
        <div style="position:absolute; text-align: center; width:100%; top:143px; left:0px; height:5px; background-image: url('images/tail.gif');"></div>
        
        <div id="CenterMenu" style="position: absolute; width:100%; text-align: center; left: 0px; top: 250px;">
            <div id="menu">
                <table align='center' id='textMenu' style="border-radius:600px; border: 15px inset #999; box-shadow: 10px 10px 60px #000; background-image: url('images/background/backgroundLight5.jpg'); background-size: cover" width="400" height="400">
                    <tr>
                        <td height="100"></td>
                    </tr>
                    <tr>
                    <td align='center'>Nom d'utilisateur :<br><input type='text' id='pseudo'></td>
                </tr>
                <tr>
                    <td align='center'><img src='images/login.png' onclick="connect();"></td>
                </tr>
                </table>
            </div>
        </div>
        
        <div id="selectBackground" class="ui-widget-content" style='display: none;'></div>
        <div id="settingBox" class="ui-widget-content" style='display: none;'></div>
        
        <div style="position:absolute; text-align: center; width:100%; bottom:143px; left:0px; height:5px; background-image: url('images/tail.gif');"></div>
        <div style="position:absolute; text-align: center; width:100%; bottom:0px; left:0px; height:143px; background-image: url('images/bgTop.gif');"></div>
    </body>
</html>  

<script type='text/javascript'>
    function connect() {
        login = $("#pseudo").val();
        password = $("#password").val();
        $.post("login2.php", {pseudo: login}, function(data) {
            if(data.error == 0) {
                window.location.replace("index2.php");
            } else if(data.error == 1) {
                alert("mauvais user / password");
            } else {
                alert("aucune user / password saisi");
            }
        })
    }
    
</script>