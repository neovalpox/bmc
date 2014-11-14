<div id="nomCallTxt"></div>
<iframe id="frameCall" width="100%" height="100" border="no"></iframe>
<input type="hidden" id="nom" value="<?php echo $nom; ?>">
<script type="text/javascript">
    nomPhone = window.localStorage.getItem("nomPhone");
    $("#nomCallTxt").html("<center><font color='#000000'>Voulez-vous appeler <br><b>"+nomPhone+"</b> ?<br><br><table><tr><td><img src='images/call.png' onclick='callNow();'></td><td><img src='images/cancelCall.png' onclick='cancelCall();'></td></tr></table></font></center><br><br>");
        
    function callNow() {
        ext = window.localStorage.getItem("ext");
        pin = window.localStorage.getItem("pin3cx");
        phone = window.localStorage.getItem("phone");
        
        $("#debugLog").html("Call ID : Extention = "+ext+" / pin = "+pin+" / phone = "+phone+"<br>"+$("#debugLog").html());
        $("#debugLog").html("http://10.90.10.3:5000/ivr/PbxAPI.aspx?func=make_call&from"+ext+"&to="+phone+"&pin="+pin+"<br>"+$("#debugLog").html());
        $("#frameCall").attr("src", "http://10.90.10.3:5000/ivr/PbxAPI.aspx?func=make_call&from="+ext+"&to="+phone+"&pin=1052");
        $("#callBox").fadeOut(150);
    }
</script> 