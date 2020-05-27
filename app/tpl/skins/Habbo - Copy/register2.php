<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Anmeldung</title>
        
<link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/design.css" type="text/css">
</head>
    
<body>
 <div class='header'>
  <div class='circle'>{online}</div>
  <div class='headerimage'></div>
  <div class='logo'></div>
 </div>
 <div class='naviarea'>
  <div class='navi'>
	<h><a href="{url}/">Startseite</a></h>
	<h><a href="{url}/community">Community</a></h>
	<h><a href="{url}/staff">Mitarbeiter</a></h>
  </div>
 </div>
<?php if(isset($template->form->error)) { echo '<div class="error">'.$template->form->error.'</div>'; } ?>
 <div class='content'>
  <div class='registerbg'></div>
  <div class='register'> <form method="post" id="phase-0-form"> 
	<h3>völlig kostenlos Spielen</h3><br>
	<text><h4>Benutzername</h4><br>
	Mit diesem Namen wirst du dich in Zukunft im {hotelName} anmelden. Dein Name muss einzigartig sein und darf nicht gegen die Regeln verstoßen.</text><br>
	<input type="text" id="habbo-name" size="35" value="<?php echo $template->form->reg_username; ?>" name="reg_username" class="text-field" maxlength="32"><br><br>

	<text><h4>E-Mail</h4><br>
	Bitte benutze eine gültige Adresse.</text><br>
	<input type="text" id="email" size="35" name="reg_email" value="<?php echo $template->form->reg_email; ?>" class="text-field" maxlength="48"><br><br>

	<text><h4>Passwort</h4><br>
	Dein Passwort sollte aus mindestens 6 Zeichen bestehen. Des Weiteren solltest du eine Zahl oder ein Sonderzeichen hinzufügen.</text><br>
	<input type="password" id="password" size="35" name="reg_password" value="" class="password-field" maxlength="32"><br><br>
	<text><h4>Passwort wiederholen</h4></text><br>
	<input type="password" id="password2" size="35" name="reg_rep_password" value="" class="password-field" maxlength="32"><br><br>
	<text style='font-size:16px;'>Willkommen im {hotelName}! hab Spaß und <a href='{url}/safety' style='text-decoration:underline'>bleib sicher</a>!</text><br>
 	<input type="submit" value="meinen {hotelName} erstellen" name="register">                  
	</form> 
  </div>
 </div>

        <div id="footer" >
			<?php include('includes/footer.php'); ?>
			<?php include('includes/checktheban.php'); ?>
        </div>
    </body>
</html>
