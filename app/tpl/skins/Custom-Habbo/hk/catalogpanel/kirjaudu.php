<?php
$sivu = "Kirjaudu";
require_once("yla.php");
if($_SESSION["sisalla"]) exit(header("Location: hallinta.php"));
?>


<div id="kirjaudu_runko">


	<div class="otsikko">
    	Sign in
    </div>
    
    <div class="sisalto">
    
    <?php
	if(isset($_GET["virhe"])) {
		$virhe = $ydin->Suodata($_GET["virhe"]);
		
		if($virhe != "" && $virhe < 3) {
		
		echo "<div id=\"error\">";
		
			if($virhe == 1)
				echo "Wrong username or password!";
			if($virhe == 2)
				echo "You dont have permissions!";
			
			echo "</div>";
		
		}
	?>
	<script>
	$(document).ready(function() {
		$('#virhe').delay(1500).slideUp();
	});
	</script>
    <?php
	}
	?>
    
    <form action="toiminnot.php?t=kirjaudu" method="post">
    	Username:
        <input type="text" name="tunnus" class="kirjaudu">
        Password:
        <input type="password" name="salasana" class="kirjaudu">
        <input type="submit" value="Kirjaudu" class="nappi">
 	</form>
        <div id="tasaus"></div>
    </div>


</div>

<div id="footer">CatalogPanel versio 1.0.0 | Coding & style by <a target="_blank" href="http://www.retrot.net/index.php?action=profile;u=46">ATKD</a></div>