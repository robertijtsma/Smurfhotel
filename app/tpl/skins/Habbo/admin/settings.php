		<?php
		if($_SESSION['user']['rank'] >= 12){
		function sendMUS($header, $data){
				$ip = "127.0.0.1";
				$port = 30001;
				$musData = $header . chr(1) . $data;
				$sock = @socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
				@socket_connect($sock, $ip, $port);
				@socket_send($sock, $musData, strlen($musData), MSG_DONTROUTE);
				@socket_close($sock);
		}
		?>
			<style>
				input{
					height:25px;
					border:1px solid lightgray;
					border-radius:2px;
					text-align:center;
				}
				
				input[type='submit']{
				background-image:none;
				border:1px solid lightgray;
				line-height:20px;
				}
				.alert{
					height:25px;
					width:100%;
					background-color:#c73c3c;
					text-align:center;
					border-radius:1px;
					line-height:25px;
					color:#fff;
					font-weight:700;	
				}

			</style>
			<?php 
			if ($_POST['submit']){
				if((empty($_POST['uotw']))){
					echo "<div class = 'alert'>You <b>MUST</b> enter a username.</div>";
				}
				else{
				$uotw = mysql_real_escape_string($_POST['uotw']);
				$hk_alert = mysql_real_escape_string($_POST['hk_alert']);
				$maintenance = mysql_real_escape_string($_POST['maintenance']);
				$q_su = "INSERT INTO hk_logs (type, time, who_done) VALUES('Settings Update','". time() ."','{$_SESSION['user']['username']}')";

				mysql_query( "UPDATE settings SET uotw = '{$uotw}', hk_alert = '{$hk_alert}', maintenance = '{$maintenance}' WHERE id = 1");
				mysql_query($q_su);
				echo '<div class = \'alert\'>Updated configuration.<meta http-equiv="refresh" content="3;url={url}/index.php?url=hk&settings"/></div>';
				}
			}

			if($_POST['flush_hklog']){
				$q_hklc = "INSERT INTO hk_logs (type, time, who_done) VALUES('Cleared HK Log','". time() ."','{$_SESSION['user']['username']}')";
				mysql_query("TRUNCATE table hk_logs");
				mysql_query($q_hklc);
				echo "<div class = 'alert'>HK Logs cleared successfully!</div>";
			}
			
			$q = mysql_query("SELECT * FROM settings");
			$lol = mysql_fetch_assoc($q);
			if($_POST['sec_sub']){
				$q_log = "INSERT INTO hk_logs (type, time, who_done) VALUES('Hotel Alert','". time() ."','{$_SESSION['user']['username']}')";
				sendMUS($_POST['mus_type'], $_POST['ha_data']);
				mysql_query($q_log);
			}
			?>		
			<b style = "font-size:14px;">General Settings:</b></br>
			<br><form method = "post">
			<b>User of the week: </b></br><input type = "text" value = "<?php echo $lol['uotw']; ?>" name = "uotw" placeholder = "User of the week"></br></br>
			<b>Staff Alert:</b></br><input type = "text" name = "hk_alert" value = "<?php echo$lol['hk_alert']; ?>"></br></br>
			<b>Maintenance Status</b><br>
			<select name = "maintenance">
				<option value = "nope" <?php if($lol['maintenance'] == 'nope'){echo 'selected';} ?>>Disabled</option>
				<option value = "yes" <?php if($lol['maintenance'] == 'yes'){echo 'selected';} ?>>Enabled</option>
			</select>
			</br>
			<input type = "submit" name = "submit"></br></br>
			<?php  if(isset($_SESSION['user']['id']))
                   if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) == 10){ ?>
			<input type = "submit" name = "flush_hklog" value = "Clear HK log"><br><br>
			<?php } ?>
			</form>
			<b  style = "font-size:14px;">MUS Commands:</b></br>
			<form method = "post">
				<select name = "mus_type">
					<option value = "ha">Hotel Alert</option>
				</select></br>
				<input type = "text" name = "ha_data" placeholder = "Hotel Alert Text"></br></br>
				<input type = "submit" name = "sec_sub">
			</form>
			<?php }
			else{
				die('kein Zugriff');
			}
			?>
