<!DOCTYPE html>
<html lang="en">
<head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Startseite</title>   

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
	<a href="{url}/me"><div class='chosen'>Was ist Neu?</div></a><div class='chosen'>I</div>
	<a href="{url}/account">Optionen</a><div class='chosen'>I</div>
	<a href="{url}/logout">Ausloggen</a>
  </div>
 </div>
 <div class='content'>
  <div class='infoarea'>
	<div id="platearea">
	 <div id='habboplate'></div>
	 <img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure={figure}&action=sit,wav&gesture=sml&direction=2&head_direction=3&size=n&img_format=png" alt="{username}"></img>
	</div>
	<div class='info'>
	 <h2>{username}</h2><br>
	 <text>• {motto}</text>
	 <text>• {coins} <img id='coins' src='{url}/app/tpl/skins/Habbo/images/coin.png' style='width:20px;height:20px'></text>
	 <text>• {activitypoints} <img id='pixels' src='{url}/app/tpl/skins/Habbo/images/ducket.png' style='width:20px;height:20px'></text>
	</div>
	<div class='info'>
	 <h2>Werbung</h2><br>
	 <text style='text-align: center;'>{ads}</text>
	</div>
  </div>
  <div class='newsarea'>
  <h2>Aktuelle News</h2><br>
	{news}
  </div>
</div>
        <div id="footer" >
			<?php include('includes/footer.php'); ?>
			<?php include('includes/checktheban.php'); ?>
        </div>
    
    </body>
</html>
