<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Nieuws</title>
        
	
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
    
    <body id="news">
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
                    <ul id="navi"><li id="tab-register-now" class="tab-register-now"><a href="{url}/me">{username} <img src="{url}/app/tpl/skins/{skin}/images/id.png" style="vertical-align: middle;"></a><span></span></li>
                    <li class="selected"><strong>Community <img src="{url}/app/tpl/skins/{skin}/images/forum_2.gif" style="vertical-align: middle;"></strong><span></span></li>
				
	
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
                        <li class=""><a href="{url}/community">Community</a></li>
                        <li class="selected">Nieuws</li>
						 <li class=""><a href="{url}/staff">Medewerkers</li>
						<li class=""><a href="{url}/topstats">Toplijst</a></li>
                    </ul>
                </div>
            </div>
		
            <div id="container">
                <div id="content" style="position: relative" class="clearfix">
                    <div id="column1" class="column">
                        <div class="habblet-container ">		
                            <div class="cbb clearfix default ">
                                <h2 class="title">Nieuws</h2>
                                <div id="article-archive">
                                    <ul>
									{newsList}
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                    </div>
                    <div id="column2" class="column">
                        <div class="habblet-container ">		
                            <div class="cbb clearfix notitle ">
                                <div id="article-wrapper">
                                    <h2>{newsTitle}</h2>
                                    <div class="article-meta">Gepost op {newsDate}</div>
                                
                                    <div class="article-body">
                                        {newsContent}
                                        <br><br>
                                        <p><font face="Verdana" size="1"><b>- {newsAuthor}</b></p>
                                        <script type="text/javascript" language="Javascript">
                                            document.observe("dom:loaded", function() {
                                                $$('.article-images a').each(function(a) {
                                                    Event.observe(a, 'click', function(e) {
                                                        Event.stop(e);
                                                        Overlay.lightbox(a.href, "Image is loading");
                                                    });
                                                });
                                                
                                                $$('a.article-2729').each(function(a) {
                                                    a.replace(a.innerHTML);
                                                });
                                            });
                                        </script>
                                    </div></div>
                              </div>  </div>
									
                              </div>  </div>
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

      <?php include_once('footer.php'); ?>         
      <?php include_once('checktheban.php'); ?>
    </body>
</html>