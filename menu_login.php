<link rel="stylesheet" href="style.css" />

<div id="menuLogin" style="display:none">
<form action='login.php' method='POST' name='connexion'>
<table style='margin-top:280px;' width='350' align='center' class="cadre" border='0' cellspacing='0' height='207'>
<tr class="cadre"></td><td colspan='3' background="images/color_0.jpg" height='40' valign='center' align='center'><font color="#FFFFFF"><b>Connexion</b></font></td></tr>
<tr><td colspan='3' height='8' align='center'><?php //echo $var; ?></td></tr>
<tr><td width='15'><td style='margin-right:20px;'>User : </td><td><INPUT TYPE='text' NAME='login'></td></tr>
<tr><td colspan='3' height='8'></td></tr>
<tr>
  <td height="65" colspan='3' align='center'>----------------------------
<br>
<a href='javascript:connexion();'><img src="images/connect.png" width="25" height="25" border="0" align="absmiddle" /></a> <a href='javascript:connexion();'>Connexion</a></td></tr>

</table>
</form>
</div>
<script type="text/javascript">
option = {};
$("#menuLogin").show("drop", option, 600);
function connexion() {
    $("#menuLogin").hide("drop", option, 500, function() {
        document.connexion.submit();
    });
    
}
</script>