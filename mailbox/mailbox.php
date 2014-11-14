<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/gif" href="favicon.gif" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
<link rel="stylesheet" href="css/smoothness/jquery-ui-1.9.1.custom.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery-ui-1.9.1.custom.js"></script>

<?php include("form.php"); ?>
<script type="text/javascript">
$("div.button").html("<a href='javascript:pdf();'><img src='images/pdf.png' alt='Exporter au format PDF'></a>");
function faderImage() {
	$("#warning").fadeIn(300).fadeOut(300, function() {
		faderImage();
	});
}
faderImage();

function pdf() {
    document.pdf.submit();
}
</script>