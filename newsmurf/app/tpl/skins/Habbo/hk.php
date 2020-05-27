<?php 
if($_SESSION['user']['rank'] >= 8){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Housekeeping</title>
        
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
        <style type="text/css">
			.alert{
				height:25px;
				width:100%;
				background-color:#c73c3c;
				text-align:center;
				border-radius:1px;
				line-height:25px;
				color:#fff;
				font-weight:700;
				
			}
			
			.alert-box{
				height:40px;
				width:301px;
				background-color:lightgreen;
				margin-bottom:5px;
				border-radius:3px;
				text-align:center;
				font-size:10px;
				color:#fff;
				font-weight:700;
				line-height:38px;}
								
			input{
				height:25px;
				border:1px solid lightgray;
				border-radius:2px;
				text-align:center;}
						
			input[type='submit']{
				background-image:none;
				border:1px solid lightgray;
				line-height:20px;}
				
			li{
			}
			
			a.hk{
				text-decoration:none;
				color:#000;	
			}
			
			a.hk:hover{
				text-decoration:underline;
			}
			
			a.hk.selected{
				text-decoration:underline;
			}
		</style>
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
    
     
        <div id="content-container">
            <div id="navi2-container" class="pngbg">
            </div>
        <div id="content-container">
            <div id="container">
			 <div id="container">
                <div id="content" style="position: relative" class="clearfix">
                    <div id="column1" class="column">
						<div class="habblet-container ">
							<div class="cbb clearfix settings">
								<h2 class="title">Housekeeping</h2>
								<div style="padding:7px 7px 1px" align = "center">
									<?php 
											if(basename($_SERVER["REQUEST_URI"]) == 'hk'){ ?>
											Hi {username},</br></br>
											Willkommen im neuen {hotelName} Housekeeping.</br>
											Dieses System wurde extra frisch implementiert um dir eine bessere Kontrolle über das Spielgeschehen zu ermöglichen.</a></br></br>
											
										

									<?php	}
											// News
											if(isset($_GET['create_news'])) require_once 'admin/news_create.php';
											if(isset($_GET['manage_news'])) require_once 'admin/news_manage.php';
											if(isset($_GET['edit_news'])) require_once 'admin/news_edit.php';
											
											// User Editing
											if(isset($_GET['edit_users'])) require_once 'admin/manage_users.php';
											if(isset($_GET['manage_vip'])) require_once 'admin/manage_vip.php';
											if(isset($_GET['manage_bans'])) require_once 'admin/manage_bans.php';
											if(isset($_GET['create_bans'])) require_once 'admin/create_bans.php';
											if(isset($_GET['change_password'])) require_once 'admin/user_passwords.php';
											
											// Staff Stuff
											if(isset($_GET['manage_staff'])) require_once 'admin/manage_staff.php';

											// Other Stuff
											if(isset($_GET['settings'])) require_once 'admin/settings.php';
											if(isset($_GET['hklogs'])) require_once 'admin/hklogging.php';
											if(isset($_GET['view_chatlogs'])) require_once 'admin/view_chatlogs.php';
									?>
								</div>
							</div>
						</div>
					</div>
					<div id="column2" class="column">
                        <div class="habblet-container ">
						<div class = "alert-box">Deine IP: {ip_last}</div>
                            <div class="cbb clearfix green ">
                                <h2 class="title">Navigation</h2>
								<div  align = "center" style="padding:7px 7px 1px">
									<a href = "{url}/hk" class = "hk <?php if(basename($_SERVER["REQUEST_URI"]) == 'hk'){echo ' selected';} ?>">Home</a></br>
									<a href = "{url}/index.php?url=hk&view_chatlogs" class = "hk <?php if(basename($_SERVER['REQUEST_URI']) == 'index.php?url=hk&view_chatlogs'){echo ' selected';} ?>">Chatlog</a></br>
									<a href = "{url}/index.php?url=hk&create_bans" class = "hk <?php if(basename($_SERVER['REQUEST_URI']) == 'index.php?url=hk&create_bans'){echo ' selected';} ?>">Benutzer bannen</a></br>
									<a href = "{url}/index.php?url=hk&manage_bans" class = "hk <?php if(basename($_SERVER['REQUEST_URI']) == 'index.php?url=hk&manage_bans'){echo ' selected';} ?>">Bann Verwaltung</a></br>
									<a href = "{url}/index.php?url=hk&manage_vip" class = "hk <?php if(basename($_SERVER['REQUEST_URI']) == 'index.php?url=hk&manage_vip'){echo ' selected';} ?>">Premium entfernen</a></br>
									<a href = "{url}/index.php?url=hk&create_news" class = "hk <?php if(basename($_SERVER['REQUEST_URI']) == 'index.php?url=hk&create_news'){echo ' selected';} ?>">Artikel erstellen</a></br>
									<a href = "{url}/index.php?url=hk&manage_news" class = "hk <?php if(basename($_SERVER['REQUEST_URI']) == 'index.php?url=hk&manage_news'){echo ' selected';} ?>">Artikel bearbeiten</a></br>
									<a href = "{url}/index.php?url=hk&manage_staff" class = "hk <?php if(basename($_SERVER['REQUEST_URI']) == 'index.php?url=hk&manage_staff'){echo ' selected';} ?>">Mitarbeiter entlassen</a></br>
									<a href = "{url}/index.php?url=hk&change_password" class = "hk <?php if(basename($_SERVER['REQUEST_URI']) == 'index.php?url=hk&change_password'){echo ' selected';} ?>">Passwörter ändern</a></br>
									<a href = "{url}/index.php?url=hk&hklogs" class = "hk <?php if(basename($_SERVER['REQUEST_URI']) == 'index.php?url=hk&hklogs'){echo ' selected';} ?>">Admin Log</a></br>
									<a href = "{url}/index.php?url=hk&edit_users" class = "hk <?php if(basename($_SERVER['REQUEST_URI']) == 'index.php?url=hk&edit_users'){echo ' selected';} ?>">Benutzer bearbeiten</a></br>
									<a href = "{url}/index.php?url=hk&settings" class = "hk <?php if(basename($_SERVER['REQUEST_URI']) == 'index.php?url=hk&settings'){echo ' selected';} ?>">Einstellungen</a></br>
								</div>
							</div>
						</div>
                        <div class="habblet-container ">
                            <div class="cbb clearfix red ">
                                <h2 class="title">10 zuletzt registriert</h2>
								<div  align = "center" style="padding:7px 7px 1px">
								<div class = "alert"><span style = "font-size:9px;font-weight:700;">Adressen niemals! weitergeben</span></div><br>
									<?php 
									$q = mysql_query("SELECT * FROM users ORDER BY id DESC LIMIT 10");
										while ($m = mysql_fetch_array($q)) { 
										echo $m['username'] . ' - ' . substr($m['mail'], 0, 20) . '<br>';
									}
									?>
								</div>
							</div>
						</div>			
					</div>
					<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
				</div>
        <div id="footer" >
			<?php include('includes/checktheban.php'); ?>
        </div>
    
    </body>
</html>
<?php } else {die('Dieser Bereich ist nur für Mitarbeiter');}?>
