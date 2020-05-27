
<?php
 
################################################################################
# REVCMS PROFILES - CODED BY LEON RETROS - DON'T STEAL COPYRIGHT , IF YOU DO YOU'RE A PUSSY #
################################################################################


$username = $_REQUEST["user"];
$userid = $_REQUEST["id"];
 
 
// User Info \\
$userinfo = mysql_query("SELECT * FROM users WHERE username='$username' or id='$userid'");
$get2 = mysql_fetch_assoc($userinfo);
 
 
$user = $get2['username'];
$id = $get2['id'];
$looks = $get2['look'];
$email = $get2['mail'];
$rank = $get2['rank'];
$motto = $get2['motto'];
$credits = $get2['credits'];
$pixels = $get2['activity_points'];
$pvip = $get2['vip_points'];
$online = $get2['online'];
$role = $get2['role'];
$youtube = $get2['youtube'];
$account_created = $get2['account_created'];
 
?>
 
<?php
//Stats\\
 
 
$stats = mysql_query("SELECT * FROM user_stats WHERE id='$id'");
$get1 = mysql_fetch_assoc($stats);
$resp = $get1['Respect'];
$giftr = $get1['GiftsReceived'];
$gifts = $get1['GiftsGiven'];
$achivement = $get1['AchievementScore'];
$visits = $get1['RoomVisits'];
$ontime = $get1['OnlineTime'];
 
 
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
 
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Min sida</title>
       
        <link rel="stylesheet" href="{url}/app/tpl/skins/custom-habbo/styles/common.css" type="text/css">
		
        <script type="text/javascript" src="{url}/app/tpl/skins/custom-habbo/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/custom-habbo/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/custom-habbo/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/custom-habbo/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/custom-habbo/js/fullcontent.js"></script>
	
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/habboclub.js"></script>
                <link rel="shortcut icon" href="{url}/favicon.ico" type="image/vnd.microsoft.icon" /><script>
       
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
            <link rel="stylesheet" href="{url}/app/tpl/skins/custom-Habbo/styles/ie8.css" type="text/css">
        <![endif]-->
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/custom-habbo/styles/ie.css" type="text/css" />
        <![endif]-->
        <!--[if lt IE 7]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/custom-habbo/styles/ie6.css" type="text/css" />
            <script type="text/javascript" src="{url}/app/tpl/skins/custom-habbo/js/pngfix.js"></script>
            <script type="text/javascript">
                try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
            </script>
            <style type="text/css">
                body { behavior: url({url}/app/tpl/skins/custom-habbo/js/csshover.htc); }
            </style>
        <![endif]-->
                <?php
                
                 
                 // Hvem sin profil?
                        function clean($var){
                        return (mysql_real_escape_string(strip_tags($var)));
                        }
                       
                        error_reporting(0); // Fjern alle error, som om det er noen :P
                        $user = clean($_GET['user']);
                        $data = mysql_query("SELECT * FROM `users` WHERE `username` = '".$user."' "); // har du sugen server, hent ut bestemte tabeller
                        while ($data = mysql_fetch_array($data)) {
                 
                 // Hent gjestebokinnlegg
                        $getEntries = mysql_query("SELECT * FROM profile_wall WHERE page_id = '".$data['id']."' ORDER by id DESC");
                       
                // Legg til gjestebokinnlegg
                        if(isset($_POST['_commentSubmit']))
 
                        if (empty($_POST['_fullMessage']))
                        $_POST['message'] = '';
 
                        $message = strip_tags (($_POST['_fullMessage']));
                        if($message == NULL){
                        }else{
                        if (isLogged)
                        {
                        mysql_query("INSERT INTO profile_wall (page_id, poster_id, message) VALUES ('" .$data['id']. "', '" . $_SESSION['user']['id']. "', '" .filter($message). "')") or die(mysql_error());
                          }
                          header("location: #Lagret"); // Bare ha noe etter # for sikkerhetsskyld #D&aring;rligKodeDævver
                        exit;
                        }
               
                // Hent brukerstatistikker
                        $userstat = mysql_query("SELECT * FROM `user_stats` WHERE `id` = '".$data['id']."' ") or die(mysql_error());
                       
                
                ?>
               
</head>

    </head>

<style type="text/css">.input[type="text"], textarea {
	display: block;
	width: 375px;
	max-width: 385px;
	padding: 6px 6px;
	margin-bottom: 10px;
	font-size: 14px;
	line-height: 1.428571429;
	color: #555;
	vertical-align: middle;
	background-color: #fff;
	background-image: none;
	border: 1px solid #ccc;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
</style>


   
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

                        <a href="{url}/client" class="new-button green-button" target="eac955c8dbc88172421193892a3e98fc7402021a" onclick="HabboClient.openOrFocus(this); return false;"><b>Enter {hotelName}</b><i></i></a>
			 			
                    
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
                        <li class="last"><a href="{url}/me">Home</a></li>
						<li class="selected">My Page</li>
                        <li class=" last"><a href="{url}/Profile">Account Settings</a></li>
						
						<li class=""><a href="{url}/online">Online Users</a></li>
                    </ul>
                </div>
				</div>
				  <div id="container">
                <div id="content" style="position: relative" class="clearfix">
                    <div id="column1" class="column" style="width:774px;">
                        <div class="habblet-container ">              
                            <div class="cbb clearfix">
                                <h2 class="title" style=""></h2>
                           
                                                                <div style="width:756px;border-radius:0 0 4px 4px;margin:-5px auto 0 auto;height:622px;background-image:url(http://img15.hostingpics.net/pics/279302summer1.png);">
                           
            <div id="container">
                <div id="content" style="position: relative" class="clearfix">
                   
                        <div id="column1" class="column" style="float:left;width:400px;padding-top:10px;padding-left:22px;">
                        <div class="habblet-container">
                       <div class="cbb clearfix orange ">
 
                        <h2 class='title' style='font-size:12px;font-family: "Tahoma",Verdana,Arial;'><?php echo mysql_num_rows($getEntries); ?> Guestbook posts</h2>
                        <div class="box-content" style="padding:10px 10px 0 10px; height:245px; overflow-x:hidden; overflow-y:scroll">
                        <div style="align:left;">
                        <?php
                        // Hent gjestebokinnlegg
 
                                if(mysql_num_rows($getEntries) == 0) {
                                echo "<center>There are not posts in this guestbook!</center>";
                                } else {
                                                       
                                echo '';
                                while($Entries = mysql_fetch_array($getEntries)){
                                $getUserInfo = mysql_query("SELECT * FROM users WHERE id = '".$Entries['poster_id']."'");
                                $userInfo = mysql_fetch_array($getUserInfo);
                                echo '<div style="width:400x;overflow:auto;background-color:#fff;border-radius:5px;border-style:solid;border-color:#D9D9D9;border-width:1px;padding:5px;margin-bottom:5px;">
                                <div><img src="http://www.habbo.it/habbo-imaging/avatarimage?figure='.$userInfo['look'].'" alt="avatar" class="rotate" align="left">   
                                <br/><br/>
                                <span style="float:left"><a href="{url}/index.php?url=home&user={username}/'.$userInfo['username'].'">'.$userInfo['username'].'</a> </span></div>
                                <br>
                                <div style="">
                                <p style="text-align:justify;maxlength=32;overflow:auto;"> '.$Entries['message'].'</p>  </div>
                                </div>';
                                }
                                echo '';
                                }
                        ?></div>                                                                                                </div>
                                                                                               
                                                                                                <div class="linje"></div>
                                                                                               
                                                                                                <div style="padding: 0 10px">
 
 
                                <div style='background-color: #F5F5F5;border-radius:5px;padding:5px;'>
                                        <form method='post'>
                                <textarea name="_fullMessage" style="width:96%; max-width:96%; min-height:80px" ="Write in this guestbook "></textarea>
                                <br />
                                <div align="left">
                                <input type='submit' name='_CommentSubmit' value='Add post to guestbook'/>
                                </form>
                       
                        </div>
                        </div>
                        </div>
                        </div></div>
						
 </div>
                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                         
 
                        <div id="column1" class="column" style="float:left;width:322px;padding-top:10px;">
                        <div class="habblet-container">        
                        <div class="cbb clearfix green">
                        <h2 class='title' style='font-size:12px;text-align:left;font-family: "Tahoma",Verdana,Arial;'><span style="float: left;"><?php echo $data['username']; ?></span>
                        <span style="position:absolute;right:5px;"><?php echo (($data['online'] == "1") ? '<img src="{url}/app/tpl/skins/custom-habbo/images/1.gif"/>' : '<img src="{url}/app/tpl/skins/custom-habbo/images/0.gif" />'); ?></span></h2>
                        <div style="margin:-10px;">
                       
                            <img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $data['look']; ?>" alt="avatar" class="rotate" align="left">     
                                <br/><br/>
                               
                                <font style='font-size:10px;'><i><?php echo $data['motto']; ?></i>
                                <br /><br />
                                Registrerings datum: <?php echo date("j-M-Y", $data['account_created']); ?>.
                                <br><?php echo $username; ?> &#228;r ranken <?php
   
$getUser = mysql_query("SELECT * FROM users WHERE id ='$id'");
$user = mysql_fetch_array($getUser);
 
 
$rankId = $user['rank'];
$getRank = mysql_query("SELECT * FROM ranks WHERE id ='$rankId'");
$rank = mysql_fetch_array($getRank);
 
 
echo "".$rank['name']."";
?>!
                                </font><span style='color:#C0C0C0'></span>
                        </div>
                        </div>
       
                <div class="habblet-container">        
                <div class="cbb clearfix blue">
                        <h2 class='title' style='font-size:12px;text-align:left;font-family: "Tahoma",Verdana,Arial;'>User info</h2>
                        <div style='font-size:11px;font-family: "Tahoma",Verdana,Arial;padding-left:5px;padding-top:5px;'>
                        <p style='padding-bottom:4px;'><img src='{url}/app/tpl/skins/custom-habbo/images/mynter.gif'/> <?php echo number_format ($data['credits']); ?> Coins</p>
                        <p style='padding-bottom:4px;'><img src='{url}/app/tpl/skins/custom-habbo/images/pixelIcon.png'/> <?php echo number_format ($data['activity_points']); ?> Pixels</p>
						<p style='padding-bottom:4px;'><img src='{url}/app/tpl/skins/custom-habbo/images/snackor.gif'/> <?php echo number_format ($data['vip_points']); ?> Shells</p>
                        <p style='padding-bottom:4px;'><img src='/app/tpl/skins/custom-habbo/images/laston_home.gif'/> <?php echo date("j-M-Y", $data['last_online']); ?></p>
                        <p style='padding-bottom:4px;'><img src='/app/tpl/skins/custom-habbo/images/3.png'/> <?php echo $resp; ?> Hugs</p>
                        <p style='padding-bottom:4px;'><img src='/app/tpl/skins/custom-habbo/images/4.png'/> <?php echo $achivement; ?> Achivement points</p>
                </div>
                </div>
                </div>
 
                <div class="habblet-container">        
                <div class="cbb clearfix settings">
                        <h2 class='title' style='font-size:12px;text-align:left;font-family: "Tahoma",Verdana,Arial;'><?php echo $data['username']; ?>'s Badges</h2>
                        <div style='padding-left:5px;padding-right:5px;padding-top:5px;'>
 
                <?php
                // Hent 10 tilfeldige skilt
                //(hvis bruker ikke har 10 skilt henter den alle brukeren har).
                        $getmybadges = mysql_query("SELECT * FROM user_badges WHERE user_id='".$data['id']."' ORDER BY RAND( )LIMIT 5");
 
                        while($rowing = mysql_fetch_assoc($getmybadges)){
                        $badge = $rowing['badge_id'];
                        echo '<img src="http://klient.fliphotell.se/r63/c_images/album1584/'.$badge.'.gif" style="margin-right: 10px;" />';
 
                        }
                ?>
                </div>
                </div>
                </div>
             
                </div>
 

                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                        </div>
                       
        <script type="text/javascript">
            HabboView.run();
        </script>
        <!--[if lt IE 7]>
 
            <script type="text/javascript">
 
                Pngfix.doPngImageFix();
 
            </script>
 
        <![endif]-->
    </body>
 <?php
 }?>
</html>