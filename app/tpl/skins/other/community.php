
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Community</title>
        
		
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
            var habboImagerUrl = "http://habbo.nl/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/client";
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
                body { behavior: url({url}/app/tpl/skin/Custom-Habbo/js/csshover.htc); }
            </style>
        <![endif]-->
    </head>
    
 <body id="home">
<div id="topz-container">
<div id="topz">
<div id="topz-wrapper">
<div style="margin-top:16px">
									<img src="{url}/app/tpl/skins/{skin}/images/icons/message.gif" /> Welcome back, <b>{userName}</b>! &nbsp; &nbsp;
									<img src="{url}/app/tpl/skins/{skin}/images/icons/stats.gif" /> {online} Users Online &nbsp; &nbsp; 
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
<a href="{url}/logout" class="new-button red-button" style="margin-right:5px;margin-left:5px;"><b>Logout</b><i></i></a>

                        <a href="{url}/api.php" class="new-button green-button" target="eac955c8dbc88172421193892a3e98fc7402021a" onclick="HabboClient.openOrFocus(this); return false;"><b>Enter {hotelName}</b><i></i></a>
			 			
                    
				   </div>
                </div>
                <ul id="navi">
                    <ul id="navi"><li id="tab-register-now" class="tab-register-now"><a href="{url}/me">{username} <img src="{url}/app/tpl/skins/{skin}/images/id.png" style="vertical-align: middle;"></a><span></span></li>
                    <li class="selected"><strong>Community <img src="{url}/app/tpl/skins/{skin}/images/forum_2.gif" style="vertical-align: middle;"></strong><span></span></li>
			
					
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
                        <li class="selected">Community</li>
						<li class=""><a href="{url}/news">News</a></li>
						 <li class=""><a href="{url}/staff">Staff</a></li>
						<li class=""><a href="{url}/topstats">Top Users</a></li>
                    </ul>
                </div>
            </div>
			<div id="container">

<div id="content" style="position: relative" class="clearfix">

            <div id="container">
                <div id="content" style="position: relative" class="clearfix">
                    <div id="column1" class="column">
                        <div class="habblet-container ">		
                            <div class="cbb clearfix activehomes ">
                                <h2 class="title">Random {hotelName} - Click Us!</h2>
                                <div id="homes-habblet-list-container" class="habblet-list-container">
                                    <img class="active-habbo-imagemap" src="{url}/app/tpl/skins/Habbo/images/activehomes/transparent_area.gif" width="435px" height="230px" usemap="#habbomap" />
                                    <?php
                                        $getRandom = mysql_query("SELECT id,username,look,motto,account_created,online FROM users ORDER BY RAND() LIMIT 18");
                                        $i = 0;

                                        while ($randomHabbo = mysql_fetch_assoc($getRandom))
                                        {		 
                                            echo '<div id="active-habbo-data-' . $i . '" class="active-habbo-data"> 
                                                    <div class="active-habbo-data-container"> 
                                                    <div class="active-name ' . (($randomHabbo['online'] == "1") ? 'online' : 'offline') . '">' . $randomHabbo['username'] . '</div> 
                                                    {hotelName} created on: ' . date('d M, Y', $randomHabbo['account_created']) . '
                                                    <p class="moto">' . $randomHabbo['username'] . 's  motto:' . $randomHabbo['motto'] . '</p> 
                                                    </div> 
                                                    </div>                
                                                    <input type="hidden" id="active-habbo-url-' . $i . '"> 
                                                    <input type="hidden" id="active-habbo-image-' . $i . '" class="active-habbo-image" value="http://habbo.nl/habbo-imaging/avatarimage?figure=' . $randomHabbo['look'] . '&action=drk&direction=3&head_direction=3&gesture=sml&size=1.gif" />';
	
                                            $i++;
                                        }
                                    ?>
                                    <div id="placeholder-container">
                                        <div id="active-habbo-image-placeholder-0" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-1" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-2" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-3" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-4" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-5" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-6" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-7" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-8" class="active-habbo-image-placeholder"></div>

                                        <div id="active-habbo-image-placeholder-9" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-10" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-11" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-12" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-13" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-14" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-15" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-16" class="active-habbo-image-placeholder"></div>
                                        <div id="active-habbo-image-placeholder-17" class="active-habbo-image-placeholder"></div>
                                    </div>
                                </div>
                                <map id="habbomap" name="habbomap">
                                    <area id="imagemap-area-0" shape="rect" coords="55,53,95,103" href="#" alt=""/>
                                    <area id="imagemap-area-1" shape="rect" coords="120,53,160,103" href="#" alt=""/>
                                    <area id="imagemap-area-2" shape="rect" coords="185,53,225,103" href="#" alt=""/>
                                    <area id="imagemap-area-3" shape="rect" coords="250,53,290,103" href="#" alt=""/>
                                    <area id="imagemap-area-4" shape="rect" coords="315,53,355,103" href="#" alt=""/>
                                    <area id="imagemap-area-5" shape="rect" coords="380,53,420,103" href="#" alt=""/>
                                    <area id="imagemap-area-6" shape="rect" coords="28,103,68,153" href="#" alt=""/>
                                    <area id="imagemap-area-7" shape="rect" coords="93,103,133,153" href="#" alt=""/>
                                    <area id="imagemap-area-8" shape="rect" coords="158,103,198,153" href="#" alt=""/>
                                    <area id="imagemap-area-9" shape="rect" coords="223,103,263,153" href="#" alt=""/>
                                    <area id="imagemap-area-10" shape="rect" coords="288,103,328,153" href="#" alt=""/>
                                    <area id="imagemap-area-11" shape="rect" coords="353,103,393,153" href="#" alt=""/>
                                    <area id="imagemap-area-12" shape="rect" coords="55,153,95,203" href="#" alt=""/>
                                    <area id="imagemap-area-13" shape="rect" coords="120,153,160,203" href="#" alt=""/>
                                    <area id="imagemap-area-14" shape="rect" coords="185,153,225,203" href="#" alt=""/>
                                    <area id="imagemap-area-15" shape="rect" coords="250,153,290,203" href="#" alt=""/>
                                    <area id="imagemap-area-16" shape="rect" coords="315,153,355,203" href="#" alt=""/>
                                    <area id="imagemap-area-17" shape="rect" coords="380,153,420,203" href="#" alt=""/>
                                </map>
                                <script type="text/javascript">
                                    var activeHabbosHabblet = new ActiveHabbosHabblet();
                                    document.observe("dom:loaded", function() { activeHabbosHabblet.generateRandomImages(); });
                                </script>
                            </div>
                        </div>

					
					
					<div class="habblet-container "> 

