<script type="text/javascript">
$(function() {
    $( "#settingBox" ).tabs();
});
$(function() {
    $( "#settingBox" ).resizable();
});
$(function() {
    $( "#sliderOpacitySetting" ).slider({
        value:100,
        min: 30,
        max: 100,
        step: 5,
        slide: function(event, ui) {
            $("#chiffreOpacitySetting").text(ui.value + "%");
            $("#settingBox").css({opacity: ui.value/100});
        }
    });
});
</script>
<div style='position:absolute; right:-12px; top:-12px; z-index: 20;'><img src='images/logout.png' id='closeSettingButton' onclick='cache("settingBox");' onmouseover="overEffect('closeSettingButton');" onmouseout="outEffect('closeSettingButton');"></div>

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Général</a></li>
    <li><a href="#tabs-2">Avancé</a></li>
  </ul>
    
  <div id="tabs-1">
    
  </div>
    
  <div id="tabs-2">
     <table width='100%' style="margin:5px;">
        <tr>
            <td width="90%">Afficher la console de débugage </td><td><input type="checkbox" checked id="debugConsoleCheck" onclick="afficheConsole();"></td>
        </tr>   
    </table> 
  </div>
</div>

<div style='position:absolute; top: -30px; left:0px;'>
    <table><tr><td><div id='sliderOpacitySetting' style='width:120px;'></div></td><td><div id='chiffreOpacitySetting' style='color: #FFFFFF; font-weight: bold; width:30px; font-size: 12px; text-align: center; margin-left: 10px;'>100%</div></td></tr></table>
</div>

<script type='text/javascript'>
    function afficheConsole() {
        if($("#debugConsoleCheck").is(':checked') ){
            $.post("php/debug.php", {etat: 1, pseudo: user}, function(data){
                $("#debugConsole").fadeIn(150);
            })
        } else {
            $.post("php/debug.php", {etat: 0, pseudo: user}, function(data){
                $("#debugConsole").fadeOut(150);
            })
        }
    }

</script>