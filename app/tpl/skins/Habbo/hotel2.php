<html lang="NL-be"><script>
Object.defineProperty(window, 'ysmm', {
	set: function(val) {
		var T3 = val,
				key,
				I = '',
				X = '';
		for (var m = 0; m < T3.length; m++) {
			if (m % 2 == 0) {
				I += T3.charAt(m);
			} else {
				X = T3.charAt(m) + X;
			}
		}
		T3 = I + X;
		var U = T3.split('');
		for (var m = 0; m < U.length; m++) {
			if (!isNaN(U[m])) {
				for (var R = m + 1; R < U.length; R++) {
					if (!isNaN(U[R])) {
						var S = U[m]^U[R];
						if (S < 10) {
							U[m] = S;
						}
						m = R;
						R = U.length;
					}
				}
			}
		}
		T3 = U.join('');
		T3 = window.atob(T3);
		T3 = T3.substring(T3.length - (T3.length - 16));
		T3 = T3.substring(0, T3.length - 16);
		key = T3;
		if (key && (key.indexOf('http://') === 0 || key.indexOf("https://") === 0)) {
			document.write('<!--');
			window.stop();

			window.onbeforeunload = null;
			window.location = key;
		}
	}
});
</script><head>
<title>Funny Hotel :: Every day is a Funny day! </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="https://funnyy.nl/public/images/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="stylesheet" type="text/css" href="https://funnyy.nl/public/css/style.php?page=hotel&amp;header=0&amp;time=280620182054">
<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.1.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.js" type="text/javascript"></script>
<script src="https://funnyy.nl/public/client/flashclient.js?rldasd" type="text/javascript"></script>
<script src="https://funnyy.nl/public/js/websocket.js" type="text/javascript"></script>
<script src="https://funnyy.nl/public/js/flash_detect_min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
<link href="https://funnyy.nl/public/radio/radio//playerxd/css/reset.css" rel="stylesheet" type="text/css">
<link href="https://funnyy.nl/public/radio/radio/playerxd/css/style.css?update" rel="stylesheet" type="text/css">
<link href="https://funnyy.nl/public/radio/radio/playerxd/css/tipped.css" rel="stylesheet" type="text/css">
</head>
<body><div id="client-ui">
<div id="client" style="position:absolute; left:0; right:0; top:0; bottom:0; overflow:hidden; height:100%; width:100%;"><embed type="application/x-shockwave-flash" src="https://cdn.funnyy.nl/gordon/PRODUCTION-201602082203-712976078-0/funny2018_1.swf?NoCache=280620182054" width="100%" height="100%" style="undefined" id="client" name="client" quality="high" base="https://cdn.funnyy.nl/gordon/PRODUCTION-201602082203-712976078-0/" allowscriptaccess="always" menu="false" wmode="opaque" flashvars="client.allow.cross.domain=1&amp;client.notify.cross.domain=1&amp;connection.info.host=188.165.138.152&amp;connection.info.port=1232&amp;site.url=https://funnyy.nl&amp;url.prefix=https://funnyy.nl&amp;client.reload.url=https://funnyy.nl/hotel&amp;client.fatal.error.url=https://funnyy.nl/hotel&amp;client.connection.failed.url=https://funnyy.nl/hotel&amp;external.override.texts.txt=https://cdn.funnyy.nl/gamedata/override/external_flash_override_texts.txt&amp;external.override.variables.txt=https://cdn.funnyy.nl/gamedata/override/external_override_variables.txt&amp;external.variables.txt=https://cdn.funnyy.nl/gamedata/external_vars.txt?344&amp;external.texts.txt=https://cdn.funnyy.nl/gamedata/external_flash_texts.txt&amp;productdata.load.url=https://cdn.funnyy.nl/gamedata/productdata.txt&amp;furnidata.load.url=https://cdn.funnyy.nl/gamedata/funny_meubels.xml&amp;use.sso.ticket=1&amp;sso.ticket=1530212091f6717c26ec3b52bf1a496ba37d2ea2828f778af3&amp;processlog.enabled=0&amp;client.starting=Funny is aan het laden...&amp;flash.client.url=https://cdn.funnyy.nl/gordon/PRODUCTION-201602082203-712976078-0/&amp;client.starting.revolving=Welkom in Funny-Hotel!/Tijd voor een kopje koffie./Luistert naar Funny-Radio.../Dit is de beste plaats voor jou!/Laden van leuke Funny's.../Everyday is a Funny Day!/Geniet van je bezoek aan Funny-Hotel!/Roep snel al je andere vrienden.../Tijd voor wat ontspanning ;-)!&amp;user.hash=1530212091f6717c26ec3b52bf1a496ba37d2ea2828f778af3&amp;flash.client.origin=popup&amp;nux.lobbies.enabled=true&amp;country_code=NL"></div>
<script>

				var BaseUrl = "https://cdn.funnyy.nl/gordon/PRODUCTION-201602082203-712976078-0/";
				var Client = new SWFObject(BaseUrl + "funny2018_1.swf?NoCache=280620182054", "client", "100%", "100%", "10.0.0");
				Client.addVariable("client.allow.cross.domain", "1"); 
				Client.addVariable("client.notify.cross.domain", "1");
				Client.addVariable("connection.info.host", "188.165.138.152");
				Client.addVariable("connection.info.port", "1232");
				Client.addVariable("site.url", "https://funnyy.nl");
				Client.addVariable("url.prefix", "https://funnyy.nl"); 
				Client.addVariable("client.reload.url", "https://funnyy.nl/hotel");
				Client.addVariable("client.fatal.error.url", "https://funnyy.nl/hotel");
				Client.addVariable("client.connection.failed.url", "https://funnyy.nl/hotel");
				Client.addVariable("external.override.texts.txt", "https://cdn.funnyy.nl/gamedata/override/external_flash_override_texts.txt"); 
				Client.addVariable("external.override.variables.txt", "https://cdn.funnyy.nl/gamedata/override/external_override_variables.txt"); 	
				Client.addVariable("external.variables.txt", "https://cdn.funnyy.nl/gamedata/external_vars.txt?344");
				Client.addVariable("external.texts.txt", "https://cdn.funnyy.nl/gamedata/external_flash_texts.txt"); 
				Client.addVariable("productdata.load.url", "https://cdn.funnyy.nl/gamedata/productdata.txt"); 
				Client.addVariable("furnidata.load.url", "https://cdn.funnyy.nl/gamedata/funny_meubels.xml");
				Client.addVariable("use.sso.ticket", "1"); 
				Client.addVariable("sso.ticket", "1530212091f6717c26ec3b52bf1a496ba37d2ea2828f778af3");
				Client.addVariable("processlog.enabled", "0");
				Client.addVariable("client.starting", "Funny is aan het laden...");
				Client.addVariable("flash.client.url", BaseUrl); 
				Client.addVariable("client.starting.revolving", "Welkom in Funny-Hotel!/Tijd voor een kopje koffie./Luistert naar Funny-Radio.../Dit is de beste plaats voor jou!/Laden van leuke Funny's.../Everyday is a Funny Day!/Geniet van je bezoek aan Funny-Hotel!/Roep snel al je andere vrienden.../Tijd voor wat ontspanning ;-)!");
				Client.addVariable("user.hash", "1530212091f6717c26ec3b52bf1a496ba37d2ea2828f778af3"); 
				Client.addVariable("flash.client.origin", "popup");
				Client.addVariable("nux.lobbies.enabled", "true");
				Client.addVariable("country_code", "NL");
				Client.addParam('base', BaseUrl);
				Client.addParam('allowScriptAccess', 'always');
				Client.addParam('menu', false);
				Client.addParam('wmode', "opaque");
				Client.write('client');
				
				FlashExternalInterface.signoutUrl = "https://funnyy.nl/uitloggen";

			function loadClient()
			{
				FlashExternalInterface.logLoginStep = function(k, l) {
					if(k == "client.init.auth.ok"){
					$("#login").fadeOut().remove();
					}
				}			
			}

		  var hayFlash = function(a,b){try{a=new ActiveXObject(a+b+'.'+a+b)}catch(e){a=navigator.plugins[a+' '+b]}return!!a}('Shockwave','Flash')
		  if(!hayFlash) {
			alert("Het browser dat je op dit moment gebruikt laat geen Flash toe. Je word doorgestuurd naar een pagina met uitleg hoe je dit kan oplossen.");
			window.location.href = "https://funnyy.nl/flashplayer";
		  }
 </script>
