<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Trade Settings</title>
        
		
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
    
    <body id="profile">
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
                    <li class="metab selected"><strong>{username} <img src="{url}/app/tpl/skins/Habbo/images/id.png" style="vertical-align: middle;"></strong><span></span></li>
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
                        <li class=" "><a href="{url}/me">Home</a></li>
						<li class=" last"><a href="{url}/index.php?url=home&user={username}">My Page</a></li>
                        <li class=" selected last">Account Settings</li>
						
						<li class=""><a href="{url}/online">Online Users</a></li>
						
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
                                    <h2 class="title">Account Settings</h2>
                                    <div class="box-content">
                                        <div id="settingsNavigation">
                                            <ul>
											    <li class=" "><a href="profile">Profile</a></li>
                                                <li class=" "><a href="account">Account Settings</a></li>
												<li class="selected">Trade Settings</li>
												<li class=" "><a href="tags">Tags</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="habblet-container " style="float:left; width: 560px;">
                                <div class="cbb clearfix settings">
                                    <h2 class="title">Trade Settings</h2>
                                    <div class="box-content">
									<?PHP
									
									if(isset($_POST['update'])) { 
									$ts=$_POST['ts'];
									$user=$_POST['user'];
									
									mysql_query("UPDATE users SET accept_trading='$ts' WHERE username='$user'") or die(mysql_error());
									
									

									echo '<div class="rounded-container">';
									include("includes/greenbox1.php");
									echo '<div class="rounded-green rounded-done">';
									echo '<b>Profile is updated!</b><br>';
									echo '</div>';
									include("includes/greenbox2.php");
									echo '</div>';
									}
									?>
											<form method="post" style="background: rgba(0,0,0,.2);border-radius:4px;padding:3px;color:#FFF;">
											<input type="hidden" name="user" value="{username}" />
											
											<?php
											$query = "SELECT * FROM users WHERE id = '".$_SESSION['user']['id']."'";
											$result = mysql_query($query);
											$row = mysql_fetch_array($result);
											$x1 = $row['accept_trading'];
											$ch1[$x1] = "checked";
											echo "
											<h3>Trade Settings</h3>
											<p>Do you want people to have access to trade with you?</p>
											<input type='radio' name='ts' value='1' ".$ch1['1'].">Activate
											<input type='radio' name='ts' value='0' ".$ch1['0'].">Deactivate
											<br><br>
											";
											?>
                                            <div class="settings-buttons">
                                                <input type="submit" value="Save" name="update" class="submit" style="float:right">
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
        
        <br><br>
        <?php include_once('footer.php'); ?>         
      <?php include_once('checktheban.php'); ?>
    
    </body>
</html>