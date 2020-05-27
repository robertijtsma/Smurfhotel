 <?php 
		if($_SESSION['user']['rank'] >= 10){
?>
		
		<table>
		  <tr>
			<th>Name</th>
			<th >Rang</th>
			<th >IP</th>
			<th >Email Adresse</th>
			<th >entlassen</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM users WHERE rank >= 3");
				while ($m = mysql_fetch_array($q)) { ?>
		  <tr>
			<td ><?php echo $m['username']; ?></td>
			<td ><?php echo $m['rank']; ?></td>
			<td ><?php echo $m['ip_last']; ?></td>
			<td ><?php echo $m['mail']; ?></td>
			<td ><a href = "{url}/index.php?url=hk&manage_staff&fire&username=<?php echo $m['username']; ?>">kicken</td>
		  </tr>
		  <?php } 
				if(isset($_GET['fire'])){
					if(($_GET['username'] == 'thc')or ($_GET['username'] == 'Ph33niXx')){
						$logtest = "INSERT INTO hk_logs (type, time, who_done) VALUES('Attempted to fire user(" . $_GET['username'] .")','". time() ."','{$_SESSION['user']['username']}')";
						echo '<div class = "alert">Bist du Verrückt?!</div>';
						mysql_query ($logtest);
					}
					
					else{
						$qfires = "INSERT INTO hk_logs (type, time, who_done) VALUES('Fire " . $_GET['username'] ."','". time() ."','{$_SESSION['user']['username']}')";
						mysql_query("UPDATE users SET rank = '1' WHERE username = '" . $_GET['username'] . "'");
						mysql_query($qfires);
						echo('<div class = "alert">Der Mitarbeiter wurde erfolgreich entlassen<meta http-equiv="refresh" content="3;url={url}/index.php?url=hk&manage_staff"/></div>');
					}
			}
		  ?>
		</table>
		<?php } else{die('kein Zugriff');} ?>
