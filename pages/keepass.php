<script type="text/javascript">
    thisButtonClose = "closeKeepassButton";
    thisWindow = "keepassBox";
    $("#myId").attr("id", thisButtonClose);
$(function() {
    $( "#keepassBox" ).resizable();
});
$(function() {
    $( "#sliderOpacityKeepass" ).slider({
        value:100,
        min: 30,
        max: 100,
        step: 5,
        slide: function(event, ui) {
            $("#chiffreOpacityKeepass").text(ui.value + "%");
            $("#keepassBox").css({ opacity: ui.value/100 });
        }
    });
});

</script>
<div style='position:absolute; right:-12px; top:-12px; z-index: 20;'><img src='images/logout.png' id='closeKeepassButton' onclick='cache("keepassBox");' onmouseover="overEffect('closeKeepassButton');" onmouseout="outEffect('closeKeepassButton');"></div>
<div style='position:absolute; top: -30px; right:0px;'>
    <table><tr><td><div id='sliderOpacityKeepass' style='width:120px;'></div></td><td><div id='chiffreOpacityKeepass' style='color: #FFFFFF; font-weight: bold; width:30px; font-size: 12px; text-align: center; margin-left: 10px;'>100%</div></td></tr></table>
</div>
<div style="position: absolute; left:0px; top: -25px; z-index: 22;" id="titreFenetre"><b>Keepass</b></div>

<div id="graphique" style="position: absolute; right: 30px; top: 15px;">
    <?php include("../graphique.php"); ?>
</div>