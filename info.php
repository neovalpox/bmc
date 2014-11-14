<table cellspacing="0" class="cadre" width="800">
<tr height="43" class="cadre"><td class="cadre" align="center" colspan="6"><font color="#FFFFFF"><b>R&eacute;sum&eacute; des sauvegardes</b></font></td></tr>
<tr>
<td>
    <div style="margin:8px;">
       
        <?php
include("php/count.php");
?>
    </div>

</td>
</tr>
</table>
<script type="text/javascript">
    function loadOk() {
        $.post("log.php", {"nom": "Allsport"}, function(data) {
                   $("#findfo").html(data).fadeIn(400);
        });
    }
    pageNow = window.localStorage.getItem("page");
    if(pageNow == "info") {
        loadOk();
    }
</script>