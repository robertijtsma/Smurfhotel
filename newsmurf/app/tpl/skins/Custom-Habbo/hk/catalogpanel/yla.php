<?php include("yleiset.php"); ?>
<?php ini_set('display_errors', 1); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="tyyli/tyyli.css" type="text/css">
<script src="jquery.js" type="text/javascript"></script>
<script src="js.js" type="text/javascript"></script>
<title>CAPA - <?php echo $sivu; ?></title>
</head>

<body>

<div id="ylaviiva">
<?php
if(isset($_SESSION["sisalla"]) && $_SESSION["sisalla"] == true) {
?>
<div class="linkit">
	<a href="?sivu=etusivu">Home</a>
    <a href="?sivu=tavarat">Product management</a>
    <a href="?sivu=katalogi">Catalog management</a>
	<a href="toiminnot.php?t=ulos">Log out</a>
</div>
<?php } ?>
</div>


