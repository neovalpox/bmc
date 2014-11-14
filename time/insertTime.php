<?php
include("../php/loged.php");
include("../php/connexion.php");
$heureGet = $_GET['heure'];
$jour = $_GET['jour'];
?>
<style type="text/css">
    <?php include('../style.php'); ?>
</style>
de : <select name="debut">
    <?php
            
            $j=1;
                for($i=0;$i<15;$i++) {
                    if($i == $heureGet && $j == 1) {
                        $selected = " selected";
                    } else {
                        $selected = "";
                    }
                    $heure = 6+$i;
                    if($j==0) {
                        $demi = "30";
                    } else {
                        $demi = "00";
                    }
                    echo "<option value=".$i.$selected.">".$heure."h".$demi."</option>";
                    $j++;
                    if($demi == "00") {
                        $j = 0;
                        $i--;
                    } else {
                        echo '<tr><td colspan="15" height="1" bgcolor="#EAEAEA"></td></tr>';
                    }
                }
            ?>
</select>
à :<select name="fin">
    <?php
            $j=0;
                for($i=0;$i<15;$i++) {
                    if($i == $heureGet) {
                        $selected = " selected";
                    } else {
                        $selected = "";
                    }
                    $heure = 6+$i;
                    if($j==0) {
                        $demi = "30";
                    } else {
                        $demi = "00";
                    }
                    echo "<option value=".$i.$selected.">".$heure."h".$demi."</option>";
                    $j++;
                    if($demi == "00") {
                        $j = 0;
                        $i--;
                    } else {
                        echo '<tr><td colspan="15" height="1" bgcolor="#EAEAEA"></td></tr>';
                    }
                }
            ?>
</select>
<br>
Client :
<select name="client">
    <?php
        $query = mysql_query("SELECT * FROM clients") or die(mysql_error());
        while($nb= mysql_fetch_array($query)) {
            echo "<option value=".$nb['id'].">".$nb['nom']."</option>";
        }
    ?>
</select>
<br>
<textarea name="info"></textarea>
<br>
<input type="submit" value="Enregistrer">
