	<style>
		input{
			height:25px;
			border:1px solid lightgray;
			border-radius:2px;
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
		$q_edituser = "INSERT INTO hk_logs (type, time, who_done) VALUES('Edit user(" . $_POST['username_current'] .")','". time() ."','{$_SESSION['user']['username']}')";
		if($_SESSION['user']['rank'] >= 10){
		if(isset($_POST['update']))
		{
			mysql_query($q_edituser);
			mysql_query("UPDATE users SET motto = '" . filter($_POST['motto']) . "', rank = '" . filter($_POST['rank']) . "', credits = '" . filter($_POST['credits']) . "', activity_points = '" . filter($_POST['pixels']) . "' WHERE username = '" . filter($_POST['username_current']) . "'") or die(mysql_error());
		   echo "<div class = \"alert\">" . $_POST['username_current'] . "'s account updated.</div>"; 
		}

		if(isset($_POST['lookup']))
		{	
		if(mysql_num_rows(mysql_query("SELECT * FROM users WHERE username = '". filter($_POST['l_username']) ."'")) == 0) { echo "kein Eintrag gefunden"; }
		else { 
		$two = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE username = '" . filter($_POST['l_username']) . "'"));
	?>

	Account bearbeiten: <?php echo $username; ?></a>
	<form method='post' align = "center">
	<input type="hidden" name="username_current" value="<?php echo $_POST['l_username']; ?>" />
	
		<table align = "center" style="width: 100%;" align = "center">
				
			<tr>
				<td>Name</td></td>
				<td><input type="text" value="<?php echo $_POST['l_username']; ?>"  disabled /></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" value="<?php echo $two['mail']; ?>"  disabled /></td>
			</tr>
			<tr>
				<td>Motto</td>
				<td><input type="text" name="motto" value="<?php echo $two['motto']; ?>"  /></td>
			</tr>
			<tr>
				<td>Rang</td>
				<td><input type="text" name="rank" value="<?php echo $two['rank']; ?>"  /></td>
			</tr>
			<tr>
				<td>Taler</td>
				<td><input type="text" name="credits" value="<?php echo $two['credits']; ?>"  /></td>
			</tr>
			<tr>
				<td>Duckets</td>
				<td><input type="text" name="pixels" value="<?php echo $two['activity_points']; ?>"  /></td>
			</tr>
			<?php if($_POST['l_username'] == 'Test'){echo'IP viewing disabled for the \'Test\' user.';}
			else{?>
			<tr>
				<td>IP Adresse</td>
				<td><input type = "text" value = "<?php echo $two['ip_reg']; ?>" disabled></td>
			</tr>
			<tr>
				<td>letzte IP</td>
				<td><input type = "text" value = "<?php echo $two['ip_last']; ?>" disabled></td>
			</tr>
			<?php } ?>
		</table>
		<input type="submit" value="  Update account  " name="update"/>
	</form>
	<br />
	<?php
	}
	}
	?>
	<form method='post'>
	Benutzername <br /> <input type="text" name="l_username" /> <br /> <br />
	<input type="submit" value="  Suche starten  " name="lookup"/>
	</form>
<?php } else{die('kein Zugriff!');}
