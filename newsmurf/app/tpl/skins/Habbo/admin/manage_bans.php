 <?php 
		if($_SESSION['user']['rank'] >= 4){
?>
		
		<table align = "center">
		  <tr align = "center">
			<th >Name/IP</th>
			<th style = "width:100px;">Grund</th>
			<th >endet am</th>
			<th >von</th>
			<th >entfernen</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM bans");
				while ($m = mysql_fetch_array($q))
				{ 
				?>
		  <tr align = "center">
			<td ><?php echo $m['value']; ?></td>
			<td ><?php echo $m['reason']; ?></td>
			<td ><?php echo date("Y-m-d",$m['expire']); ?></td>
			<td ><?php echo $m['added_by']; ?></td>
			<td ><a href = "{url}/index.php?url=hk&manage_bans&remove&id=<?php echo $m['id']; ?>"><img src = "{url}/app/tpl/skins/{skin}/images/remove.png"></td>
		 </tr>
		  <?php } 
				// Remove Ban
				if(isset($_GET['remove'])){
					$removeban = "INSERT INTO hk_logs (type, time, who_done) VALUES('Remove Ban (" . $_GET['id'] .")','". time() ."','{$_SESSION['user']['username']}')";
					mysql_query("DELETE FROM bans WHERE id = '" . $_GET['id'] ."'");
					mysql_query($removeban);
					echo('<div class = "alert">Eintrag gelöscht<meta http-equiv="refresh" content="3;url={url}/index.php?url=hk&manage_bans"/></div>');
				}
		  ?>
		</table>
		<?php } else{die('Go away, this is for admins not noobs.');} ?>