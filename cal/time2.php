<script type="text/javascript">
    $(function() {
        $( "#sliderOpacityTime" ).slider({
            value:100,
            min: 30,
            max: 100,
            step: 5,
            slide: function(event, ui) {
                $("#chiffreOpacityTime").text(ui.value + "%");
                $("#timeBox").css({ opacity: ui.value/100 });
            }
        });
    });
    $(function() {
    $( "#timeBox" ).resizable();
});
</script>
<br><br>
<div style='position:absolute; right:-12px; top:-12px; z-index: 20;'><img src='images/logout.png' id='closeTimeButton' onclick='cache("timeBox");' onmouseover="overEffect('closeTimeButton');" onmouseout="outEffect('closeTimeButton');"></div>
<div style='position:absolute; top: -30px; right:0px;'>
    <table><tr><td><div id='sliderOpacityTime' style='width:120px;'></div></td><td><div id='chiffreOpacityTime' style='color: #FFFFFF; font-weight: bold; width:30px; font-size: 12px; text-align: center; margin-left: 10px;'>100%</div></td></tr></table>
</div>
<iframe src="../cal/time.php" width="100%" height="90%">

</iframe>