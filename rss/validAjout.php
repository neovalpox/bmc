<?php
include("../php/connexion.php");
include("../php/loged.php");
extract($_POST);

$query = mysql_query("INSERT INTO rss (`id`, `nom`, `img`, `adresse`, `user`) VALUES ('','$nom','$idImage','$adresse','$CKlogin')", $connexion);

if($query) {
    echo "<script type='text/javascript'>
        window.opener.location.reload();
        window.close();
        </script>";
}
?>
