<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Optionen</title>
        
        <script type="text/javascript">
            document.habboLoggedIn = true;
            var habboName = "{username}";
            var habboId = {userid};
            var habboReqPath = "";
            var habboStaticFilePath = "{url}/app/tpl/skins/Habbo";
            var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
                HabboClient.maximizeWindow = true;
            }
        </script>
        
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
	{housekeeping}
	<a href="{url}/client">
	 <div class='client'>Client<img src="{url}/app/tpl/skins/Habbo/images/client.png"></div>
	</a>
  </div>
 </div>
 <div class='subnaviarea'>
  <div class='subnavi'>
	<a href="{url}/me">Was ist Neu?</a><div class='chosen'>I</div>
	<a href="{url}/account"><div class='chosen'>Optionen</div></a><div class='chosen'>I</div>
	<a href="{url}/logout">Ausloggen</a>
  </div>
 </div>
<?php if(isset($template->form->error)) { echo '<div class="error">'.$template->form->error.'</div>'; } ?>
 <div class='content'>
                                        <form method="post" class='account'>
                                            <br><h3>Dein Status:</h3>
                                            <p>Andere {hotelName}'s im Hotel werden deinen Status lesen!</p>
                                            <p><label>Status:<input type="text" name="acc_motto" size="32" maxlength="32" value="{motto}" id="avatarmotto"></label></p><br><hr><br>
                                            <h3>Deine E-Mail Addresse</h3>
                                            <p>Hier kannst du die E-Mail Adresse, die du beim Anmelden angegeben hast durch eine andere ersetzen.</p>
                                            <p><label>E-Mail:<input type="text" name="acc_email" size="32" value="{email}" id="avatarmotto"></p><br><hr><br>
                                            <h3>Jetziges Passwort</h3>
                                            <p>Gib hier das Passwort ein, mit dem du dich bisher ins {hotelName} eingeloggt hast.</p>
                                            <p><label>Passwort:<input type="password" name="acc_old_password" value="" id="avatarmotto"></p><br><hr><br>
                                            <h3>Neues Passwort</h3>
                                            <p>Gib hier das neue Passwort ein, du wirst dich nun mit diesem Passwort ins {hotelName} einloggen, sobald du auf Fertig klickst.</p>
                                            <p><label>Passwort:<input type="password" name="acc_new_password" value="" id="avatarmotto"></p><br><hr><br>
                                       <center><input type="submit" value="Fertig" name="account" class="submit"></center>
                                        </form>
                                 
</div>
        
        <div id="footer" >
		    <?php include('includes/footer.php'); ?>
			<?php include('includes/checktheban.php'); ?>
        </div>
    
    </body>
</html>
