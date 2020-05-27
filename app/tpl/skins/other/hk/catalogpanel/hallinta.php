<?php
$sivu = "Hallinta";
include("yla.php");

if(!$ydin->TarkistaOikeudet()) exit(header("Location: toiminnot.php?t=ulos"));

if(empty($_GET["sivu"])) exit(header("Location: ?sivu=etusivu"));

$sivu = $ydin->Suodata($_GET["sivu"]);
?>

<div id="runko">
    
    <?php
	
		if(file_exists("sivut/" . $sivu . ".php"))
			include("sivut/" . $sivu . ".php");
		else
			include("sivut/404.php");
	
	?>

</div>

<?php
if($sivu == "etusivu") {
?>
<div id="footer">CalatogPanel versio 1.0.0 | Coding & style by <a target="_blank" href="http://www.retrot.net/index.php?action=profile;u=46">ATKD</a></div>
<?php
}
?>