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
            var habboImagerUrl = "https://smurfhotel.nl/smurf-imaging/";
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
	<h><a href="{url}/">Home</a></h>
	<h><a href="{url}/community">Community</a></h>
	<h><a href="{url}/staff">Medewerkers</a></h>
	{housekeeping}
	<a href="{url}/client">
	 <div class='client'>Client<img src="{url}/app/tpl/skins/Habbo/images/client.png"></div>
	</a>
  </div>
 </div>
 <div class='subnaviarea'>
  <div class='subnavi'>
	<a href="{url}/me">Home</a><div class='chosen'>I</div>
	<a href="{url}/account"><div class='chosen'>Instellingen</div></a><div class='chosen'>I</div>
	<a href="{url}/logout">Uitloggen</a>
  </div>
 </div>
<?php if(isset($template->form->error)) { echo '<div class="error">'.$template->form->error.'</div>'; } ?>
 <div class='content'>
                                        <form method="post" class='account'>
                                            <br><h3>Motto:</h3>
                                            <p>Je motto word weergegeven in de client als iemand op je klikt!</p>
                                            <p><label>Status:<input type="text" name="acc_motto" size="32" maxlength="32" value="{motto}" id="avatarmotto"></label></p><br><hr><br>
                                            <h3>Email:</h3>
                                            <p>Je email adres dat geregistreerd staat op dit account.</p>
                                            <p><label>E-Mail:<input type="text" name="acc_email" size="32" value="{email}" id="avatarmotto"></p><br><hr><br>
                                            <h3>Huidig Wachtwoord</h3>
                                            <p>Voer het wachtwoord in dat u hebt gebruikt om u aan te melden bij Smurf.</p>
                                            <p><label>Wachtwoord:<input type="password" name="acc_old_password" value="" id="avatarmotto"></p><br><hr><br>
                                            <h3>Nieuw Wachtwoord</h3>
                                            <p>Voer hier het nieuwe wachtwoord in, u logt nu in op Smurf met dit wachtwoord zodra u op "Opslaan" klikt.</p>
                                            <p><label>Wachtwoord:<input type="password" name="acc_new_password" value="" id="avatarmotto"></p><br><hr><br>
                                       <center><input type="submit" value="Opslaan" name="account" class="submit"></center>
                                        </form>
                                 
</div>
        
        <div id="footer" >
		    <?php include('includes/footer.php'); ?>
			<?php include('includes/checktheban.php'); ?>
        </div>
    
    </body>
</html>
