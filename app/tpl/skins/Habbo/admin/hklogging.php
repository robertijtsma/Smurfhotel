 <?php 
		if($_SESSION['user']['rank'] >= 6){
?>
		
		<table align = "center">
		  <tr>
			<th>ID</th>
			<th >Art</th>
			<th>Zeitpunkt</th>
			<th >Benutzer</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM hk_logs");
				while ($m = mysql_fetch_array($q)) { 
			
			?>
		  <tr align = "center">
			<td ><?php echo $m['id']; ?></td>
			<td ><?php echo $m['type']; ?></td>
			<td ><?php echo date('F d, Y', $m['time']); ?></td>
			<td ><?php echo $m['who_done']; ?></td>
		  </tr>
		  <?php } ?>
	  </table>
		<?php } else{die('kein Zugriff');} ?>