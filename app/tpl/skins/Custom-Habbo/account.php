
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} &middot; Account Settings</title>
        
		
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
        
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/settings.js"></script>
        <link rel="stylesheet" href="{url}/app/tpl/skins/{skin}/styles/settings.css" type="text/css">
        
        <!--[if IE 8]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Custom-Habbo/styles/ie8.css" type="text/css">
        <![endif]-->
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Custom-Habbo/styles/ie.css" type="text/css" />
        <![endif]-->
        <!--[if lt IE 7]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Custom-Habbo/styles/ie6.css" type="text/css" />
            <script type="text/javascript" src="{url}/app/tpl/skins/Custom-Habbo/js/pngfix.js"></script>
            <script type="text/javascript">
                try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
            </script>
            <style type="text/css">
                body { behavior: url({url}/app/tpl/skins/Custom-Habbo/js/csshover.htc); }
            </style>
        <![endif]-->
    </head>
    
    <body id="profile">
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
                  
                    <div id="to-hotel">
<a href="{url}/logout" class="new-button red-button" style="margin-right:5px;margin-left:5px;"><b>Log uit</b><i></i></a>

                        <a href="{url}/flashcheck/index.php" class="new-button green-button" target="eac955c8dbc88172421193892a3e98fc7402021a" onclick="HabboClient.openOrFocus(this); return false;"><b>Ga naar {hotelName}</b><i></i></a>
                    </div>
                </div>
                <ul id="navi">
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
                        <li class=" "><a href="{url}/me">Home</a></li>
						<li class=" last"><a href="{url}/index.php?url=home&user={username}">Mijn Pagina</a></li>
                        <li class=" selected last">Account Instellingen</li>
						
						<li class=""><a href="{url}/online">Online Smurfen</a></li>
						
                    </ul>
                    </ul>
                </div>
            </div>
		
            <div id="container">
                <div id="content" style="position: relative" class="clearfix">
                    <div>
                        <div class="content">
                            <div class="habblet-container" style="float:left; width:210px;">
                                <div class="cbb settings">
                                    <h2 class="title">Account Instellingen</h2>
                                    <div class="box-content">
                                        <div id="settingsNavigation">
                                            <ul>
											    <li class=" "><a href="profile">Profiel</a></li>
                                                <li class="selected">Account Instellingen</li>
												<li class=" "><a href="tradesettings">Ruilinstellingen</a></li>
												<li class=" "><a href="tags">Tags</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbb habboclub-tryout">
                                    <h2 class="title">Koop {hotelName} VIP</h2>
                                    <div class="box-content">
                                        <div class="habboclub-banner-container habboclub-clothes-banner"></div>
                                        <p class="habboclub-header">{hotelName} VIP kan worden gekocht door op "Shop" te klikken in het gedeelte met tabbladen. Daar kunt u onze grote verscheidenheid aan voordelen bekijken die wij aanbieden!</p>
                                        <p class="habboclub-link"><a href="{url}/vip">Check out {hotelName} VIP &gt;&gt;</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="habblet-container " style="float:left; width: 560px;">
                                <div class="cbb clearfix settings">
                                    <h2 class="title">Verander je profiel</h2>
                                    <div class="box-content">
                                        <form method="post" id="profileForm" style="background: rgba(0,0,0,.2);border-radius:4px;padding:3px;color:#FFF;">
                                            <h3>Je Status</h3>
                                            <p>Je status is wat mensen zien in het hotel als ze op je klikken.</p>
                                            <input type="text" name="acc_motto" size="32" maxlength="32" value="{motto}" id="avatarmotto">
                                            <h3>Je Email</h3>
                                            <p>Je kan hier je email veranderen.</p>
                                            <input type="text" name="acc_email" size="32" value="{email}" id="avatarmotto"></p>
                                            <h3>Huidig wachtwoord</h3>
                                            <p>Je huidige wachtwoord waarmee je inlogt op de site.</p>
                                            <input type="password" name="acc_old_password" value="" id="avatarmotto"></p>
                                            <h3>Nieuw Wachtwoord</h3>
                                            <p>Alsjeblieft alleen dit veld invullen als je je wachtwoord veranderen wilt.</p>
                                           <input type="password" name="acc_new_password" value="" id="avatarmotto"></p>
                                            <div class="settings-buttons">
                                                <input type="submit" value="Save changes" name="account" class="submit" style="float:right">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    document.observe('dom:loaded', function() {
                        CurrentRoomEvents.init();
                    });
                </script>
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
        </div>
		
      <?php include_once('footer.php'); ?>         
      <?php include_once('checktheban.php'); ?>
    </body>
</html>