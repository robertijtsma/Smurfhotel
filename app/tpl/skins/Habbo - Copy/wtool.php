<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Werbetool</title>
        
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
                    <li class="metab"><a href="{url}/me">{username}</a><span></span></li>
                    <li class="selected"><strong>Community</strong><span></span></li>
					<li><a href="{url}/staff">Mitarbeiter</a><span></span></li>
					<li><a href="{url}/shop">Diamanten</a><span></span></li>
					
					<?php if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) >= 4)
					{ ?>
                    <li class="tab-register-now"><a href="{url}/hk">HK</a><span></span></li>
                    <?php
                    } ?>
                </ul>
                <div id="habbos-online">
                    <div class="rounded"><span>{online} Online!</span></div>
                </div>
            </div>
        </div>
        <div id="content-container">
            <div class="pngbg" id="navi2-container">
                <div class="pngbg clearfix" id="navi2">
                    <ul>
                        <li class=""><a href="{url}/community">Community</a></li>
                        <li class=""><a href="{url}/news">Neues</a></li>
                        <li class=""><a href="{url}/topuser">Top 10</li>
						<li class=""><a href="{url}/rdw">Raum der Woche</li>
						<li class="selected last"><a href="{url}/wtool">Werbetool</a></li>
                    </ul>
                </div>
            </div>
			 <div id="container">
                <div id="content" style="position: relative" class="clearfix">
                    <div id="column1" class="column">
						<div class="habblet-container ">
							<div class="cbb clearfix green ">
<h2 class="title">Lade dir unser Werbetool herunter:</h2>
<br>
<br>
<p>
  <center><a href="Spammer.exe">{hotelName} Werbetool Download</a> (30 kb)<br><br>
  <img src="{url}/app/tpl/skins/Habbo/images/popup/wtool.PNG" align="center"><br>
  Das {hotelName} Werbetool dient dazu, euch das Werben ein wenig zu erleichtern.<br>
  Ihr k&ouml;nnt entweder manuell per F1 oder F2 Taste senden (wie von BMT oder Anderen gewohnt), oder auch alternativ auf Automatisch stellen. Somit k&ouml;nnt ihr sogar werben wenn ihr afk seid!
</p>
<br>
<br>
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
           <?php include('includes/footer.php'); ?>
		   <?php include('includes/checktheban.php'); ?>
        </div>
    
    </body>
</html>