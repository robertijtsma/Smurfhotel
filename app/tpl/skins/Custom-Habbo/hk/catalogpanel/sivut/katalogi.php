<div class="otsikko">

	CatalogPanel

</div>

<div class="sisalto">

	<?php
	if(!isset($_GET["toiminto"])) {
	?>


	<table class="taulukko">
    
    	<tr class="yla"><td>Title</td><td>Show</td><td>Minimum rank</td><td>Only VIP</td><td></td></tr>
        
        <?php
		
		$sql = mysql_query("SELECT * FROM catalog_pages WHERE parent_id = '-1' ORDER BY order_num ASC");
		$i = 0;
		while($tulos = mysql_fetch_array($sql)) {
			
			echo "<tr class=\"pariton\">";
			
			echo "<td>" . $tulos["caption"] . "</td><td>" . $ydin->KyllaEi($tulos["visible"]) . "</td><td>" . $tulos["min_rank"] . "</td><td>" . $ydin->KyllaEi($tulos["vip_only"]) . "</td><td align=\"right\"><a href=\"?sivu=katalogi&toiminto=muokkaa&ksivu=" . $tulos["id"] . "\"><img src=\"tyyli/kuvat/muokkaa.png\"></a></td>";
			
			echo "</tr>";
			
			$sql1 = mysql_query("SELECT * FROM catalog_pages WHERE parent_id = '" . $tulos["id"] . "' ORDER BY order_num ASC");
			while($tulos1 = mysql_fetch_array($sql1)) {
				
				echo "<tr class=\"parillinen\">";
				
				echo "<td>&raquo; " . $tulos1["caption"] . "</td><td>" . $ydin->KyllaEi($tulos1["visible"]) . "</td><td>" . $tulos1["min_rank"] . "</td><td>" . $ydin->KyllaEi($tulos1["vip_only"]) . "</td><td align=\"right\"><a href=\"?sivu=katalogi&toiminto=muokkaa&ksivu=" . $tulos1["id"] . "\"><img src=\"tyyli/kuvat/muokkaa.png\"></a></td>"; 
				
				echo "</tr>";
			}
									
		}
		
		?>
    
    </table>
    
    <?php
	} else {
		$tulos = mysql_fetch_array(mysql_query("SELECT * FROM catalog_pages WHERE id = '" . $ydin->Suodata($_GET["ksivu"]) . "'"));
	?>
    	<a href="?sivu=katalogi">&laquo; Return</a>
        <hr>
        
        <?php
		if(!empty($_GET["onnistui"])) {
			echo "<div id=\"successfully\">Katalog is updated!</div>";
		}
		?>
        
        <form action="toiminnot.php?t=muokkaaSivua&sivu=<?php echo $ydin->Suodata($_GET["ksivu"]); ?>" method="post">
        
        	Page Title:
            <input type="text" name="nimi" value="<?php echo $tulos["caption"]; ?>">
            Text 1:
            <textarea name="teksti1"><?php echo $tulos["page_text1"]; ?></textarea>
            Text 2:
            <textarea name="teksti2"><?php echo $tulos["page_text2"]; ?></textarea>
            Text Data:
            <textarea name="tietoteksti"><?php echo $tulos["page_text_details"]; ?></textarea>
            Text teaser:
            <textarea name="teksti_teaseri"><?php echo $tulos["page_text_teaser"]; ?></textarea>
            
            <table border="0">

            <tr><td>Icon color:</td><td>
            <select name="ikoni_vari">
            
            	<?php
				$sql = mysql_query("SELECT * FROM catalog_pages GROUP BY icon_color");
				while($tulos1 = mysql_fetch_array($sql)) {
					if($tulos["icon_color"] == $tulos1["icon_color"])
						echo "<option value=\"" . $tulos1["icon_color"] . "\" SELECTED>" . $tulos1["icon_color"] . "</option>";
					else
						echo "<option value=\"" . $tulos1["icon_color"] . "\">" . $tulos1["icon_color"] . "</option>";
				}
				?>
            
            </select>
            </td></tr>
          
            <tr><td>Icon image:</td><td>
            <select name="ikoni_kuva">
            
            	<?php
				$sql = mysql_query("SELECT * FROM catalog_pages GROUP BY icon_image");
				while($tulos1 = mysql_fetch_array($sql)) {
					if($tulos["icon_image"] == $tulos1["icon_image"])
						echo "<option value=\"" . $tulos1["icon_image"] . "\" SELECTED>" . $tulos1["icon_image"] . "</option>";
					else
						echo "<option value=\"" . $tulos1["icon_image"] . "\">" . $tulos1["icon_image"] . "</option>";
				}
				?>
            
            </select>
            </td></tr>
            
            <tr><td>Show:</td><td>
            <select name="nakyvilla">
            
            	<option value="0" <?php if($tulos["visible"] == 0) echo "SELECTED"; ?>>No</option>
                <option value="1" <?php if($tulos["visible"] == 1) echo "SELECTED"; ?>>Yes</option>
            
            </select>
            </td></tr>
            
            <tr><td>Minimum Rank:</td><td>
            <select name="minimi_rank">
            
            	<?php
				$sql = mysql_query("SELECT * FROM ranks");
				while($tulos1 = mysql_fetch_array($sql)) {
					if($tulos["min_rank"] == $tulos1["id"])
						echo "<option value=\"" . $tulos1["id"] . "\" SELECTED>" . $tulos1["name"] . "</option>";
					else
						echo "<option value=\"" . $tulos1["id"] . "\">" . $tulos1["name"] . "</option>";
				}
				?>
                            
            </select>
            </td></tr>
            
            <tr><td>Layout:</td><td>
            <select name="layout">
            
            	<?php
				$sql = mysql_query("SELECT * FROM catalog_pages GROUP BY page_layout");
				while($tulos1 = mysql_fetch_array($sql)) {
					if($tulos["page_layout"] == $tulos1["page_layout"])
						echo "<option value=\"" . $tulos1["page_layout"] . "\" SELECTED>" . $tulos1["page_layout"] . "</option>";
					else
						echo "<option value=\"" . $tulos1["page_layout"] . "\">" . $tulos1["page_layout"] . "</option>";
				}
				?>
            
            </select>
            </td></tr>
            
            <tr><td>Headline:</td><td>
            <select name="headline">
            
            	<?php
				$sql = mysql_query("SELECT * FROM catalog_pages GROUP BY page_headline");
				while($tulos1 = mysql_fetch_array($sql)) {
					if($tulos["page_headline"] == $tulos1["page_headline"])
						echo "<option value=\"" . $tulos1["page_headline"] . "\" SELECTED>" . $tulos1["page_headline"] . "</option>";
					else
						echo "<option value=\"" . $tulos1["page_headline"] . "\">" . $tulos1["page_headline"] . "</option>";
				}
				?>
            
            </select>
            </td></tr>
            
            <tr><td>Teaser:</td><td>
            <select name="teaseri">
            
            	<?php
				$sql = mysql_query("SELECT * FROM catalog_pages GROUP BY page_teaser");
				while($tulos1 = mysql_fetch_array($sql)) {
					if($tulos["page_teaser"] == $tulos1["page_teaser"])
						echo "<option value=\"" . $tulos1["page_teaser"] . "\" SELECTED>" . $tulos1["page_teaser"] . "</option>";
					else
						echo "<option value=\"" . $tulos1["page_teaser"] . "\">" . $tulos1["page_teaser"] . "</option>";
				}
				?>
            
            </select>
            </td></tr> 
            
            <tr><td>Special:</td><td>
            <select name="special">
            
            	<?php
				$sql = mysql_query("SELECT * FROM catalog_pages GROUP BY page_special");
				while($tulos1 = mysql_fetch_array($sql)) {
					if($tulos["page_special"] == $tulos1["page_special"])
						echo "<option value=\"" . $tulos1["page_special"] . "\" SELECTED>" . $tulos1["page_special"] . "</option>";
					else
						echo "<option value=\"" . $tulos1["page_special"] . "\">" . $tulos1["page_special"] . "</option>";
				}
				?>
            
            </select>
            </td></tr>  
            
            <tr><td>Only VIP:</td><td>
            <select name="vip">
            
            	<option value="0" <?php if($tulos["vip_only"] == 0) echo "SELECTED"; ?>>Yes</option>
                <option value="1" <?php if($tulos["vip_only"] == 1) echo "SELECTED"; ?>>No</option>
            
            </select>
            </td></tr>
            
           	</table>
            
            <br>
            <input type="submit" value="Save page">
                              
        </form>
    <?php
	} 
	?>

</div>