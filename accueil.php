<title> Sauvegardes</title>
<?php
include("php/function.php");
include("php/loged.php");
if($loged != "ok") {
	echo '<SCRIPT LANGUAGE="JavaScript">window.location.replace("index.php");</SCRIPT>';
}
?>
<table width="1200" align="center" cellspacing="10">
<tr>
<td width="300" valign="top" height="200">
<?php include("menu.php"); ?></td>

<td valign="top" rowspan="8">
    <div id="main" style="display: none">
<?php

$pageOK = array(	'insert' => 'insert.php',
  					'conf' => 'conf.php',
                                        'log' => 'log.php',
					'history' => 'history.php');
 if ( (isset($_GET['p'])) && (isset($pageOK[$_GET['p']])) ) {
	include($pageOK[$_GET['p']]);
} else {
	include('info.php');
}
?></div><div id="findfo" style="margin-top:20px; display:none;"></div></td><td valign="top"><div id="right" style="margin-top:20px; display:none;"></div></td>
</tr>
<tr><td valign="top"><div id="calcule" style="display: none"><?php include("calcule.php"); ?></div></td></tr>
<tr><td valign="top"><div id="rss" style="display: none"><?php include("rss/rssMenu.php"); ?></div></td></tr>
<tr><td valign="top"><div id="graphique" style="display: none"><?php include("graphique.php"); ?></div></td></tr>
<tr><td valign="top"><div id="graphique2" style="display: none"><?php include("graphique2.php"); ?></div></td></tr>


</table>
<script type="text/javascript">
$("#menu").fadeIn(200, function() {
    $("#graphique").fadeIn(200, function() {
        $("#graphique2").fadeIn(200, function() {
            $("#main").fadeIn(200, function() {
                loadOk();
            });
        });
    });
});
</script>