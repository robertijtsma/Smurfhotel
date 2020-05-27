<!DOCTYPE html>
<html lang="nl-be"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Smurf - Waar alle Smurfjes thuis komen!</title>
		<link rel="icon" href="{url}/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="{url}/css/style.css" type="text/css">
		<link rel="stylesheet" href="{url}/css/tipped.css" type="text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <link rel="icon" href="./img/favicon.ico">

    

    <!-- Custom Styling -->
    <link href="./css/habbo-theme3.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/newhabboindex.css" rel="stylesheet">

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

            </div>

        </div>

    </nav>
    <!-- End Navigation -->

</header>

<!-- Sub Navigation -->
<div class="sub-navigation">
    <div class="container">

                        </div>
</div>
<!-- End Sub Navigation -->
	<body class=" pace-done" cz-shortcut-listen="true"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
		<div class="black_overlay" id="forgot_password">
			<div class="box">
				<div class="close close_forgot" id="close_forgot">Annuleer</div>
				<h2>Wachtwoord vergeten?</h2>
				<p>Geen paniek! Vul hieronder uw accountgegevens in en we sturen je<br> een email over hoe je je wachtwoord kan veranderen.</p>
				<div id="forget_alert" class="alert" style="display: none; text-align: center;"></div>
				<h2>Smurf naam</h2>
				<form action="{url}/index#" method="post">
					<input type="email" id="forgot-username" name="" placeholder="Username ID">
					<div class="left">
						<i class="fa fa-check-circle" aria-hidden="true"></i> <a href="{url}/"></a>
						Requesting password reset
					</div>
					<div class="right">
						<button class="green" id="doForgot">Stuur ons een email!</button>
						<button class="close_forgot">Annuleer</button>
					</div>
				</form>
			</div>
		</div>

		<div class="white">
			<div class="content">
				<form id="login" class="active" action="{url}/index#" method="post">

<?php if(isset($template->form->error)) { echo '<div class="error">'.$template->form->error.'</div>'; } ?>
 <div class='content'>
  <div class='registerbg'></div>
  <div class='register'> <form method="post" id="phase-0-form"> 
	<h2>Maak nu je account aan..</h2><br>
	<text><h4>Gebruikersnaam</h4><br>
	<input type="text" id="habbo-name" size="35" value="<?php echo $template->form->reg_username; ?>" name="reg_username" class="text-field" maxlength="32"><br><br>

	<text><h4>E-Mail</h4></text><br>
	<input type="text" id="email" size="35" name="reg_email" value="<?php echo $template->form->reg_email; ?>" class="text-field" maxlength="48"><br><br>

	<text><h4>Wachtwoord</h4></text><br>
	<input type="password" id="password" size="35" name="reg_password" value="" class="password-field" maxlength="32"><br><br>
	<text><h4>Wachtwoord herhalen</h4></text><br>
	<input type="password" id="password2" size="35" name="reg_rep_password" value="" class="password-field" maxlength="32"><br><br>
 	<input type="submit" value="Registreer" name="register">
	</form> 
  </div>
 </div>
				
				
			</div>
			<div class="hotel_view"></div>
			<footer>
				<ul class="cf">
					<li><a href="{url}/faq">FAQ</a></li>
					<li><a href="{url}/tos">Terms and Conditions</a></li>
					<li><a href="{url}/privacy">Privacy declaration</a></li>
					<li><a href="{url}/staff">Contributors</a></li>
				</ul>
				<div class="copyright" style="padding: 1px">
				</div>
			</footer>
		</div>
		<div class="orange">
			<div class="content">
				<div class="umbrella"></div>
				<div id="rabbo" class="active"></div>
				
				<h2>Hoe Smurf werkt...</h2>
				<p>Bezoek kamers, maak vrienden en val op!</p>
				
				
				<div class="room">
					<div class="arrow_top"></div>
					<div class="room_1" id="room_1"></div>
					<div class="room_2 active" id="room_2"></div>
					<div class="room_3 active" id="room_3"></div>
					<div class="furni active" id="furni"></div>
					<div class="friends" id="friends"></div>
					<div id="rabbo" class="active"></div>
					<div id="Hablix" class="active"></div>
					<div class="box_msg" id="box_1">
					
					


						<h3>Maak je eigen Smurf avatar. <img src="{url}/app/tpl/skins/{skin}/css/head_register.png" style="float: right; margin-left: 10px;"></h3>
						<div style="float: right; margin-left: 30px; margin-top: -46px;">
							<img src="{url}/app/tpl/skins/{skin}/css/arrow_user.png">
							<div class="cf"></div>
							<img src="{url}/app/tpl/skins/{skin}/css/user_none.png" style="margin-top: 8px;">
						</div>
						<p>Stijl je Smurf met de gekste modetrends.</p>
						<div class="more">Next: Ondek je eigen community</div>
					</div>
					<div class="box_msg small" id="box_2">
						<h3>Ondek je eigen community<</h3>
						<div style="float: right; margin-left: 20px; margin-top: 10px;">
							<img src="{url}/app/tpl/skins/{skin}/css/decoration.png">
						</div>
						<p>Vind je het leuk om te chatten en te chillen met vrienden? Smurf-groepen, forums en roleplay-communities zijn geweldige dingen.</p>
						<div class="more">Next: Ruil of win zeldzame meubels</div>
					</div>
					<div class="box_msg active" id="box_3">
						<h3>Besparen, ruilen of winnen van zeldzame meubels</h3>
						<div style="float: right; margin-left: 30px; margin-top: 10px;">
							<img src="{url}/app/tpl/skins/{skin}/css/furniture.png">
						</div>
						<p>Creativiteit en individualiteit is welkom bij Smurf! Elke week hebben we veel geweldige wedstrijden waaraan je kunt deelnemen. Van kamers bouwen tot het maken van selfies en competities.</p>
						<div class="more">Next: Create an account!</div>
					</div>
					<div class="box_msg noselect" id="box_4">
						<h3>SPEEL GRATIS, VOOR ALTIJD!</h3>
						<p>Smurf is ​​een gratis spel, dus je kunt kamers verkennen met een enorme wereld, complete speurtochten, chat en win prijzen zonder dat je ooit hoeft te betalen!</p>
						<button onclick="location.href = &#39;register&#39;;" class="green signup">Maak een account!</button>
					</div>
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="{url}/app/tpl/skins/{skin}/css/jquery.min.js.download"></script>
		<script type="text/javascript" src="{url}/app/tpl/skins/{skin}/css/jquery.easing.min.js.download"></script>
		<script type="text/javascript" src="{url}/app/tpl/skins/{skin}/css/pace.min.js.download"></script>
		<script type="text/javascript" src="{url}/app/tpl/skins/{skin}/css/classie.js.download"></script>
		<script type="text/javascript" src="{url}/app/tpl/skins/{skin}/css/selectFx.js.download"></script>
		<script type="text/javascript" src="{url}/app/tpl/skins/{skin}/css/tipped.js.download"></script>
			<script type="text/javascript" src="{url}/app/tpl/skins/{skin}/css/web.js.download"></script>
						<?php include('includes/checktheban.php'); ?>
	</body></html>