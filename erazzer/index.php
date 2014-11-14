<html>
    <head>
        <meta charset="utf-8" />
        <title>BMC - EraZZer</title>
        <link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.10.1.custom.min.css" />
        <link rel="stylesheet" href="css/styleCSS.css" />
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui-1.9.1.custom.js"></script>
        <script type='text/javascript'>

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
     
    <div style="position:absolute; text-align: center; width:100%; top:0px; left:0px; height:100px; background-image: url('images/bgTop.gif');"></div>
<div style="position:absolute; text-align: center; width:100%; top:100px; left:0px; height:5px; background-image: url('images/tail.gif');"></div>

<div id="CenterMenu" style="position: absolute; width:100%; text-align: center; left: 0px; top: 250px;">
    <?php
    include("php/verifLogin.php");
    if (isset($_COOKIE['loginErazzer']['log'])) {
        include("main.php");
    } else {
        include("login.php");
    }
    ?>   
</div>

<div id="selectBackground" class="ui-widget-content" style='display: none;'></div>
<div id="settingBox" class="ui-widget-content" style='display: none;'></div>

<div style="position:absolute; text-align: center; width:100%; bottom:100px; left:0px; height:5px; background-image: url('images/tail.gif');"></div>
<div style="position:absolute; text-align: center; width:100%; bottom:0px; left:0px; height:100px; background-image: url('images/bgTop.gif');"></div>

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