
<html lang="nl">
<head>
<title>{hotelname} Hotel: Welkom</title>
<link rel="shortcut icon" type="image/x-icon" href="http://coldgames.nl/templates/default/assets/images/favicon.png"/>
<link type="text/css" rel="stylesheet" href="{url}/app/tpl/skins/Habbo/includes/cssbin/core.css"/>
<link type="text/css" rel="stylesheet" href="{url}/app/tpl/skins/Habbo/includes/cssbin/font-awesome.min.css"/>
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script type="text/javascript" src="{url}/app/tpl/skins/Habbo/includes/jquery/pace.min.js"></script>
<script type="text/javascript" src="{url}/app/tpl/skins/Habbo/includes/jquery/jquery.min.js"></script>
<script type="text/javascript" src="{url}/app/tpl/skins/Habbo/includes/jquery/core.js"></script>
<script type="text/javascript" src="{url}/app/tpl/skins/Habbo/includes/jquery/slider.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5107565542247651",
    enable_page_level_ads: true
  });
</script>
</head>
<body style="overflow-y: scroll">
<div class="insignis-bg-left"></div>
<div class="insignis-bg-right"></div>
<header>
<wrapper>
<logo></logo>
<div class="insignis__header--online-content">
<div class="insignis__header--logo-center">
<div class="insignis__header--logo-online">
<div class="ring-container">
<div class="ringring"></div>
<div class="circle"></div>
</div>
Er zijn <b>{online}</b> {hotelname}'s in het hotel
<div class="pijl"></div>
</div>
</div>
</div>
 
<feed-content>
<link type="text/css" rel="stylesheet" href="{url}/app/tpl/skins/Habbo/includes/cssbin/core.css"/>
<style>body{overflow:hidden;background-color:white;}</style>
<feed-item class="animated fadeIn feed--live">
<avatar-info>
</avatar-info>
</feed-item>
<feed-item class="animated fadeIn feed--live">
<avatar-info>
</avatar-info>
</feed-item>
<feed-item class="animated fadeIn feed--live">
<avatar-info>
</avatar-info>
</feed-item>
</feed-content>
 
</wrapper>
</header>
<div class="content--menu">
<wrapper>
<wrapper-menu id="wrapper-menu">
<div class="welkom-terug-x-avatar">
<img style="margin-top: 10px" src="{url}/app/tpl/skins/Habbo/includes/imgbin/index/receptionist.png">
</div>
<div class="welkom-terug-x-tekst">
Welkom op <strong>{hotelname}</strong>. Maak snel een account aan! </div>
<div class="menu--rechts">
<a href="/register"><button type="button" class="btn ripple-effect btn-info btn-lg menu--knop"><i class="fa fa-angle-right"></i> Maak een gratis account</button></a>
</div>
</wrapper-menu>
</wrapper>
</div>
<a alt="Made by Qarz" target="_blank" href="http://furkanistan.nl" class="insignis__watermerk"><img src="{url}/app/tpl/skins/Habbo/includes/imgbin/logo/insignis.png"></span></a>
<a href="/" class="naar-boven"><i class="fa fa-angle-up"></i> Ga terug naar boven</a>
<div class="content__wrapper">
<?php if(isset($template->form->error)) { echo '<div id="foutmelding" class="content__melding content__melding--foutmelding" style="display: block;">'.$template->form->error.'</div>'; } ?>
<div class="links">
<div class="content__nieuws--slider">
<div class="carousel dissolve">
<div class="previews">
<div class="preview">
<div class="img" style=" background-image: background-position: center center; url("https://smurfhotel.nl/app/tpl/skins/Habbo/includes/imgbin/index/maxresdefault.jpg");">
<a href="/register"><button type="button" class="btn ripple-effect btn-info btn-lg menu--knop"><i class="fa fa-angle-right"></i> registreer en wordt een {hotelname}!</button></a>
<div class="content__nieuws--meer">
<div class="content__nieuws--auteur">
<div class="content__nieuws--auteur-img">
<img style="margin-top: -60px" class="content__nieuws--auteur-avatar" src="https://habbo.com/habbo-imaging/avatarimage?figure=ch-3222-92.hd-207-1390.lg-3058-1331.sh-3089-1331.hr-3322-37.fa-3346-67.cc-3075-1331&direction=2&head_direction=2&gesture=sml&size=n&headonly=0&action=wav">
</div>
Eigenaar van {hotelname}Hotel: <b>Qarz</b></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="rechts">
<div style="height: 215px; margin-top: 5px" class="content__box wFull">
<div class="titel titel-grijs">Log in</div>
<form action="index" method="post">
<input type="text" style="margin-top: 20px;width:90%" class="login-input gebruikersnaam" id="username" name="log_username" placeholder="Gebruikersnaam.." autocomplete="off" required autofocus />
<input type="password" id="password" class="login-input wachtwoord" style="width:90%" name="log_password" type="password" placeholder="Wachtwoord.." autocomplete="off" required />
<br>
<a href="/#"><button style="margin-left: 20px; margin-top: -5px;" type="button" class="btn ripple-effect btn-danger btn-lg menu--knop"> Wachtwoord vergeten?</button></a>
<input style="float: right;margin-top: -5px;margin-right: 21px; width: 136px" class="btn ripple-effect btn-info btn-lg menu--knop" name="login" type="submit" value="Log in">
</form>
</div>
</div>
</div>
<div class="content__wrapper">
<div class="insignis__promos">
<div class="insignis__content--index-box">
<div class="insignis__content--index-img1"></div>
<span>{hotelname} is een gratis virtuele wereld waar je kunt chatten, lopen, vrienden kunt maken en ontmoeten. Ook is het mogelijk om je eigen kamer in te richten.</span>
</div>
<div class="insignis__content--index-box">
<div class="insignis__content--index-img2"></div>
<span>In {hotelname} maak je nieuwe vrienden. Chat met ze, speel een potje voetbal of help mee met het bouwen van een kamer. Het kan allemaal in {hotelname}!</span>
</div>
<div style="margin-right: 0;float: right;width: 350px;margin-right: -10px;" class="insignis__content--index-box">
<div class="insignis__content--index-img3"></div>
<span>Bouw je eigen kamers, ruil je spullen, en doe mee aan fantastische competities! Word een van de rijkste in het hotel, doe mee met de rest en maak plezier.</span>
</div>
</div>
</div>
<div class="content__wrapper">
<div style="width: calc(100% - 6px)" class="content__box wFull footer">
&copy; {hotelname} Hotel 2015-2017. Alle rechten voorbehouden.
<span style="float: right; padding-right: 10px;"> Made by Moncler & Qarz</span>
</div>
<div style="width: calc(100% - 6px); height: 100px; padding-top: 15px;" class="content__box wFull footer">
<center>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- http://coldgames.nl -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-5107565542247651"
     data-ad-slot="6756259321"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>
</div>
</div>
</div>
</body>
</html>
