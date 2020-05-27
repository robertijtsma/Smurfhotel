<html>
	<head>
		<title>Smurf ~ Waar anders?</title>
		<link rel="shortcut icon" href="/app/tpl/skins/{skin}/images/favicon.ico" />
<meta name="vindretros" content="1tv4bs7jx53pwhkaqui6ync8erdml29z" />
<link rel="stylesheet" href="/app/tpl/skins/{skin}/css/styless.css" type="text/css"/>
	</head>
	<body>
</div>

			<div class="habbi-content">
			 <?php if(isset($template->form->error)) { echo '<div class="error">'.$template->form->error.'</div>'; } ?>
			<div class="logo"></div>
			<div class="users-online"><b>{online}</b> Speler(s) in het hotel!</div>
			<div class="habbi-input">
				<form class="login" method="post">
				
					 <input tabindex="3" placeholder="Gebruikersnaam" type="text" class="login-field" name="log_username" id="login-username" value="" maxlength="48">
					<input tabindex="4" placeholder="Wachtwoord" type="password" class="login-field" name="log_password" id="login-password" maxlength="32">
<input type="submit" value="Login" name="login">

				</form>
			</div>
			<a href="/register"><div class="habbi-register">
				<span>Maak gratis</span>
				een account!
			</div>
			</a>
		</div>
		
	</body>
</html>
