<script type="text/javascript">
$(function() {
    $("#liensBox").resizable();
});
$(function() {
    $( "#sliderOpacity" ).slider({
        value:100,
        min: 30,
        max: 100,
        step: 5,
        slide: function(event, ui) {
            $("#chiffreOpacity").text(ui.value + "%");
            $("#liensBox").css({ opacity: ui.value/100 });
        }
    });
});
</script>
<div style='position:absolute; right:-12px; top:-12px; z-index: 20;'><img src='images/logout.png' id='closeLiensButton' onclick='cache("liensBox");' onmouseover="overEffect('closeLiensButton');" onmouseout="outEffect('closeLiensButton');"></div>

<a href='http://www.google.ch' target='_blank'>Google</a><br>
<a href='https://www.microsoft.com/Licensing/servicecenter/default.aspx' target='_blank'>Microsoft Volum Licencing</a><br>
<a href='http://www.local.ch' target='_blank'>Local.ch</a><br>
<a href='http://maps.google.com' target='_blank'>Google Maps</a><br>