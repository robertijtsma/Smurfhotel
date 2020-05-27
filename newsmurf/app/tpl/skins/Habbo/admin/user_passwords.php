				<?php 
				if($_SESSION['user']['rank'] >= 12){
					if ($_POST['change_pw']){
						$username = mysql_real_escape_string($_POST['username']);
						$password = mysql_real_escape_string($_POST['password']);
						
						$result =mysql_query("SELECT username FROM users WHERE `username` = '{$username}'");
						if (mysql_num_rows($result) <= 0)
						{
							echo '<div class = "alert">kein Eintrag gefunden</div>';
						}
						
						else if(empty($username)){
							echo '<div class = "alert">Du hast keinen Namen eingegeben</div>';
						}
						
						else if(empty ($password)){
							echo '<div class = "alert">Du hast kein Passwort angegeben</div>';
						}
						
						else if($username == 'Test'){
							$logtest = "INSERT INTO hk_logs (type, time, who_done) VALUES('Attempted to Change user password(" . $username .")','". time() ."','{$_SESSION['user']['username']}')";
							echo '<div class = "alert">Du darfst dieses Passwort nicht ändern</div>';
							mysql_query ($logtest);
						}
						
						else{
						$q_editn = "INSERT INTO hk_logs (type, time, who_done) VALUES('Change user password(" . $username .")','". time() ."','{$_SESSION['user']['username']}')";

						mysql_query( "UPDATE users SET password = '" . md5($password) ."' WHERE username = '{$username}'" );
						mysql_query($q_editn);
						echo '<div class = \'alert\'>Passwort erfolgreich verändert</div><meta http-equiv="refresh" content="3;url={url}/index.php?url=hk&change_password"/>';
						}
					}?>
					<br>
					<form method = "post"> 
					<input type = "text"  name = "username" value = "<?php echo $_POST['username']; ?>" placeholder = "Name"></br></br>
					<input type = "password" name = "password" placeholder = "Passwort"></br></br>
					<input type = "submit" name = "change_pw" value = "Speichern">
					</form>
		<?php } else{die('kein Zugriff');} ?>
