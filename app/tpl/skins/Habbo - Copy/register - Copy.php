
<html>
	<head>

		<title>{hotelname} - Registeren</title>

<link rel="shortcut icon" href="/app/tpl/skins/{skin}/images/icons/favicon.ico" />
<link rel="stylesheet" href="/app/tpl/skins/{skin}/css/styless.css" type="text/css"/>
	</head>
	<body>
		<div class="habbi-content">
			<div class="logo"></div>
			<div class="users-online"><b>{online}</b> Speler(s) in het hotel!</div>
			<div class="habbi-input">
				<form class="login">
					<input type="text" placeholder="Gebruikersnaam" name="log_username">
					<input type="password" placeholder="Wachtwoord" name="log_password">
					<input type="submit" value="Login">
				</form>
			</div>
			<div class="habbi-register">
				<span>Maak gratis</span>
				een account!
			</div>
		</div>
		<div class="habbi-overlay">
			<div class="overlay-box">
				<div class="padding">
				
					<center><div class="overlay-title">Account aanmaken</div></center>
							<?php if(isset($template->form->error)) { echo '<div class="error">'.$template->form->error.'</div>'; } ?>
					<form method="post" class="register">
						<div class="input-div">
							<input type="text" placeholder="Gebruikersnaam" name="reg_username">
						</div>
						<div class="input-div">
							<input type="text" class="email" placeholder="E-mail" name="reg_email"> 
						</div>
						<div class="input-div">
							<input type="password" placeholder="Wachtwoord" name="reg_password">
						</div>
						<div class="input-div">
							<input type="password" placeholder="Wachtwoord herhalen" name="reg_rep_password">
						</div>
						<a href="index">
							<div class="close-overlay">
								Sluiten
							</div>
						</a>
						<input type="submit" value="Registeren" name="register">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>