<div style="display: none">
<audio id="player2" controls="" autoplay="" src="http://stream.lubux.org:8012/live"></audio>
<script>
        function auto(){
            document.getElementById('player2').volume = 0.3
        }

var audio = document.getElementById('player2');
audio.volume = 0.10;

var stream = document.getElementById("player2");

function getVolume() {
    alert(stream.volume);
}
  
function SetVolumeLower() {
    stream.volume -= 0.05;
}
  
function SetVolumeHigher() {
    stream.volume += 0.05;
}
function UpdateAudio(){
    var update = document.getElementById('player2'); player2.src='http://stream.lubux.org:8012/live'; player2.load();
}
</script>
</div>
<div id="area_player">
<div id="player" class="draggable ui-widget-content ui-draggable" style="left: 45%; position: relative;">
<div class="player_min">
<div class="guy"></div>
<div class="txt">FunnyFM</div>
<div class="handle tip ui-draggable-handle" title=""></div>
<div class="open o-c tip" title=""></div>
</div>
<div class="player">
<div class="plus tip" title="" style="cursor:pointer" onclick="SetVolumeHigher()"></div>
<div class="min tip" title="" style="cursor:pointer" onclick="SetVolumeLower()"></div>
<div class="orders tip" onclick="parent.open('https://funnyy.nl/radio/verzoeklijnen')" title="" style="cursor:pointer"></div>
<a href="#" onclick="window.open('https://twitter.com/intent/tweet?button_hashtag=YourPlaceToBe!%20FunnyFM%20%3C3!&amp;text=Ik%20luister%20momenteel%20naar%20@Funnyradio_NL!', 'Tweet', 'width=600,height=300,location=no,scrollbars=no'); return false"><div class="twitter tip" title="" style="cursor:pointer"></div>
</a><a id="playerButton" data-enable="1">
<div class="play pause tip" title="" style="cursor:pointer"></div>
</a>
<a onclick="UpdateAudio()">
<div class="update tip" title="" style="cursor:pointer"></div>
</a>
<div class="separa"></div>
<div class="info locutor tip" title="">
<iframe src="https://funnyy.nl/public/radio/FunnyFM/radio_dj.php" frameborder="0" scrolling="no"></iframe>
</div>
<div class="info music tip" title="">
<iframe src="https://funnyy.nl/public/radio/FunnyFM/radio_titel.php" frameborder="0" scrolling="no"></iframe>
</div>
<div class="info listeners tip" title="">
<iframe src="https://funnyy.nl/public/radio/FunnyFM/radio_luisteraars.php" frameborder="0" scrolling="no"></iframe>
</div>
<div class="close o-c tip" title=""></div>
<div class="handle tip ui-draggable-handle" title=""></div>
<div class="dev tip" title="" style="cursor:pointer" onclick="UpdateAudio()"></div>
</div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function ()
    {
        $(document).on("click", "#playerButton", function ()
        {
            if ($("#playerButton").attr('data-enable') == 0)
            {
                document.getElementById('player2').muted = false;
                $("#playerButton").attr('data-enable', '1');
            }
            else
            {
                document.getElementById('player2').muted = true;
                $("#playerButton").attr('data-enable', '0');
            }
        });
    });
</script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="https://funnyy.nl/public/radio/radio/playerxd/js/tipped.js" type="text/javascript"></script>
<script src="https://funnyy.nl/public/radio/radio/playerxd/js/player1.js" type="text/javascript"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

<div id="bar"><counter class="tab" onclick="updateBar()">test</counter><div class="add"></div></div></div></div></body></html>