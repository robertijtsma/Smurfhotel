
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/common.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/fullcontent.js"></script>        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/common.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/fullcontent.js"></script>

    
    <link rel="icon" href="./img/favicon.ico">

    <title>Smurf - Eventteam</title>
    
    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styling -->
    <link href="./css/habbo-theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/newhabbo.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,700' rel='stylesheet' type='text/css'>

	        <script type="text/javascript">
            document.habboLoggedIn = true;
            var habboName = "{username}";
            var habboId = {userid};
            var habboReqPath = "";
            var habboStaticFilePath = "{url}/app/tpl/skins/Habbo";
            var habboImagerUrl = "https://smurfhotel.nl/smurf-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
                HabboClient.maximizeWindow = true;
            }
        </script>
	<link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/staff5.css" type="text/css">
</head>
<style>
img.imagediscord {
    height: 80%;
    width: 80%;
}

</style>
<body>


<header>

    <div class="container">

        <a href="me.html" class="brand" title="Smurf Hotel" alt="Smurf Hotel">Smurf Hotel</a>

        <p class="user-count">{online} Smurfen Online</p>

    </div>

    <!-- Navigation -->
    <nav class="main-navigation">

        <div class="container">

            <div class="col-md-12 no-padding">
                <ul class="nav">
                    <li class="active"><img src="./img/home.png" alt="Home" /><a href="./me">Home</a></li>
                    <li><a href="https://smurfhotel.nl/community"><img src="./img/community.png" alt="Community" />Community</a></li>
                    <li><a href="https://smurfhotel.nl/shop"><img src="./img/shop.png" alt="Shop" />Shop</a></li>
                    <li><a href="https://smurfhotel.nl/staff"><img src="./img/staff.png" alt="Staff" />Staff</a></li>
                    <li><a href="#"><img src="./img/forums.png" onclick="alert( 'coming soon' );" alt="Forums" />Forums</a></li>
                    <li class="enter-hotel"><a href="{url}/flashcheck/index.php" target="_blank" onclick="HabboClient.openOrFocus(this); return false;"><img src="./img/enter-hotel.png" /></a></li>
                </ul>
            </div>

        </div>

    </nav>
    <!-- End Navigation -->

</header>

<!-- Sub Navigation -->
<div class="sub-navigation">
    <div class="container">
                                <ul class="nav">
                <li><a href="./community">Community</a></li>
                <li><a href="./eventteam">Eventteam</a></li>
				<li><a href="./gokbond">Gokbond</a></li>
				<li><a href="./bouwteam">Bouwteam</a></li>
				<li><a href="./spamteam">Spamteam</a></li>
				<li><a href="./djs">DJ's</a></li>
            </ul>
                        </div>
</div>
<!-- End Sub Navigation -->

<div id="content">

    
    <div class="container">

        <div class="col-xs-7">

            <div class="habbo-box content">

                <div class="habbo-box-header title-blue">
                    <h4>Het Eventteam</h4>
                </div>

	<div class='staffs'>
    
               <?php
function GetDescr($level)
{
	switch ($level)
	{
		case 1:
		
			return 'Eventteam';
			
		default:
		
			return '';
	}
}
global $engine;
                            $GetRanks = $engine->query("SELECT id,name FROM ranks WHERE id =1 ORDER BY id DESC");
                            while($Ranks = $GetRanks->fetch(PDO::FETCH_ASSOC))
                            {echo "<h2>" . GetDescr($Ranks['id']) . "</h2><br>";
                                $GetUsers = $engine->query("SELECT * FROM users WHERE eventteam = {$Ranks['id']} ORDER by id");
                                while($Users = $GetUsers->fetch(PDO::FETCH_ASSOC))
                                {
                                  if($Users['online'] == 1){ $OnlineStatus = "<img src='{url}/app/tpl/skins/Habbo/images/online.gif'/> "; } else { $OnlineStatus = "<img src='{url}/app/tpl/skins/Habbo/images/offline.gif'/> "; }
                                    echo "<div class='container'><div class='onlinestatus'>{$OnlineStatus}</div><div class='avatar' style='background: url(https://smurfhotel.nl/smurf-imaging/avatarimage.php?figure={$Users['look']}&action=std&gesture=std&direction=2&head_direction=2&size=n&img_format=png);'></div><h5>{$Users['username']}<br></h5><text>Motto: {$Users['motto']}</font></div>						
";
}
}
?>
	</div>

            </div>

        </div>

        <div class="col-xs-5">

            <div class="habbo-box content">

                <div class="habbo-box-header title-blue">
                    <h4>Terms &amp; Conditions</h4>
                </div>

                <p><strong>Please note:</strong> all items, gifts, bundles and/or subscriptions are classed as a donation and contribution towards maintaining the server and not for personal gain. The rewards you receive in return for your donation are a gift from the hotel managers, to you (the donator). The funds that you donate to Hybrid Hotel cannot be reimbursed nor can they be refunded. By making a donation to Hybrid Hotel, you agree to the term and conditions. If you create a dispute with PayPal and/or file for a charge back then we reserve the right to remove any benefits you may have received as a result of making a donation and the right to suspend your account(s).</p>
            </div>

        </div>


    </div>


</div>

<!-- Begin Footer -->

<footer>
    <div class="container">
        <div class="hidden-md-down col-md-3 social-media">
            <span>Volg ons op</span>
            <ul class="social-links">
                <li>
                    <a href="#"><img src="./img/fb.png" alt="Facebook"></a>
                </li>
                <li>
                    <a href="#"><img src="./img/twitter.png" alt="Twitter"></a>
                </li>
                <li>
                    <a href="#"><img src="./img/youtube.png" alt="Youtube"></a>
                </li>
                <li>
                    <a href="#"><img src="./img/rss.png" alt="RSS Feed"></a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 policies">
            <ul class="hidden-ms-down policy-links">
                <li>
                    <a href="https://smurfhotel.nl/me">Home</a>
                </li>
                <li>
                    <a href="#">Safety</a>
                </li>
                <li>
                    <a href="#">For Parents</a>
                </li>
                <li>
                    <a href="#">Terms of Service &amp; Privacy</a>
                </li>
            </ul>

            <p class="copyright">Smurf Hotel, Powered by SmurfCMS. Page was rendered in 0.0906 seconds.<br>
                Copyright © 2018 Smurf, All rights reserved. Smurf Hotel is no way affiliated with Sulake Corporation Oy.
            </p>
        </div>
    </div>
</footer>

<!-- End Footer -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="./js/jquery.min.js"><\/script>')</script>
<script src="./js/jquery.avatargenerate.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="./js/ie10-viewport-bug-workaround.js"></script>

			<?php include('includes/checktheban.php'); ?>
</body>
</html>