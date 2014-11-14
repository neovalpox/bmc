<?php
include("../php/connexion.php");
include("../php/loged.php");

$id = $_POST['id'];
$title = htmlentities($_POST['title']);
$info = htmlentities($_POST['info']);
$start = $_POST['start'];

$end = $_POST['end'];

$end = explode(" ", $end);

$start = explode(" ", $start);

$mois = array('01' => "Jan",
              '02' => "Feb",
              '03' => "Mar",
              '04' => "Apr",
              '05' => "May",
              '06' => "Jun",
              '07' => "Jul",
              '08' => "Aug",
              '09' => "Sep",
              '10' => "Oct",
              '11' => "Nov",
              '12' => "Dec");

$month = array_search($start[1], $mois);

$start = $start[3]."-".$month."-".$start[2]."T".$start[4].".000+10:00";

$reponse["start"] = $start;
$reponse["end"] = $end;

$monthEnd = array_search($end[1], $mois);
$end = $end[3]."-".$monthEnd."-".$end[2]."T".$end[4].".000+10:00";

mysql_query("UPDATE events SET title='$title', info='$info', start='$start', end='$end', user='$CKlogin' WHERE id='$id'", $connexion) or die(mysql_error());

header('Content-Type: application/json');
echo json_encode($reponse);

?>