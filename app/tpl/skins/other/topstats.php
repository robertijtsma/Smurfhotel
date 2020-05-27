
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Top Stats</title>
        
		
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

						<li class=""><a href="{url}/community">Community</a></li>
                        <li><a href="{url}/news">News</a></li>
                        <li><a href="{url}/staff">Staff</a></li>
						
						<li class="selected">Top Stats</li>

                    </ul>
                </div>
            </div>
			
            <div id="container">
                <div id="content" style="position: relative" class="clearfix">
                    <div id="column1" class="column">
						<div class="habblet-container ">
							<div class="cbb clearfix blue ">
                                <h2 class="title">Most Respected & Most Respect Given</h2>
								<div style="padding:5px">
								<?php
								$getRepsect = mysql_query("SELECT * FROM `user_stats` WHERE `Respect` >= '0' ORDER BY `respect` DESC LIMIT 5");
								$getRespectGiven = mysql_query("SELECT * FROM `user_stats` WHERE `RespectGiven` >= '0' ORDER BY `RespectGiven` DESC LIMIT 5");
								
								while(($Repsect = mysql_fetch_array($getRepsect)) && ($RespectGiven = mysql_fetch_array($getRespectGiven))) {
								  
								$getUserInfo = mysql_query("SELECT * FROM `users` WHERE `id` = '".$Repsect['id']."'");
								$userInfo = mysql_fetch_array($getUserInfo);

								$getUserInfo1 = mysql_query("SELECT * FROM `users` WHERE `id` = '".$RespectGiven['id']."'");
								$userInfo1 = mysql_fetch_array($getUserInfo1);
								  
								echo '
									<table style="width: 50%; float:left">
										<tr>
											<td width="20%"><img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure='.$userInfo['look'].'&size=s&direction=2&head_direction=2&gesture=sml&size=m" align="left"></td>
											<td width="80%"><b><a href="/home">'.$userInfo['username'].'</a></b><br />'.$Repsect['Respect'].' Respect Points Earned</td>
										</tr>
									</table>
									
									<table style="width: 50%; float:right">
										<tr>
												<td width="20%"><img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure='.$userInfo1['look'].'&size=s&direction=2&head_direction=2&gesture=sml&size=m" align="left"></td>
												<td width="80%"><b><a href="/home">'.$userInfo1['username'].'</a></b><br />'.$RespectGiven['RespectGiven'].' Respect Points Shared</td>
											</tr>
									</table>';
								}
								?>
								</div>
							</div>
						</div>
						<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
						
						<div class="habblet-container ">
							<div class="cbb clearfix blue ">
                                <h2 class="title">Most Gifts Received & Most Gifts Given</h2>
								<div style="padding:5px">
								<?php
								$getGifts = mysql_query("SELECT * FROM `user_stats` WHERE `GiftsReceived` >= '0' ORDER BY `GiftsReceived` DESC LIMIT 5");
								$getGiftsGiven = mysql_query("SELECT * FROM `user_stats` WHERE `GiftsGiven` >= '0' ORDER BY `GiftsGiven` DESC LIMIT 5");
								
								while(($gifts = mysql_fetch_array($getGifts)) && ($giftsGiven = mysql_fetch_array($getGiftsGiven))) {
								  
								$getUserInfo = mysql_query("SELECT * FROM `users` WHERE `id` = '".$gifts['id']."'");
								$userInfo = mysql_fetch_array($getUserInfo);

								$getUserInfo1 = mysql_query("SELECT * FROM `users` WHERE `id` = '".$giftsGiven['id']."'");
								$userInfo1 = mysql_fetch_array($getUserInfo1);
								  
								  echo '
									<table style="width: 50%; float:left">
										<tr>
											<td width="20%"><img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure='.$userInfo['look'].'&size=s&direction=2&head_direction=2&gesture=sml&size=m" align="left"></td>
											<td width="80%"><b><a href="/home">'.$userInfo['username'].'</a></b><br />'.$gifts['GiftsReceived'].' Gifts Received</td>
										</tr>
									</table>
									
									<table style="width: 50%; float:right">
										<tr>
												<td width="20%"><img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure='.$userInfo1['look'].'&size=s&direction=2&head_direction=2&gesture=sml&size=m" align="left"></td>
												<td width="80%"><b><a href="/home">'.$userInfo1['username'].'</a></b><br />'.$giftsGiven['GiftsGiven'].' Gifts Shared</td>
											</tr>
									</table>';
								}
								?>
								</div>
							</div>
						</div>
						<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
						
						<div class="habblet-container ">
							<div class="cbb clearfix blue ">
                                <h2 class="title">Most Rooms Vists & Highest Achievement Score</h2>
								<div style="padding:5px">
								<?php
								$getVisits = mysql_query("SELECT * FROM `user_stats` WHERE `RoomVisits` >= '0' ORDER BY `RoomVisits` DESC LIMIT 5");
								$getScore = mysql_query("SELECT * FROM `user_stats` WHERE `AchievementScore` >= '0' ORDER BY `AchievementScore` DESC LIMIT 5");
								
								while(($Visits = mysql_fetch_array($getVisits)) && ($Score = mysql_fetch_array($getScore))) {
								  
								$getUserInfo = mysql_query("SELECT * FROM `users` WHERE `id` = '".$Visits['id']."'");
								$userInfo = mysql_fetch_array($getUserInfo);

								$getUserInfo1 = mysql_query("SELECT * FROM `users` WHERE `id` = '".$Score['id']."'");
								$userInfo1 = mysql_fetch_array($getUserInfo1);
								  
								  echo '
									<table style="width: 50%; float:left">
										<tr>
											<td width="20%"><img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure='.$userInfo['look'].'&size=s&direction=2&head_direction=2&gesture=sml&size=m" align="left"></td>
											<td width="80%"><b><a href="/home">'.$userInfo['username'].'</a></b><br />'.$Visits['RoomVisits'].' Room Visits</td>
										</tr>
									</table>
									
									<table style="width: 50%; float:right">
										<tr>
												<td width="20%"><img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure='.$userInfo1['look'].'&size=s&direction=2&head_direction=2&gesture=sml&size=m" align="left"></td>
												<td width="80%"><b><a href="/home">'.$userInfo1['username'].'</a></b><br />'.$Score['AchievementScore'].' Achievement Score</td>
											</tr>
									</table>';
								}
								?>
								</div>
							</div>
						</div>
						<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                    </div>
                    <div id="column2" class="column">
                        <div class="habblet-container ">
                            <div class="cbb clearfix blue ">
                                <h2 class="title">Top 5 Richest Users in Credits</h2>
                                <div style="padding:5px">
									<?php $get_richest = mysql_query("SELECT * FROM `users` WHERE `rank` < '6' ORDER BY `credits` DESC LIMIT 5"); ?>
									<table style="width: 100%">
										<?php
										while($richest = mysql_fetch_array($get_richest)) {
										  echo '<tr>
													<td width="20%"><img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure='.$richest['look'].'&size=s" /></td>
													<td width="80%"><b><a href="/home">'.$richest['username'].'</a></b><br />'.$richest['credits'].' Credits</td>
												</tr>';
										}
										?>
									</table>
                                </div>
                            </div>
                        </div>
						
						<div class="cbb clearfix blue ">
							<h2 class="title">Top 5 Richest Users in Pixels</h2>
							<div style="padding:5px">
								<?php $get_richest = mysql_query("SELECT * FROM `users` WHERE `rank` < '6' ORDER BY `activity_points` DESC LIMIT 5"); ?>
								<table style="width: 100%">
									<?php
									while($richest = mysql_fetch_array($get_richest)) {

									  echo '<tr>
												<td width="20%"><img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure='.$richest['look'].'&size=s" /></td>
												<td width="80%"><b><a href="/home">'.$richest['username'].'</a></b><br />'.$richest['activity_points'].' Pixels</td>
											</tr>';
									}
									?>
								</table>
							</div>
						</div>

						<?php
						function Minutes($time)
						{
							$ret = "";
							
							$minutes = ($time);
							if($minutes > 0)
								$ret .= "$minutes Minutes";

							return $ret;
						}
						?>
						<div class="cbb clearfix blue ">
							<h2 class="title">Active Users</h2>
							<div style="padding:5px">
								<table style="width: 100%">
									<?php
									$getTimeOnline = mysql_query("SELECT * FROM `user_stats` WHERE `OnlineTime` >= '0' ORDER BY `OnlineTime` DESC LIMIT 5");
									while(($TimeOn = mysql_fetch_array($getTimeOnline))) {

									$getUserInfo = mysql_query("SELECT * FROM `users` WHERE `id` = '".$TimeOn['id']."'");
									$userInfo = mysql_fetch_array($getUserInfo);
									
									echo '
									<tr>
										<td width="20%"><img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure='.$userInfo['look'].'&size=s" /></td>
										<td width="80%"><b><a href="/home">'.$userInfo['username'].'</a></b><br />'.Minutes($TimeOn['OnlineTime']).' Spent Online</td>
									</tr>';
									}
									?>
								</table>
							</div>
						</div>
						<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>	
 
 
<script type="text/javascript">
                HabboView.run();
        </script>
                                <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
 
 
 
 
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
		</div>
		        
		      <?php include_once('footer.php'); ?>         
      <?php include_once('checktheban.php'); ?>
    </body>
</html>