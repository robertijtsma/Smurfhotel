<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Profil</title>
        
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
            var habboImagerUrl = "https://www.habbo.com/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
                HabboClient.maximizeWindow = true;
            }
        </script>
        
        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/personal.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/habboclub.js"></script>
        
        <!--[if IE 8]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie8.css" type="text/css">
        <![endif]-->
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie.css" type="text/css" />
        <![endif]-->
        <!--[if lt IE 7]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie6.css" type="text/css" />
            <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/pngfix.js"></script>
            <script type="text/javascript">
                try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
            </script>
            <style type="text/css">
                body { behavior: url({url}/app/tpl/skins/Habbo/js/csshover.htc); }
            </style>
        <![endif]-->
    </head>
    
    <body id="home">
    
        <div id="overlay"></div>
        <div id="header-container">
            <div id="header" class="clearfix">
                <h1><a href="{url}/"></a></h1>
                <div id="subnavi">
                    <div id="subnavi-user">
                        <div style="margin-top:7px">
                            <?php include ("includes/dyk.php"); ?>
						</div>
                    </div>
                    <div id="subnavi-search">
                        <div id="subnavi-search-upper">
                            <ul id="subnavi-search-links">
								<li><a href="{url}/safety" target="_blank" style="color:#000">Hilfe</a></li>
                                <li><a href="{url}/logout" style="color:#000">Ausloggen</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="to-hotel">
                        <a href="{url}/client" class="new-button green-button" target="eac955c8dbc88172421193892a3e98fc7402021a" onclick="HabboClient.openOrFocus(this); return false;"><b>Check in's {hotelname} ein!</b><i></i></a>
                    </div>
                </div>
                <ul id="navi">
                    <li class="metab selected"><strong>{username}</strong><span></span></li>
                    <li><a href="{url}/community">Community</a><span></span></li>
					<li><a href="{url}/staff">Mitarbeiter</a><span></span></li>
					<li><a href="{url}/shop">Diamanten</a><span></span></li>
					<?php if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) >= 4)
					{ ?>
                    <li class="tab-register-now"><a href="{url}/hk">HK</a><span></span></li>
                    <?php
                    } ?>
                </ul>
                <div id="habbos-online"><div class="rounded"><span>{online} Online!</span></div></div>
            </div>
        </div>
        <div id="content-container">
            <div id="navi2-container" class="pngbg">
                <div id="navi2" class="pngbg clearfix">
                    <ul>
						<li class=""><a href="{url}/me">Home</a></li>
                        <li class="selected">Benutzerprofil</li>
						<li class=""><a href="{url}/account">Profileinstellungen</a></li>
						<li class="last"><a href="{url}/minigames">Minispiele</a></li>
                    </ul>
                </div>
            </div>
<?php

function clean($str) {
	$str = @trim($str);
	if(get_magic_quotes_gpc()) {
		$str = stripslashes($str);
	}
	return mysql_real_escape_string($str);
}
$userid = $_SESSION['user']['id'];
$data = mysql_fetch_object(mysql_query("SELECT * FROM `users` WHERE `id`='$userid'"))or die(mysql_error());

$url = $_SERVER["REQUEST_URI"];

$QUERYVAR= parse_url($url, PHP_URL_QUERY);

$GETVARS = explode('&',$QUERYVAR);

$chet = 0;

foreach($GETVARS as $string){
     list($is,$code) = explode('=',$string);
	 if($is == "id")
	 {
	 	$id = $code;
	 }
	 if($is == "p")
	 {
	 	$p = $code;
	 }
}

$id = clean($id);


$bestaat = mysql_query("SELECT * FROM `users` WHERE `id`='$id'")or die(mysql_error());
$bestaat2 = mysql_query("SELECT * FROM `users` WHERE `id`='$data->id'")or die(mysql_error());
if(mysql_num_rows($bestaat) == 0)
{
	if(mysql_num_rows($bestaat2) == 1)
	{
		$exists = 1;
		$pers = mysql_fetch_object($bestaat2);
		$datas = mysql_fetch_object(mysql_query("SELECT * FROM `users` WHERE `id`='$data->id'"));
	}
	else
	{
		$exists = 0;
	}
}
else
{
	$exists = 1;
	$pers = mysql_fetch_object($bestaat);
	$datas = mysql_fetch_object(mysql_query("SELECT * FROM `users` WHERE `id`='$data->id'"))or die(mysql_error());
}
?>


