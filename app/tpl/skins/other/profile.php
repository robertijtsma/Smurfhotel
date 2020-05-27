
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Profile</title>
        
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
            var habboImagerUrl = "http://habbo.nl/habbo-imaging";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
                HabboClient.maximizeWindow = true;
            }
        </script>


<link rel="stylesheet" href="{url}/app/tpl/skins/{skin}/styles/lightweightmepage.css" type="text/css" />
<script src="{url}/app/tpl/skins/{skin}/js/lightweightmepage.js" type="text/javascript"></script>
<script src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/941/web-gallery/static/js/moredata.js" type="text/javascript"></script>

<!--[if IE 8]>
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/941/web-gallery/static/styles/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/941/web-gallery/static/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/941/web-gallery/static/styles/ie6.css" type="text/css" />
<script src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/941/web-gallery/static/js/pngfix.js" type="text/javascript"></script>
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
                        <li class=" "><a href="{url}/me">Home</a></li>
						<li class=" last"><a href="{url}/index.php?url=home&user={username}">My Page</a></li>
                        <li class=" selected last">Account Settings</li>
						
						<li class=""><a href="{url}/online">Online Users</a></li>
						
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
                                                <li class="selected">Profile</li>
												<li class=" "><a href="account"> Account Settings</a></li>
												<li class=" "><a href="tradesettings">Trade Settings</a></li>
												<li class=" "><a href="tags">Tags</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="habblet-container " style="float:left; width: 560px;">
                                <div class="cbb clearfix settings">
                                    <h2 class="title">Change your profile</h2>
                                    <div class="box-content">
																	<?PHP
									
									if(isset($_POST['update'])) { 
									$bf=mysql_real_escape_string($_POST['bf']);
									$os=mysql_real_escape_string($_POST['os']); 
									$fm=mysql_real_escape_string($_POST['fm']);
									$am=mysql_real_escape_string($_POST['am']);
									$user=mysql_real_escape_string($_POST['user']);
									switch ($bf){	
									case "":
										mysql_query("UPDATE users SET motto='$am', block_newfriends='1', hide_online='$os', hide_inroom='$fm' WHERE username='$user'") or die(mysql_error()); 
										break;	
									case "2":
										mysql_query("UPDATE users SET motto='$am', block_newfriends='0', hide_online='$os', hide_inroom='$fm' WHERE username='$user'") or die(mysql_error()); 
										break;
}
									
									

									echo '<div class="rounded-container">';
									include("includes/greenbox1.php");
									echo '<div class="rounded-green rounded-done">';
									echo '<b>Your profile has been updated!</b><br>';
									echo '</div>';
									include("includes/greenbox2.php");
									echo '</div>';
									}
									?>
											<form method="post" style="background: rgba(0,0,0,.2);border-radius:4px;padding:3px;color:#FFF;">
											<input type="hidden" name="user" value="{username}" />
                                            <h3>Motto</h3>
                                            <p>Your motto is what everyone sees when they click on you in client.</p>
                                            <input type="text" name="am" size="32" maxlength="32" value="{motto}"></label></p>
											
											<?php
											$query = "SELECT * FROM users WHERE id = '".$_SESSION['user']['id']."'";
											$result = mysql_query($query);
											$row = mysql_fetch_array($result);
											$x1 = $row['block_newfriends'];
											$x2 = $row['hide_online'];
											$x3 = $row['hide_inroom'];
											$ch1[$x1] = "checked";
											$ch2[$x2] = "checked";
											$ch3[$x3] = "checked";
											echo "
											<h3>Friend requests</h3>";
											if ( $x1 = '1' ) {
											echo "<input type='checkbox' name='bf' value='2' ".$ch1['0'].">Decline friend requests:";
											} else {
											echo "<input type='checkbox' name='bf' value='1' ".$ch1['1'].">Accept friend requests:";
											}
											echo "<br><br>
											";
											
											echo "
											<h3>Online status</h3>
											<p>Choose thoose who can see you online:</p>
											<input type='radio' name='os' value='1' ".$ch2['1'].">No one
											<input type='radio' name='os' value='0' ".$ch2['0'].">Everyone
											<br><br>
											";
											
											echo "
											<h3>Follow me</h3>
											<p>Choose those who can follow you into rooms:</p>
											<input type='radio' name='fm' value='1' ".$ch3['1'].">No one
											<input type='radio' name='fm' value='0' ".$ch3['0'].">My friends
											";
											?>
											<br>
											</br>
												<p><label><h3>Youtube video:</h3><input type="text" name="acc_youtube" size="32" maxlenth="32" value="{youtube}"></label></p>
												Example: https://www.youtube.com/embed/nv76KvFV748
                                            <div class="settings-buttons">
                                                <input type="submit" value="Submit" name="update" class="submit" style="float:right">
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
</div>
		<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]--> 
</div>
      <?php include_once('footer.php'); ?>         
      <?php include_once('checktheban.php'); ?>
    </body>