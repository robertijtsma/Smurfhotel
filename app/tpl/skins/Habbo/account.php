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

    <title>Smurf - Instellingen</title>
    
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
                <li><a href="./account">Instellingen</a></li>
                <li><a href="./logout">Log uit</a></li>
            </ul>
                        </div>
</div>
<!-- End Sub Navigation -->
    
<?php if(isset($template->form->error)) { echo '<div class="error">'.$template->form->error.'</div>'; } ?>
 <center><div class='content'>
                                        <form method="post" class='account'>
                                            <br><h3>Motto:</h3>
                                            <p>Je motto word weergegeven in de client als iemand op je klikt!</p>
                                            <p><label>Status:<input type="text" name="acc_motto" size="32" maxlength="32" value="{motto}" id="avatarmotto"></label></p><br><hr><br>
                                            <h3>Email:</h3>
                                            <p>Je email adres dat geregistreerd staat op dit account.</p>
                                            <p><label>E-Mail:<input type="text" name="acc_email" size="32" value="{email}" id="avatarmotto"></p><br><hr><br>
                                            <h3>Huidig Wachtwoord</h3>
                                            <p>Voer het wachtwoord in dat u hebt gebruikt om u aan te melden bij Smurf.</p>
                                            <p><label>Wachtwoord:<input type="password" name="acc_old_password" value="" id="avatarmotto"></p><br><hr><br>
                                            <h3>Nieuw Wachtwoord</h3>
                                            <p>Voer hier het nieuwe wachtwoord in, u logt nu in op Smurf met dit wachtwoord zodra u op "Opslaan" klikt.</p>
                                            <p><label>Wachtwoord:<input type="password" name="acc_new_password" value="" id="avatarmotto"></p><br><hr><br>
                                       <center><input type="submit" value="Opslaan" name="account" class="submit"></center>
                                        </form>
                                 
</div></center>

    
<!-- Begin Footer -->

<footer>
    <div class="container">
        <div class="hidden-md-down col-md-3 social-media">
            <span>Volg ons op</span>
            <ul class="social-links">
                <li>
                    <a href="https://www.facebook.com/groups/186452575523311/"><img src="./img/fb.png" alt="Facebook"></a>
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


</body>
			<?php include('includes/checktheban.php'); ?>
</html>
