<table class="cadre" cellspacing="0" width="290">
    
    <tr class="cadre"><td height="43" align="center"><font color="#FFFFFF"><img src="images/rss.png" align="absmiddle"> <b>Liste Flux RSS</b></font></td></tr>
    <tr><td align="right"><a href="#" onclick="popupRSS();">Ajouter un flux</a> <a href="#" onclick="popupRSS();"><img src="images/add.png" align="absmiddle"></a></td></tr>
    <tr class="vierge"><td>
            <div style="margin:8px;">
                <?php include("rss/listeFlux.php"); ?>
            </div>
        </td>
    </tr>
</table>

<script type="text/javascript">
function popupRSS(adresse){
    window.open("rss/addRSS.php", "nom", "width=500, height=240, toolbar=no, adressbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no, top=350, left=600");
}
</script>