<div id="container">
<div id="content" style="position: relative" class="clearfix">
<div id="column1" class="column"><div class="habblet-container ">		

	<div class="cbb clearfix blue "> 


		<div class="box-content"><p>
<?php

	$image = "https://www.habbo.nl/habbo-imaging/avatarimage?direction=4&head_direction=3&action=crr=667&gesture=sml&figure=";

	$image .= $pers->look;
	
	if($pers->online == 0){
		$aanwezig = "<div id=\"offline\"><img src='{url}/app/tpl/skins/Habbo/images/offline.gif'/></div>";
	}
	else{
		$aanwezig = "<div id=\"online\"><img src='{url}/app/tpl/skins/Habbo/images/online.gif'/></div>";
	}
	$signup = date('d-m-Y H:i', $pers->account_created);
	$lastlogin = date('d-m-Y H:i', $pers->last_online);
	
	echo"<table width=\"100%\">";
	echo"<tr><td><b>Name:</b></td><td>";
    echo"$pers->username";
	echo"</td><td rowspan=\"6\"><img src=\"$image\" alt=\"$pers->username\" /></td></tr>";
	echo"<tr><td><b>Motto:</b></td><td>$pers->motto</td></tr>";
	echo"<tr><td><b>Angemeldet am:</b></td><td>$signup</td></tr>";
	echo"<tr><td><b>Zuletzt eingeloggt:</b></td><td>{lastSignedIn}</td></tr>";
$timeonline = ($datas->OnlineTime / 3600*24);
$timeround = round($timeonline);
echo"<tr><td><b>Online Zeit:</b></td><td>$timeround Minuten</td></tr>";

	echo"<tr><td><b>Taler:</b></td><td>$pers->credits</td></tr>";
	echo"<tr><td><b>Duckets:</b></td><td>$pers->activity_points</td><td>$aanwezig</td></tr>";
	echo"<tr><td><b>Diamanten:</b></td><td>$pers->crystals</td></tr>";
	echo"</table>";
	

?>
</div> 
</div>
</div>

</div><div id="column2" class="column">
<div class="habblet-container ">		
<div class="cbb clearfix green "> 
<h2 class="title"><?php echo"$pers->username"; ?>'s Freunde</h2>

<div class="box-content">
<?php $getnew = mysql_query("SELECT * FROM users WHERE `id` IN (SELECT `sender` FROM `messenger_friendships` WHERE `receiver`='$pers->id') ORDER BY id DESC LIMIT 15;"); while($new = mysql_fetch_array($getnew)) { ?> 
<span class="hotspot" onmouseover="tooltip.show('<?php echo $new['username']; ?>');" onmouseout="tooltip.hide();"> 
<a href="profile?id=<?php echo $new['id']; ?>"><img src="https://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $new['look']; ?>&size=s" /></a> 

</span> <?php } ?>
</div>

</div>
<div id="column2" class="column">
<div class="habblet-container ">		
<div class="cbb clearfix green "> 
<h2 class="title"><?php echo"$pers->username"; ?>'s Badges</h2>

<div class="box-content">
<?php
$badges = mysql_query("SELECT * FROM `user_badges` WHERE `user_id`='$pers->id'")or die(mysql_error());
if(mysql_num_rows($badges) == 0)
{
	echo"$pers->besitzt noch keine Badges";
}
else
{
	while($badge = mysql_fetch_object($badges))
	{
		echo"<img src=\"/r63/c_images/album1584/$badge->badge_id.gif\">";
	}
}
?>
</div> 
</div> 
</div>



        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
        <script type="text/javascript">
            HabboView.run();
        </script>
<div id="footer" >
			<?php include('includes/footer.php'); ?>
			<?php include('includes/checktheban.php'); ?>
</div>
    <body onkeydown="return false">

</html>