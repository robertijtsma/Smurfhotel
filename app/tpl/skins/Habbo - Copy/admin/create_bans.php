 <?php 
		if($_SESSION['user']['rank'] >= 8){
		if($_POST['add_ban']){
			$bantype = mysql_real_escape_string($_POST['bantype']);
			$value = mysql_real_escape_string($_POST['value']);
			$reason = mysql_real_escape_string($_POST['reason']);
			$expire = strtotime($_POST['expire']);
			
			if(empty($value)){
				echo '<div class = "alert">Du musst einen Namen oder eine Ip eingeben</div><br>';
			}
				
			else if(empty($reason)){
				echo '<div class = "alert">Du solltest einen Grund nennen</div><br>';
			}
			
			else if(empty($expire)){
				echo '<div class = "alert">Wähle das Auslaufdatum des Banns</div><br>';
			}
			
			else{	
				$banlog = "INSERT INTO hk_logs (type, time, who_done) VALUES('Create Ban(" . $bantype .  ' - ' . $value .")','". time() ."','{$_SESSION['user']['username']}')";
				$query = "INSERT INTO bans SET bantype='{$bantype}', value='{$value}', reason='{$reason}', expire = '". $expire ."', added_by = '" . $_SESSION['user']['username'] . "', added_date = '". time() ."'";
				mysql_query($query) or die ("Error in query: {$logtest}. ".mysql_error());
				mysql_query($banlog);
				echo '<div class = "alert">Ban added successfully.<meta http-equiv="refresh" content="3;url={url}/index.php?url=hk&create_bans"/></div><br>';
			}
		}
?>
		<script type="text/javascript">
		  document.getElementById('date').value = Date();
		</script>
		<form method = "post">
			<select name = "bantype">
			  <option value="user">normaler Bann</option>
			  <option value="ip">IP Bann</option>
			</select><br>
			<b>Name/IP: </b><br><input type = "text" value = "<?php echo $_POST['value']; ?>" name = "value"><br>
			<b>Grund:</b><br><input type = "text" value = "<?php echo $_POST['reason']; ?>" name = "reason"><br>
			<b>Ende des Banns: </b><br><input id = "date" value = "<?php echo $_POST['expire']; ?>" type = "date" name = "expire"><br>
			<input type = "submit" name = "add_ban"><br>
		</form>
		
		<?php } else{die('Go away, this is for admins not noobs.');} ?>
