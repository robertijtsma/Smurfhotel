<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Community</title>
        
        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/common.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/fullcontent.js"></script>
        
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
	<a href="{url}/community"><div class='chosen'>Top 10</div></a>
  </div>
 </div>
 <div class='content'>
  <div class='info' style='width:80%;'>
	<h2>Die besten 10 der Community!</h2><hr><br>
	<text>Wolltest du schon immer einmal wissen, wer der Reichste der Reichen ist? Oder wer die meisten Lobe im Hotel bekommen hat? Auf dieser Seite kannst Du schnell herausfinden wer in der Community den Ton angibt.</text>
  </div>
  <div class='topuser'>
	<h3>Taler</h3>                             
	{credits}
  </div>
  <div class='topuser'>
	<h3>Pixel</h3>                             
	{pixels}
  </div>
 <div class='topuser'>
	<h3>Lobe</h3>                             
	{respect}
  </div>
 <div class='topuser'>
	<h3>Aktivität</h3>                             
	{activity}
  </div>
 </div>
        <div id="footer" >
			<?php include('includes/footer.php'); ?>
			<?php include('includes/checktheban.php'); ?>
        </div>
    
    </body>
</html>
