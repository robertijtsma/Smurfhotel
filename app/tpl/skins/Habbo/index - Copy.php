<!DOCTYPE html>
<html lang="nl-be"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Smurf - Waar alle Smurfjes thuis komen!</title>
		<link rel="icon" href="{url}/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="{url}/css/style.css" type="text/css">
		<link rel="stylesheet" href="{url}/css/tipped.css" type="text/css">
		
	</head>
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
		<div id="menu" class="cf">
			<div class="logo"></div>
			<header>
				<div class="online">{online} Smurfen online</div>
				<ul class="right">
					<li><i class="fa fa-question" aria-hidden="true"></i> <a href="mailto:contact@smurfhotel.nl">contact@smurfhotel.nl<script data-cfhash="f9e31" type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
					<li><i class="fa fa-twitter" aria-hidden="true"></i> <a href="https://twitter.com/">Onze Twitter</a></li>
					<li><i class="fa fa-facebook" aria-hidden="true"></i> <a href="https://www.facebook.com/">Onze Facebook</a></li>
					
					
				
					<button onclick="location.href = &#39;register&#39;;" class="register signup">Maak een account!</button>
		

			</ul>
			</header>
			<nav>
				<ul>
					<li class="active signin"><a href="{url}/">Home</a></li>
					<li class="active signin"><a href="{url}/news">Nieuws</a></li>
					<li class="active signin"><a href="{url}/staff">Management Team</a></li>
					<li class="active signin"><a href="{url}/rules">Regels</a></li>
				</ul>
			</nav>
		</div>
		<div class="white">
			<div class="content">
				<form id="login" class="active" action="{url}/index#" method="post">

					<h2>Welkom op Smurf Hotel!</h2>
					<p>Waar alle Smurfjes zich thuis voelen!</p>
					<div class="title cf">
						<div class="left">Log in</div>
						<div class="right">Speel nu!</div>
					</div>
						
					<input type="text" id="credentials-email" name="log_username" placeholder="Username" "="">
					<div class="imager" id="imager" style="background-image: url(/app/tpl/skins/{skin}/images/index-img/ghost.png);"></div>
					<input type="password" id="credentials-password" name="log_password" placeholder="Password">
					<div class="forgot_password" id="open_forgot">Wachtwoord vergeten?</div>
					<div class="cf"></div>
					<div class="cf">
						<button class="log_in" name="login" id="doLogin">Log in!</button>
					</div></form>
					<div class="sign_up">Nieuw op Smurf? <b><a href="{url}/register" class="signup">Registreer je nu!</a></b></div>
				
				
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