
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Staff</title>
       
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
            var habboDefaultClientPopupUrl = "{url}/api.php";
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
	<script src="{}/app/tpl/skins/{skin}/js/snowstorm.js"></script>
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
                        <li class=""><a href="{url}/news">News</a></li>
                        <li class=" selected last">Staff</li>
						
						<li class=""><a href="{url}/topstats">Top Users</a></li>
                    </ul>
                </div>
            </div>
           <div id="container">
                <div id="content" style="position: relative" class="clearfix">
<div id="column1" class="column">
                                        <?php
 
function GetDescr($level)
{
        switch ($level)
        {
                case 8:
                        return '';
                case 7:
               
                        return '';
                       
                case 6:
               
                        return '';
                       
                case 5:
               
                        return '';
                       
                case 4:
               
                        return '';
                       
                case 3:
               
                        return '';
						        
                case 2:
               
                        return '';
       
                default:
               
                        return '';
        }
}
 
$getRanks = mysql_query("SELECT id,name FROM ranks WHERE id >= 5 ORDER BY id DESC");
 
while ($Ranks = mysql_fetch_assoc($getRanks))
{      
        echo '<div class="habblet-container ">         
<div class="cbb clearfix blue ">
<h2 class="title"><span style="float: left;">' . $Ranks['name'] . '</span> <span style="float: right; font-weight: normal; font-size: 75%;">' . GetDescr($Ranks['id']) . '</span></h2>';
       
        $getMembers = mysql_query("SELECT id,username,motto,look,online,last_online FROM users WHERE rank = '" . $Ranks['id'] . "'");
       
        echo '<div class="box-content">';
       
        if (mysql_num_rows($getMembers) > 0)
        {
                $oe = 1;
               
                while ($member = mysql_fetch_assoc($getMembers))
                {
                        if ($oe == 2)
                        {
                                $oe = 1;
                        }
                        else
                        {
                                $oe = 2;
                        }
       
                        echo '<table width="107%" style="padding: 5px; margin-left: -15px; background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . ';">
                        <tbody>
                                <tr>
                                        <td valign="middle" width="25">
                                                <img style="margin-top: -10px;" src="http://habbo.it/habbo-imaging/avatarimage?figure=' .$member['look'] . '&action=crr=6,sit&direction=2&head_direction=3&gesture=sml&size=m">
                                        </td>
                                        <td valign="top">
                                                <p style="font-size: 90%;">Username: <strong>' .$member['username'] . '</strong><br><i></span><i><span style="color: #6699ff; text-shadow: 2px 2px 10px #6699ff;">Lastest activity: '. date("D, d F Y H:i (P)", $member['last_online']) .'</span></i></p>
                                                <br />';
                                               
                                        $getBadges = mysql_query("SELECT * FROM user_badges WHERE user_id = '" . $member['id'] . "' AND badge_slot >= 1 ORDER BY badge_slot DESC LIMIT 5");
                                       
                                        while ($b = mysql_fetch_assoc($getBadges))
                                        {
                                                echo '<img src="http://klient.fliphotel.org/r63/c_images/album1584/' . $b['badge_id'] . '.gif" style="float: left;">&nbsp;&nbsp;&nbsp;';
                                        }
                                               
                                        echo '</td>
                                        <td valign="top" style="float: right;">
                                                ' . (($member['online'] == "1") ? '<img src="{url}/app/tpl/skins/custom-habbo/images/1.gif"/>': '<img src="{url}/app/tpl/skins/custom-habbo/images/0.gif"/>') . '
                                        </td>
                                </tr>
                        </tbody>
                        </table>';
                }
        }
        else
        {
                echo '<i>There are no staff in this type of rank.</i>';
        }
       
        echo '</div>
        </div>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName(\'process-template\')) { Rounder.init(); }</script> ';
}
 
?>

                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                    </div>
                    <div id="column2" class="column">
                                        <div class="habblet-container ">               
<div class="cbb clearfix blue ">
 
<h2 class="title">{hotelName} Staff</h2>
 
                                                <div class="box-content">
 
        <img src="http://i.imgur.com/lV5TK.gif" align="right">
       
        <p>
               {hotelName} Staff team evolves and moderates the hotel. They see so everything is working properly and that they users are safe from hacking/bullying. All {hotelName} Staffs are on this webpag, and you can always recognize the staff because of the staff emblems they are wearing in the client.
        </p>
 
</div>
</div>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                                                </div>
        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
        <script type="text/javascript">
            custom-habboView.run();
        </script>
 
        <!--[if lt IE 7]>
            <script type="text/javascript">
                Pngfix.doPngImageFix();
            </script>
        <![endif]-->
		<?php include_once('includes/footer.php'); ?>
       
<div id="footer" >
 
 
 
<br>
 
        </div>
        </div>
   
    </body>
</html>