<div class="cbb clearfix activehomes">

 <h2 class="title"><font size=1>{hotelName} Statistics! </h2> </font>

<div id="notfound-content" class="box-content"> <center> 

           Users online: <?php $sql = "SELECT COUNT(*) FROM users WHERE online = '1'"; 
$query = mysql_query($sql) or die(mysql_error()); 
$hoeveel = mysql_result($query,0,0); 

echo $hoeveel;  ?> <br> 
Registered Users:
<?php 
$query = mysql_query("SELECT COUNT(*) AS aantalleden FROM users") or die(mysql_error()); 
$data = mysql_fetch_assoc($query); 

echo $data['aantalleden']; 
?>
<br />Rooms:
<?php 
$query = mysql_query("SELECT COUNT(*) AS aantalkamers FROM rooms") or die(mysql_error()); 
$data = mysql_fetch_assoc($query); 

echo $data['aantalkamers']; 
?>
<br />Badges:
<?php 
$query = mysql_query("SELECT COUNT(*) AS aantalbadges FROM user_badges") or die(mysql_error()); 
$data = mysql_fetch_assoc($query); 

echo $data['aantalbadges']; 
?>
<br />Favorite rooms:
<?php 
$query = mysql_query("SELECT COUNT(*) AS aantalfavouritekamers FROM user_favorites") or die(mysql_error()); 
$data = mysql_fetch_assoc($query); 

echo $data['aantalfavouritekamers']; 
?>
<br />Furniture:
<?php 
$query = mysql_query("SELECT COUNT(*) AS aantalmeubels FROM furniture") or die(mysql_error()); 
$data = mysql_fetch_assoc($query); 

echo $data['aantalmeubels']; 
?>
<br />Furniture in the catalog:
<?php 
$query = mysql_query("SELECT COUNT(*) AS aantalmeubels FROM catalog_items") or die(mysql_error()); 
$data = mysql_fetch_assoc($query); 

