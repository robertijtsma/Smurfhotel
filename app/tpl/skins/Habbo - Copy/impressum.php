<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Impressum</title>
        
        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/front.css" type="text/css">
		<link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/style.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/common.js"></script>

        
         <script type="text/javascript">
            document.habboLoggedIn = true;
            var habboName = null;
            var habboId = null;
            var habboReqPath = "";
            var habboStaticFilePath = "{url}/app/tpl/skins/Habbo";
            var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "client";
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
                <ul id="navi">
                    <li><a href="{url}/index">Home</a><span></span></li>
                    <li><a href="{url}/register">Registreren</a><span></span></li>
					<li class="metab selected"><strong>Informatie</strong><span></span></li>
                </ul>
                <div id="habbos-online"><div class="rounded"><span>Smurfen Online!</span></div></div>
            </div>
        </div>
        <div id="content-container">
            <div id="navi2-container" class="pngbg">
                <div id="navi2" class="pngbg clearfix">
                    <ul>
                        <li class=""><a href="{url}/safety">Sicherheit</a></li></li>
						<li class="selected last">Impressum</li>
                    </ul>
                </div>
            </div>
<div id="container">
<div id="content" style="position: relative" class="clearfix">	
<div style="padding-right: 20%">		
			<div class="column">
                        <div class="habblet-container ">
                            <div class="cbb clearfix settings ">
                                <h2 class="title">Impressum</h2><br>
								<center><b>Kontaktadresse</b><p>
								<p>Live Support: in Arbeit <!--soll direkt ins mod tool per db-->
								<br>E-Mail: Johnysmoke@web.de<p>
								<p><b>Inhaber</b><p>
								<div style="padding:15px 70px 5px">	
								<b>Service</b><br><br>
								Für Fragen oder Probleme bezüglich unsere Webseite, geteilter Inhalte, oder andere von uns angebotener Dienste wenden sie sich bitte an den oben genannten Live Support. Ihre Nachricht wird an unsere aktiven Moderatoren geleitet und sollte spätestens innerhalb von 2 Werktagen bearbeitet werden.<br><br>
								Falls sie rechtliche oder technische Fragen haben, sollten sie diese an die oben genannte <a href="mailto:fritz.eierschale@example.org">E-Mail Adresse</a> versenden. Dieses Postfach wird mindestens 1x pro Woche abgerufen, mit einer Antwort kann also spätestens 14 Tage nach Absenden ihres Anliegens gerechnet werden.
								
								
								
								</center>
								<div style="padding:10px 70px 1px">	
									<p>
<img src="{url}/app/tpl/skins/Habbo/images/frontpage/impressum.png" alt="Kontaktadresse" width="540" height="270">
</p>
								</div>
							</div>
						</div>
						</div>
						</div>
<script type="text/javascript">
document.observe("dom:loaded", function() { NewsPromo.init(); });
</script>
</div>



						

     <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
        <script type="text/javascript">
            HabboView.run();
        </script>

		
		
		
        <!--[if lt IE 7]>-->
            <script type="text/javascript">
                Pngfix.doPngImageFix();
            </script>
        <div id="footer" >
            <?php include('includes/footer.php'); ?>
			<?php include('includes/checktheban.php'); ?>
        </div>
		</div>
    </body>
</html>