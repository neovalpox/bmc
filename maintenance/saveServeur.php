
<?php
include("../php/connexion.php");
include("../php/loged.php");

extract($_POST);

//$nbServeur = $nbServeur+1;

for($i=1;$i<$nbServeur;$i++) {
    if(!isset(${"optionHoraire".$i})) {
        ${"optionHoraire".$i} = 0;
    }
    if(!isset(${"optionExchange".$i})) {
        ${"optionExchange".$i} = 0;
    }
    if(!isset(${"optionSharePoint".$i})) {
        ${"optionSharePoint".$i} = 0;
    }
    if(!isset(${"niveauIntervention".$i})) {
        ${"niveauIntervention".$i} = 0;
    }
    mysql_query("INSERT INTO `maintenanceServeur` (`uid`, `num`, `type`, `niveau`, `horaire`, `exchange`, `sharepoint`) VALUES ('$id','${"num".$i}','${"typeServeur".$i}','${"niveauIntervention".$i}','${"optionHoraire".$i}','${"optionExchange".$i}','${"optionSharePoint".$i}')", $connexion);
}
echo '<script type="text/javascript">
    window.location.replace("resume.php?id='.$id.'");
</script>';
?>
