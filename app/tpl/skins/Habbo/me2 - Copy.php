<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/common.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/fullcontent.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Smurf - Home</title>   

        <script type="text/javascript">
            document.habboLoggedIn = true;
            var habboName = "{username}";
            var habboId = {userid};
            var habboReqPath = "";
            var habboStaticFilePath = "{url}/app/tpl/skins/Habbo";
            var habboImagerUrl = "https://www.avatar-retro.com/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
                HabboClient.maximizeWindow = true;
            }
        </script>
<link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/design.css" type="text/css">
<style>
img.imagediscord {
    height: 100%;
    width: 100%;
}

</style>
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
            <a href="{url}/flashcheck/index.php" target="_blank" onclick="HabboClient.openOrFocus(this); return false;">
	 <div class='client'>Client<img src="{url}/app/tpl/skins/Habbo/images/client.png"></div>
	</a>
  </div>
 </div>
 <div class='subnaviarea'>
  <div class='subnavi'>
	<a href="{url}/me"><div class='chosen'>Home</div></a><div class='chosen'>I</div>
	<a href="{url}/account">Instellingen</a><div class='chosen'>I</div>
	<a href="{url}/logout">Uitloggen</a>
  </div>
 </div>
 <div class='content'>
  <div class='infoarea'>
	<div id="platearea">
	 <div id='habboplate'></div>
	 <img src="https://www.avatar-retro.com/habbo-imaging/avatarimage?figure={figure}&action=sit,wav&gesture=sml&direction=2&head_direction=3&size=n&img_format=png" alt="{username}"></img>
	</div>
	<div class='info'>
	 <h2>{username}</h2><br>
	 <text>• {motto}</text>
	 <text>• {coins} <img id='coins' src='{url}/app/tpl/skins/Habbo/images/coin.png' style='width:20px;height:20px'></text>
	 <text>• {activitypoints} <img id='pixels' src='{url}/app/tpl/skins/Habbo/images/ducket.png' style='width:20px;height:20px'></text>
	 	 <text></text>
	</div>
 <div class='discord' style='width:23%;'>
	<h2>Discord</h2><hr><br>
	  	<text><a href="https://discord.me/smurfhotel"><img class="imagediscord" src="{url}/app/tpl/skins/Habbo/images/discord.png"/></a></text>
  </div>
  </div>
  
  
  <div class='newsarea'>
  <h2>Laatste Nieuws</h2><br>
	{news}
  </div>
</div>
        <div id="footer" >
			<?php include('includes/footer.php'); ?>
			<?php include('includes/checktheban.php'); ?>
        </div>
    
    </body>
</html>
