<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Shop</title>
        
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
                    <li><a href="{url}/community">Community</a><span></span></li>
					<li><a href="{url}/staff">Mitarbeiter</a><span></span></li>
					<li class="selected"><a href="{url}/shop">Diamanten</a><span></span></li>
					
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
            <div id="navi2-container" class="pngbg">
                <div id="navi2" class="pngbg clearfix">
                    <ul>
					    <li class=""><a href="{url}/shop">Shop</a></li>
                        <li class="selected last">Badges</li>
                    </ul>
                </div>
            </div>
<div id="container">
                <div id="content" style="position: relative" class="clearfix">
                    <div id="column1" class="column">
                        <div class="habblet-container ">
                            <div class="cbb clearfix blue ">
                                <h2 class="title">Badge Katalog</h2>
                                <div style="padding:5px">
            <table>
<?php
$badgeCodes = array('GM1', 'GM2', 'GM3', 'MYFAN', 'CRLS', 'DOTA', 'LOL1');
$badgeCosts = array(1000, 800, 500, 420, 137, 150, 100);

$subCode = $_GET['id'];
if(isset($subCode)){

    $badgeExsist = false;
    for($i = 0; $i < sizeof($badgeCodes); $i++){
    
        if($subCode == $badgeCodes[$i]){
            
            // Check to see if user has badge
            $hasBadgeCheck = mysql_query('SELECT * FROM user_badges WHERE user_id = '.$_SESSION['user']['id'].' AND badge_id = "'.$badgeCodes[$i].'"')or die(mysql_error());
            
            if(mysql_num_rows($hasBadgeCheck) < 1){
                // check finanz
                $pixelCheck = mysql_query('SELECT * FROM users WHERE id = '.$_SESSION['user']['id'].'')or die(mysql_error());
                $gotPixelCheck = mysql_fetch_assoc($pixelCheck);
                if($gotPixelCheck['activity_points'] >= $badgeCosts[$i]){
                
                    $removePixels = mysql_query('UPDATE users SET activity_points = activity_points - '.$badgeCosts[$i].' WHERE id = '.$_SESSION['user']['id'].'')or die(mysql_error());
                    $giveUserBadge = mysql_query('INSERT INTO user_badges (user_id, badge_id) VALUES ('.$_SESSION['user']['id'].',"'.$badgeCodes[$i].'")')or die(mysql_error());
                    
                    $_SESSION['user']['activity_points'] = $_SESSION['user']['activity_points'] - $badgeCosts[$i];
                    
                    echo '<div id="badge-container-error" style="background-color:green;"><center><font color="white"> Du hast dir ein neues Badge gekauft.</font></center></div>';
                    break;
                    
                }
                
                else{
                    echo '<div id="badge-container-error">Du hast nicht genug Duckets.</div>';
                    
                }
                
            }
            else{
                echo '<div id="badge-container-error">Du besitzt dieses Badge schon.</div>';
            }
            
            break;
            
        }        
        
    }
    
}

echo '<table>';
echo '<tr><td><strong>Bild:</strong></td><td><strong>Code:</strong></td><td><strong>Kosten:</strong></td></tr>';
for($n = 0; $n < sizeof($badgeCodes); $n++){

    $hasBadge = mysql_query('SELECT * FROM user_badges WHERE user_id = '.$_SESSION['user']['id'].' AND badge_id = "'.$badgeCodes[$n].'"')or die(mysql_error());
    
    if(mysql_num_rows($hasBadge) < 1){
    
    echo '    
    <tr>
        <td width="50%">
            <img src="/r63/c_images/album1584/'.$badgeCodes[$n].'.gif"/>
            <br/>
        </td>
        <td width="10%">
            <center><strong>'.$badgeCodes[$n].'</strong></center>
        </td>
        <td width="10%">
        <center>'.$badgeCosts[$n].' Duckets</center>
        </td>
        <td width="30%">
            <center><a href="{url}/index.php?url=badge&id='.$badgeCodes[$n].'"><input type="submit" href="{url}/index.php?url=badge&id='.$badgeCodes[$n].'" value="Kaufen"/></a></center>
        </td>
    </tr>
    ';    
    }
    
    else{ //kein Badge
        
    }
    
}

echo '</table>';
?>
</div></div>
                        </div>
                    </div>
<div id="column2" class="column">
                        <div class="habblet-container ">
                            <div class="cbb clearfix blue ">
                                <h2 class="title">Finanzen</h2>
                                <div style="padding:5px">
            <center>
            <img src='http://www.habbo.nl/habbo-imaging/avatarimage?figure={figure}&action=crr=5&direction=3&head_direction=3&gesture=s&size=3'/>
            <hr>
            <table>
            <tr>
            <td>
            <strong>Taler:</strong></td><td>{coins}
            </td>
            </tr>
            <tr>
            <td>
            <strong>Duckets:</strong></td><td>{activitypoints}
            </td>
            </tr>
			<tr>
            <td>
            <strong>Diamanten:</strong></td><td>{crystals}
            </td>
            </tr>
            </td>
            </tr>
            </table>
            </center>
         </div>
                            </div>
                        </div>
                    </div>
                <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                </div>
            </div>
        </div>
       
        </div>
        <div id="footer" >
           <?php include('includes/footer.php'); ?>
		   <?php include('includes/checktheban.php'); ?>
        </div>
    
    </body>
</html>