echo $data['aantalmeubels']; 
?>
<br /><br> 








                     </center></a></div></div>
					 </div>
					 
					 
					
					
                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                    </div>
		
                    <div id="column2" class="column">
                        <div class="habblet-container "></div>
                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                        <div class="habblet-container news-promo">		
                            <div class="cbb clearfix notitle ">
                                <div id="newspromo">
                                    <div id="topstories">
                                        <div class="topstory" style="background-image: url({url}/r63/c_images/Top_Story_Images/{newsIMG-1})">
                                            <h4>Latest news</h4>
                                            <h3><a href="{url}/index.php?url=news&id={newsID-1}">{newsTitle-1}</a></h3>
                                            <p class="summary">
                                                {newsCaption-1}
                                            </p>
                                            <p>
                                                <a href="{url}/index.php?url=news&id={newsID-1}">Read more &raquo;</a>
                                            </p>
                                        </div>
                                        <div class="topstory" style="background-image: url({url}/r63/c_images/Top_Story_Images/{newsIMG-2}); display: none">
                                            <h4>Latest news</h4>
                                            <h3><a href="{url}/index.php?url=news&id={newsID-2}">{newsTitle-2}</a></h3>
                                            <p class="summary">
                                                {newsCaption-2}
                                            </p>
                                            <p>
                                                <a href="{url}/index.php?url=news&id={newsID-2}">Read more &raquo;</a>
                                            </p>
                                        </div>
                                        <div class="topstory" style="background-image: url({url}/r63/c_images/Top_Story_Images/{newsIMG-3}); display: none">
                                            <h4>Latest news</h4>
                                            <h3><a href="{url}/index.php?url=news&id={newsID-3}">{newsTitle-3}</a></h3>
                                            <p class="summary">
                                                {newsCaption-3}
                                            </p>
                                            <p>
                                                <a href="{url}/index.php?url=news&id={newsID-3}">Read more &raquo;</a>
                                            </p>
                                        </div>
                                        <div class="topstory" style="background-image: url({url}/r63/c_images/Top_Story_Images/{newsIMG-4}); display: none">
                                            <h4>Latest news</h4>
                                            <h3><a href="{url}/index.php?url=news&id={newsID-4}">{newsTitle-4}</a></h3>
                                            <p class="summary">
                                                {newsCaption-4}
                                            </p>
                                            <p>
                                                <a href="{url}/index.php?url=news&id={newsID-4}">Read more &raquo;</a>
                                            </p>
                                        </div>
                                        <div class="topstory" style="background-image: url({url}/r63/c_images/Top_Story_Images/{newsIMG-5}); display: none">
                                            <h4>Latest news</h4>
                                            <h3><a href="{url}/index.php?url=news&id={newsID-5}">{newsTitle-5}</a></h3>
                                            <p class="summary">
                                                {newsCaption-5}
                                            </p>
                                            <p>
                                                <a href="{url}/index.php?url=news&id={newsID-5}">Read more &raquo;</a>
                                            </p>
                                        </div>
                                        <div id="topstories-nav" style="display: none"><a href="#" class="prev">&laquo; Previous</a><span>1</span> / 5<a href="#" class="next">Next &raquo;</a></div>
                                    </div>
                                    <ul class="widelist">
                                        <li class="even"><a href="{url}/index.php?url=news&id={newsID-1}">{newsTitle-1} &raquo;</a><div class="newsitem-date">{newsDate-1}</div></li>            
                                        <li class="odd"><a href="{url}/index.php?url=news&id={newsID-2}">{newsTitle-2} &raquo;</a><div class="newsitem-date">{newsDate-2}</div></li> 
										<li class="odd"><a href="{url}/index.php?url=news&id={newsID-3}">{newsTitle-3} &raquo;</a><div class="newsitem-date">{newsDate-3}</div></li>
										<li class="odd"><a href="{url}/index.php?url=news&id={newsID-4}">{newsTitle-4} &raquo;</a><div class="newsitem-date">{newsDate-4}</div></li>
										<li class="odd"><a href="{url}/index.php?url=news&id={newsID-5}">{newsTitle-5} &raquo;</a><div class="newsitem-date">{newsDate-5}</div></li>
										
                                        <li class=""><a href="/news">More news &raquo;</a></li>            
                                    </ul>
                                </div>
                                <script type="text/javascript">
                                    document.observe("dom:loaded", function() { NewsPromo.init(); });
                                </script>
                            </div>
																												
						
						
                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
						
						
						
						
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
        
<?php include_once('footer.php'); ?>
<?php include_once('checktheban.php'); ?>