<div class="otsikko">
	CatalogPanel
    <div style="float: right;">
    	<input type="text" name="etsi" id="etsi" style="width: 200px; padding: 0;" placeholder="Search"<?php if(!empty($_GET["etsi"])) echo " value=\"" . $ydin->Suodata($_GET["etsi"]) . "\""; ?>><input type="button" value="Search" style="padding: 0;" onclick="etsiTavara(document.getElementById('etsi').value);">
    </div>
    
    <div id="tasaus"></div>
    
</div>

<div class="sisalto">

	<?php
	if(!isset($_GET["toiminto"])) {
	
		if(empty($_GET["s"])) {
			$s = 0;
		} else {
			$s = $ydin->Suodata($_GET["s"]);
		}
		
		if(!isset($_GET["etsi"]))
			$sivumaara = mysql_num_rows(mysql_query("SELECT * FROM catalog_items"));
		if(isset($_GET["etsi"]) && $_GET["etsi"] == "raret")
			$sivumaara = mysql_num_rows(mysql_query("SELECT * FROM catalog_items WHERE page_id = '" . $rare_sivu_id . "'"));
		elseif(isset($_GET["etsi"]) && $_GET["etsi"] != "raret")
			$sivumaara = mysql_num_rows(mysql_query("SELECT * FROM catalog_items WHERE catalog_name LIKE '%" . $ydin->Suodata($_GET["etsi"]) . "%'"));
		
		$riveja = $s * $_SESSION["riveja"];
		
		$sivuja = ceil($sivumaara / $_SESSION["riveja"]);
		
		if(!isset($_GET["etsi"])) {
					
		echo "<center>";
		
			if($s < 1)
				echo "&laquo Previous page | <a href=\"?sivu=tavarat&s=" . ($s + 1) . "\">Next page &raquo;</a>";
			elseif(($s + 1) > $sivuja)
				echo "<a href=\"?sivu=tavarat&s=" . ($s - 1) . "\">&laquo; Previous page</a> | Next page &raquo;";
			else
				echo "<a href=\"?sivu=tavarat&s=" . ($s - 1) . "\">&laquo; Previous page</a> | <a href=\"?sivu=tavarat&s=" . ($s + 1) . "\">Next page &raquo;</a>";
		
		echo " | <a href=\"?sivu=tavarat&etsi=raret\">Show Rares</a>";
		echo "</center><br>";
		} else {
			echo "<a href=\"?sivu=tavarat\">&laquo; Stop filtering</a><br><br>";
		}
		
		if($sivumaara > $_SESSION["riveja"] && isset($_GET["etsi"]))
			echo "<center>Search results is over " . $_SESSION["riveja"] . ". Cant find item! Please refine your search!</center>";
		
		if(!isset($_GET["etsi"]))
			$sql = mysql_query("SELECT * FROM catalog_items ORDER BY catalog_name ASC LIMIT " . $riveja . " , " . $_SESSION["riveja"]);
		elseif(isset($_GET["etsi"]) && $_GET["etsi"] == "raret")
			$sql = mysql_query("SELECT * FROM catalog_items WHERE page_id = '" . $rare_sivu_id . "'");
		else
			$sql = mysql_query("SELECT * FROM catalog_items WHERE catalog_name LIKE '%" . $ydin->Suodata($_GET["etsi"]) . "%' ORDER BY catalog_name ASC LIMIT " . $riveja . " , " . $_SESSION["riveja"]);
		?>
	
		<table class="taulukko">
	
			<tr class="yla"><td width="25%">Item</td><td width="25%">Page</td><td width="15%">Price of coins</td><td width="15%">Price of pixels</td><td width="20%">Purchase Quantity</td><td></td></tr>
	
		<?php
				
		$i = 0;
		while($tulos = mysql_fetch_array($sql)) {
			if($i % 2 == 0)
				echo "<tr class=\"parillinen\">";
			else
				echo "<tr class=\"pariton\">";
		
		echo "<td>" . $tulos["catalog_name"] . "</td><td>" . $ydin->SivuNimi($tulos["page_id"]) . "</td><td>" . $tulos["cost_credits"] . "</td><td>" . $tulos["cost_pixels"] . "</td><td>" . $tulos["amount"] . "</td>";
		
		
		echo "<td><a href=\"?sivu=tavarat&toiminto=muokkaa&tavara=" . $tulos["id"] . "\"><img src=\"tyyli/kuvat/muokkaa.png\"></a></td>";
		
		echo "</tr>";
		
		$i++;
		
		}
		
		?>
	
		</table>
        
 	<?php
	} if(isset($_GET["toiminto"])) {
		
		$toiminto = $ydin->Suodata($_GET["toiminto"]);
		
		if($toiminto == "muokkaa") {
			
			$tulos = mysql_fetch_array(mysql_query("SELECT * FROM catalog_items WHERE id = " . $ydin->Suodata($_GET["tavara"])));
	?>
    
    <a href="?sivu=tavarat">&laquo; Return</a>
	<hr>    
    
    	<?php
		if(!empty($_GET["onnistui"]))
			echo "<div id=\"onnistui\">Item is edited!</div>";
		?>
    
    	<form action="toiminnot.php?t=muokkaaTavara&tavara=<?php echo $tulos["id"]; ?>" method="post">
        
        	Item name:
            <input type="text" name="nimi" value="<?php echo $tulos["catalog_name"]; ?>">
            Price of coins:
            <input type="text" name="hintak" value="<?php echo $tulos["cost_credits"]; ?>">
            Price of pixels:
            <input type="text" name="hintap" value="<?php echo $tulos["cost_pixels"]; ?>">
            Purchase Quantity:
            <input type="text" name="ostomaara" value="<?php echo $tulos["amount"]; ?>">
            Page:
            <select name="sivu" style="border: 1px solid black;">
            
            	<?php
				$sql1 = mysql_query("SELECT * FROM catalog_pages WHERE parent_id = '-1' ORDER BY order_num ASC");
				while($tulos1 = mysql_fetch_array($sql1)) {
					if($tulos1["id"] == 1)
						echo "<option value=\"" . $tulos1["id"] . "\" DISABLED>" . $tulos1["caption"] . "</option>";
					else {
						if($tulos1["id"] == $tulos["page_id"])
							echo "<option value=\"" . $tulos1["id"] . "\" SELECTED>" . $tulos1["caption"] . "</option>";
					else
							echo "<option value=\"" . $tulos1["id"] . "\">" . $tulos1["caption"] . "</option>";
					}

					$sql2 = mysql_query("SELECT * FROM catalog_pages WHERE parent_id = '" . $tulos1["id"] . "' ORDER BY order_num ASC");
					while($tulos2 = mysql_fetch_array($sql2)) {
						if($tulos2["id"] == $tulos["page_id"])
							echo "<option value=\"" . $tulos2["id"] . "\" SELECTED>&raquo; " . $tulos2["caption"] . "</option>";
						else
							echo "<option value=\"" . $tulos2["id"] . "\">&raquo; " . $tulos2["caption"] . "</option>";

					}
					
					
				}
				?>
            
            </select><br><br>
            
            <input type="submit" value="Save">
        
        </form>
    
    <?php	
		}
		
	}
	?>


</div>