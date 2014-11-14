<body>
<?php
include("php/param.php");
include("php/connexion.php");
include("php/log.php");
//Modification du statut (online/offline)
$timeoutsecondes = 1200; 
// Le nombre de secondes pendant lesquelles le script considère que
// votre utilisateur est en ligne.  
$timestamp = time();  // on prend l'heure du moment
$timeout   = $timestamp - $timeoutsecondes; 
// à partir de quand les enregistrement ne sont plus valides

mysql_connect($host, $user, $pass); 

//$update = mysql_db_query($db, "UPDATE user SET timestamp='0' WHERE pseudo='$CKlogin' AND mdp='$Md5'");

setcookie("login[log]", 0, 1);
setcookie("login[login]", 0, 1);
setcookie("login[md5]", 0, 1);

?> 
<SCRIPT LANGUAGE="JavaScript">
window.location.replace("index.php");
</SCRIPT>
</body>