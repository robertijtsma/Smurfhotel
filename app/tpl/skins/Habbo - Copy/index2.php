<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Triff neue Freunde</title>  
        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/front.css" type="text/css">
        
         <script type="text/javascript">
            var pic1 = new Image();
			pic1.src = '/app/tpl/skins/Habbo/images/frontpage/image.png';
			var pic2 = new Image();
			pic2.src = '/app/tpl/skins/Habbo/images/frontpage/image2.png';
			var pic3 = new Image();
			pic3.src = '/app/tpl/skins/Habbo/images/frontpage/image.png';
			
			var bildoben = 0;
			var bildunten = 1;
			var op = 1;
			var op_ie = 100;
			
			var diebilder = new Array('/app/tpl/skins/Habbo/images/frontpage/image.png','/app/tpl/skins/Habbo/images/frontpage/image2.png','/app/tpl/skins/Habbo/images/frontpage/image3.png','/app/tpl/skins/Habbo/images/frontpage/image2.png');
			var lang = diebilder.length;
			
			function slider() {
				var rahmen1 = document.getElementById('pic1');
				var rahmen2 = document.getElementById('pic2');
								
				rahmen1.src = diebilder[bildoben];
				rahmen2.src = diebilder[bildunten];
				rahmen1.style.opacity = '1';
				rahmen1.style.filter = 'alpha(opacity=100)';
				
				bildoben++;
				bildunten++;
				if((bildoben+1) == lang) {
					bildunten = 0;
				}	
				if(bildoben == lang && bildunten == 1) {
					bildoben = 0;
					bildunten = 1;
				}
				window.setTimeout("slidemove()",3000);
			}
			function slidemove() {
				if(op > 0) {
					op = op - 0.1;
					op_ie = op_ie - 10;
					document.getElementById('pic1').style.opacity = op;
					document.getElementById('pic1').style.filter = 'alpha(opacity=' + op_ie + ')';
					window.setTimeout("slidemove()",100);
				} else {
					op = 1;
					op_ie = 100;
					window.setTimeout("slider()",0);
				}
			}
			
        </script>
<link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/design.css" type="text/css">
</head>
    
<body onload='slider()'>
 <div class='header'>
  <div class='circle'>{online}</div>
  <div class='headerimage'></div>
  <div class='logo'></div>
 </div>
 <div class='naviarea'>
  <div class='navi'>
	<h><a href="{url}/">Startseite</a></h>
	<h><a href="{url}/community">Community</a></h>
	<h><a href="{url}/staff">Mitarbeiter</a></h>
	<a href="{url}/register">
	 <div class='client'>&nbsp;&nbsp;&nbsp;&nbsp;Aanmelden</div>
	</a>
  </div>
 </div>
 <?php if(isset($template->form->error)) { echo '<div class="error">'.$template->form->error.'</div>'; } ?>
<div class='login'>
 <div class='subnaviarea'>
  <div class='subnavi'>
	<form id="loginformitem" name="loginformitem" method="post">
	<div class='loginarea'>Benutzername:<input tabindex="3" type="text" class="login-field" name="log_username" id="login-username" value="" maxlength="48">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Passwort:<input tabindex="4" type="password" class="login-field" name="log_password" id="login-password" maxlength="32">
	<input type="submit" value="Einloggen" name="login"></div>
	</form>
  </div>
 </div>
</div>
 <div class='content'>
  <div class='index'>					
<script type="text/javascript">
                        HabboView.add(function() {
                            LandingPage.init();
                            if (!LandingPage.focusForced) {
                                LandingPage.fieldFocus('login-username');
                            }
                        });
                    </script>
	<div id="imageneu">
	 <img id="pic1" style="position:absolute; z-index:2; opacity:1; filter:alpha(opacity=100);" src="" />
	 <img id="pic2" style="position:absolute; z-index:1; opacity:1; filter:alpha(opacity=100);" src="" />
	</div>
	<a href="{url}/register">
	 <!--<div class='client'>jetzt kostenlos Anmelden <img src="{url}/app/tpl/skins/Habbo/images/client.png"></div>
	</a>-->

  </div>
 </div>
        <div id="footer" >
			<?php include('includes/footer.php'); ?>
        </div>
</html>
