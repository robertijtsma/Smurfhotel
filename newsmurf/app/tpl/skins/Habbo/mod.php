<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Moderatoren</title>
        
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
	<a href="{url}/staff">Management</a><div class='chosen'>I</div>
	<a href="{url}/mod"><div class='chosen'>Moderatoren</div></a><div class='chosen'>I</div>
	<a href="{url}/exp">Experten</a>
  </div>
 </div>
 <div class='content'>
	<div class='staffs'>
    
               <?php
							function GetDescr($level)
{
	switch ($level)
	{

        case 7:
		
			return 'Test-Moderator';
			
		case 8:
		
			return 'Moderatoren';
			
		default:
		
			return '';
	}
}
global $engine;
                            $GetRanks = $engine->query("SELECT id,name FROM ranks WHERE id =8 or id = 7 ORDER BY id DESC");
                            while($Ranks = $GetRanks->fetch(PDO::FETCH_ASSOC))
                            {echo "<h2>" . GetDescr($Ranks['id']) . "</h2><br>";

                                $GetUsers = $engine->query("SELECT * FROM users WHERE rank = {$Ranks['id']} ORDER by id");
                               while($Users = $GetUsers->fetch(PDO::FETCH_ASSOC))
                                {
                                  if($Users['online'] == 1){ $OnlineStatus = "<img src='{url}/app/tpl/skins/Habbo/images/online.gif'/> "; } else { $OnlineStatus = "<img src='{url}/app/tpl/skins/Habbo/images/offline.gif'/> "; }
                                    echo "<div class='container'><div class='onlinestatus'>{$OnlineStatus}</div><div class='avatar' style='background: url(http://www.habbo.nl/habbo-imaging/avatarimage?figure={$Users['look']}.gif&head_direction=3&action=none&gesture=sit&size=b&amp;img_format=gif);'></div><center><h3>{$Users['username']}</h3></center><text>Aufgabe: {$Ranks['name']}<br><font color='#888'>Motto: {$Users['motto']}</font></div>						
";
}
}
?>
	</div>
 </div>
        
        <div id="footer" >
			<?php include('includes/footer.php'); ?>
			<?php include('includes/checktheban.php'); ?>
        </div>
    
    </body>
</html>
