<?php
session_start();

include("asetukset.php");
include("class.ydin.php");

/****< Tietokantaan yhdistäminen >****/
$yhteys = mysql_connect("localhost", $tietokanta_kayttaja, $tietokanta_salasana) or die("Yhdistysvirhe: " . mysql_error());
mysql_select_db($tietokanta, $yhteys) or die("Tietokannan valitsemisvirhe: " . mysql_error());

$ydin = new Ydin();

?>