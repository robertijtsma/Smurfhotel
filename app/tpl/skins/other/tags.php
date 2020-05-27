<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Tags</title>
        
		
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
												<li class=" "><a href="account"> Account Settings</a></li>
												<li class=" "><a href="tradesettings">Trade Settings</a></li>
												<li class="selected"> Tags</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

	<?php
	$my_id = $_SESSION['user']['id'];
	$fetch_tags = mysql_query("SELECT tag,id FROM user_tags WHERE user_id = '".$my_id."' LIMIT 20") or die(mysql_error());
	$tags_num = mysql_num_rows($fetch_tags);
	
	if (isset($_POST['remtag']))
	{
	$do = $_GET['do'];
    if($do != "") {
    mysql_query("DELETE FROM user_tags WHERE id = '".$do."'");
    Redirect("me");
    }
	}
	?>
	</div>
                            <div class="habblet-container " style="float:left; width: 560px;">
                                <div class="cbb clearfix settings">
                                    <h2 class="title">My Tags</h2>
                                    <div class="box-content">                                     <left>
<div style="text-align: left;background: rgba(0,0,0,.2);border-radius:4px;padding:3px;color:#FFF;">
<?php
$my_id = $_SESSION['user']['id'];
$fetch_tags = mysql_query("SELECT tag,id FROM user_tags WHERE user_id = '".$my_id."' LIMIT 20") or die(mysql_error());


$do = $_GET['id']; 
if (isset($do))
{
    mysql_query("DELETE FROM user_tags WHERE id = '".$do."'");
	header("Location: tags");
}
 
    if (isset($_POST['newtag']))
    {
    $user_id = $_SESSION['user']['id'];
    $tag = htmlspecialchars(addslashes($_POST[newtag]));
 
    if (strlen($user_id) < 1 || strlen($tag) < 1)
    {
	header("Location: tags");
    }
    else
    {
        mysql_query("INSERT INTO user_tags (user_id    ,tag) VALUES ('" . $user_id    . "','" . $tag . "')");
    header("Location: tags");
    }
    }
    ?>
    <div id="tab-3-2-content" >
    <div id="my-tag-info" class="habblet-content-info">
        <?php if($tags_num > 19){ echo "Max limit tag. Delete one of your tag and then add."; } elseif($tags_num == 0){ echo "You dont have any tags."; } elseif($tags_num < 20){ echo "You still have space for more tags."; } ?>
    </div>
<div class="box-content">
    <div class="habblet" id="my-tags-list">
 
<?php if($tags_num > 0){
            echo "<ul class=\"tag-list make-clickable\"> ";
    while($row = mysql_fetch_assoc($fetch_tags)){
	echo ' <li>'.strtolower($row["tag"]).'</li>
						<a href="{url}/index.php?url=tags&id='.$row["id"].'"><input type="image" src="{url}/app/tpl/skins/{skin}/images/minus.png" href="{url}/index.php?url=tags&id='.$row["id"].'"/></a>&nbsp;
		   
	';
    }
            echo "</ul>";
} ?>
 
<?php if($tags_num < 20){ ?>
    <form method="post">
    <div class="add-tag-form clearfix">
        <input type="text" name="newtag" maxlength="20" style=""/>
        <input type="submit" class="submit" name="newtag" value="Add" style="">
    </div>
    <div style="clear: both"></div>
    </form>
<?php } ?>
    </div>
</div>
 
<script type="text/javascript">
document.observe("dom:loaded", function() {
    TagHelper.setTexts({
        tagLimitText: "you have reached your tag limit - delete 1 if you want to add new one.",
        invalidTagText: "Invalid tag",
        buttonText: "OK"
    });
        TagHelper.init('21063711');
});
</script>
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