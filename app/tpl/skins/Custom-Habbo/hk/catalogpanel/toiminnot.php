<?php

include("yleiset.php");

if(empty($_GET["t"])) exit(header("Location: kirjaudu.php"));

$toiminto = $ydin->Suodata($_GET["t"]);

if($toiminto == "kirjaudu") {
	
	$tunnus = $ydin->Suodata($_POST["tunnus"]);
	$salasana = $ydin->Suodata($_POST["salasana"]);
	
	$tarkistus = $ydin->Kirjaudu($tunnus, $salasana);
	
	if($tarkistus == '0') exit(header("Location: kirjaudu.php?virhe=1"));
	
	if($tarkistus == '1') exit(header("Location: kirjaudu.php?virhe=2"));
	
	$_SESSION["sisalla"] = true;
	$_SESSION["tunnus"] = $tunnus;
	
	header("Location: hallinta.php");
	
}

elseif($toiminto == "ulos") {
	$_SESSION["sisalla"] = false;
	$_SESSION["tunnus"] = "";
	
	header("Location: index.php");
}

elseif($toiminto == "muokkaaTavara") {
	
	$nimi = $ydin->Suodata($_POST["nimi"]);
	$hintak = $ydin->Suodata($_POST["hintak"]);
	$hintap = $ydin->Suodata($_POST["hintap"]);
	$ostomaara = $ydin->Suodata($_POST["ostomaara"]);
	
	$sivu = $ydin->Suodata($_POST["sivu"]);

	if(!$_SESSION["sisalla"]) exit(header("Location: kirjaudu.php"));
	
	if(!$ydin->TarkistaOikeudet()) exit(header("Location: ?t=ulos"));
	
	mysql_query("UPDATE catalog_items SET page_id = '" . $sivu . "', catalog_name = '" . $nimi . "', cost_credits = '" . $hintak . "', cost_pixels = '" . $hintap . "', amount = '" . $ostomaara . "' WHERE id = '" . $ydin->Suodata($_GET["tavara"]) . "'");
	
	header("Location: hallinta.php?sivu=tavarat&toiminto=muokkaa&tavara=" . $ydin->Suodata($_GET["tavara"]) . "&onnistui=1");
	
}

elseif($toiminto == "muokkaaSivua") {
	
	$nimi = $ydin->Suodata($_POST["nimi"]);
	$teksti1 = $ydin->Suodata($_POST["teksti1"]);
	$teksti2 = $ydin->Suodata($_POST["teksti2"]);
	$tietoteksti = $ydin->Suodata($_POST["tietoteksti"]);
	$teaseri = $ydin->Suodata($_POST["teaseri"]);
	$teksti_teaseri = $ydin->Suodata($_POST["teksti_teaseri"]);
	$ikoni_vari = $ydin->Suodata($_POST["ikoni_vari"]);
	$ikoni_kuva = $ydin->Suodata($_POST["ikoni_kuva"]);
	$nakyvilla = $ydin->Suodata($_POST["nakyvilla"]);
	$minimi_rank = $ydin->Suodata($_POST["minimi_rank"]);
	$layout = $ydin->Suodata($_POST["layout"]);
	$headline = $ydin->Suodata($_POST["headline"]);
	$special = $ydin->Suodata($_POST["special"]);
	$vip = $ydin->Suodata($_POST["vip"]);
	
	if(!$_SESSION["sisalla"]) exit(header("Location: kirjaudu.php"));
	
	if(!$ydin->TarkistaOikeudet()) exit(header("Location: ?t=ulos"));
	
	mysql_query("UPDATE catalog_pages SET caption = '" . $nimi . "', icon_color = '" . $ikoni_vari . "', icon_image = '" . $ikoni_kuva . "', visible = '" . $nakyvilla . "', min_rank = '" . $minimi_rank . "', page_layout = '" . $layout . "', page_headline = '" . $headline . "', page_teaser = '" . $teaseri . "', page_special = '" . $special . "', page_text1 = '" . $teksti1 . "', page_text2 = '" . $teksti2 . "', page_text_details = '" . $tietoteksti . "', page_text_teaser = '" . $teksti_teaseri . "', vip_only = '" . $vip . "' WHERE id = '" . $ydin->Suodata($_GET["sivu"]) . "'") or die(mysql_error());
	
	header("Location: hallinta.php?sivu=katalogi&toiminto=muokkaa&ksivu=" . $ydin->Suodata($_GET["sivu"]) . "&onnistui=1");
	
}
?>