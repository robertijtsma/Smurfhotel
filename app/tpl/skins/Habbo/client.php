<?php
    if(!isset($_SESSION['user']['username'])){
        header('Location: index');
        exit();
    }

?>
<script language="JavaScript">
    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
           //alert('No F-12');
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
    document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
			<script type="text/javascript"> 
		var habboName = "{username}";
		var habboReqPath = "{url}";
		var habboStaticFilePath = "{url}/web-gallery";
		var habboPartner = "";
		var habboDefaultClientPopupUrl = "{url}/client";
		window.name = "ClientWndw";
		if (typeof HabboClient != "undefined") { HabboClient.windowName = "ClientWndw"; }
		
	</script> 
<head>

</head>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Smurf :: Client</title>
        <link rel="stylesheet" href="{url}/app/tpl/skins/habbo/styles/client.css" type="text/css">
        
<link rel="stylesheet" type="text/css" href="https://smurfhotel.nl/client/style5.css" />
<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.1.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.js" type="text/javascript"></script>
<script src="https://smurfhotel.nl/client/script22.js"></script>
<script src="https://smurfhotel.nl/client/flashclient.js?rldasd" type="text/javascript"></script>
<script src="https://smurfhotel.nl/client/websocket.js" type="text/javascript"></script>
<script src="https://smurfhotel.nl/client/flash_detect_min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
<link href="https://smurfhotel.nl/client/reset.css" rel="stylesheet" type="text/css" />
<link href="https://smurfhotel.nl/client/tipped.css" rel="stylesheet" type="text/css" />
</head>
		
		<div id="client-ui">
		<div id="client" style='position:absolute; left:0; right:0; top:0; bottom:0; overflow:hidden; height:100%; width:100%;'></div>
        <script type="text/javascript" src="{url}/app/tpl/skins/habbo/js/swfobject.js"></script>
        <script type="text/javascript">
		
			var dfhfgfghfd = "https://"
			var dreterye = "smurf"
			var rtutrurturtur = "hotel"
			var rhtrhtfhg = ".nl"
			var erteyerya = "/r63/"
			var erteryryer = "SmurfOfficial.swf"
            var flashvars =
            {
                "%63%6c%69%65%6e%74%2e%73%74%61%72%74%69%6e%67" : "%48%65%79%21%20%53%6d%75%72%66%20%69%73%20%61%61%6e%20%68%65%74%20%6c%61%64%65%6e%2e%2e%2e", 
                "%63%6c%69%65%6e%74%2e%61%6c%6c%6f%77%2e%63%72%6f%73%73%2e%64%6f%6d%61%69%6e" : "%31", 
                "'%63%6c%69%65%6e%74%2e%6e%6f%74%69%66%79%2e%63%72%6f%73%73%2e%64%6f%6d%61%69%6e" : "%30", 
                "%63%6f%6e%6e%65%63%74%69%6f%6e%2e%69%6e%66%6f%2e%68%6f%73%74" : "%35%31%2e%33%38%2e%32%33%37%2e%37%37", 
                "%63%6f%6e%6e%65%63%74%69%6f%6e%2e%69%6e%66%6f%2e%70%6f%72%74" : "%32%35%30%30%30", 
                "%73%69%74%65%2e%75%72%6c" : "%68%74%74%70%73%3a%2f%2f%73%6d%75%72%66%68%6f%74%65%6c%2e%6e%6c", 
                "%75%72%6c%2e%70%72%65%66%69%78" : "%68%74%74%70%73%3a%2f%2f%73%6d%75%72%66%68%6f%74%65%6c%2e%6e%6c", 
                "%63%6c%69%65%6e%74%2e%72%65%6c%6f%61%64%2e%75%72%6c" : "%68%74%74%70%73%3a%2f%2f%73%6d%75%72%66%68%6f%74%65%6c%2e%6e%6c%2f%63%6c%69%65%6e%74", 
                "%63%6c%69%65%6e%74%2e%66%61%74%61%6c%2e%65%72%72%6f%72%2e%75%72%6c" : "%68%74%74%70%73%3a%2f%2f%73%6d%75%72%66%68%6f%74%65%6c%2e%6e%6c%2f%6d%65", 
                "%63%6c%69%65%6e%74%2e%63%6f%6e%6e%65%63%74%69%6f%6e%2e%66%61%69%6c%65%64%2e%75%72%6c" : "%68%74%74%70%73%3a%2f%2f%73%6d%75%72%66%68%6f%74%65%6c%2e%6e%6c%2f%6d%65", 
                "%65%78%74%65%72%6e%61%6c%2e%76%61%72%69%61%62%6c%65%73%2e%74%78%74" : "%68%74%74%70%73%3a%2f%2f%73%6d%75%72%66%68%6f%74%65%6c%2e%6e%6c%2f%72%36%33%2f%65%78%74%65%72%6e%61%6c%5f%76%61%72%69%61%62%6c%65%73%2e%70%68%70",
                "%65%78%74%65%72%6e%61%6c%2e%74%65%78%74%73%2e%74%78%74" : "%68%74%74%70%73%3a%2f%2f%73%6d%75%72%66%68%6f%74%65%6c%2e%6e%6c%2f%72%36%33%2f%65%78%74%65%72%6e%61%6c%5f%74%65%78%74%73%2e%70%68%70", 
                "%70%72%6f%64%75%63%74%64%61%74%61%2e%6c%6f%61%64%2e%75%72%6c" : "%68%74%74%70%73%3a%2f%2f%73%6d%75%72%66%68%6f%74%65%6c%2e%6e%6c%2f%72%36%33%2f%70%72%6f%64%75%63%74%64%61%74%61%2e%74%78%74", 
                "%66%75%72%6e%69%64%61%74%61%2e%6c%6f%61%64%2e%75%72%6c" : "%68%74%74%70%73%3a%2f%2f%73%6d%75%72%66%68%6f%74%65%6c%2e%6e%6c%2f%72%36%33%2f%66%75%72%6e%69%64%61%74%61%2e%74%78%74",  
                "%75%73%65%2e%73%73%6f%2e%74%69%63%6b%65%74" : "%31", 
                "%73%73%6f%2e%74%69%63%6b%65%74" : "{sso}", 
                "%70%72%6f%63%65%73%73%6c%6f%67%2e%65%6e%61%62%6c%65%64" : "%30", 
                "%66%6c%61%73%68%2e%63%6c%69%65%6e%74%2e%75%72%6c" : "%68%74%74%70%73%3a%2f%2f%73%6d%75%72%66%68%6f%74%65%6c%2e%6e%6c%2f%72%36%33", 
                "%66%6c%61%73%68%2e%63%6c%69%65%6e%74%2e%6f%72%69%67%69%6e" : "%70%6f%70%75%70" 
            };
            var params =
            {
                "base" : "https://smurfhotel.nl/r63/",
                "allowScriptAccess" : "always",
                "menu" : "false"                
            };
            swfobject.embedSWF( dfhfgfghfd + dreterye + rtutrurturtur + rhtrhtfhg + erteyerya + erteryryer, "client", "100%", "100%", "10.0.0", "lik mn pik", flashvars, params, null);
			
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
			window.location.href = "https://smurfhotel.nl/noflash";
		  }
		  
		  
        </script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.9.0.js"></script>
        <script type="text/javascript">
        $(document).ready(function(e) {
            $.ajaxSetup({
                cache:true
            });
            setInterval(function() {
                $('#onlinecounter').load('app/tpl/skins/{skin}/onlinecounter.php');
            }, 2000);
            $( "#onlinecounter").click(function() {
              $('#onlinecounter').load('app/tpl/skins/{skin}/onlinecounter.php');
            });

        });
		$('#loguit').click(function(){
   window.location.href='http://smurfhotel.nl/logout';
});
        </script>
		</div>
<div id="area_player">
<div id="player" class="draggable ui-widget-content ui-draggable" style="left: 45%; position: relative;">
<div class="player_min">
<div class="guy"></div>
<div class="handle tip ui-draggable-handle" title="Bewegen"></div>
<div class="open o-c tip" title="Uitklappen"></div>
</div>

<div class="close o-c tip" title="Minimaliseren"></div>
<div class="handle tip ui-draggable-handle" title="Beweeg"></div>
<div class="dev tip" title="Refresh radio" style="cursor:pointer" onclick="UpdateAudio()"></div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
<style type="text/css">
        #onlinecounter {
          color: white;
          font-family: Verdana;
        }
        #onlineCount:hover {
          cursor: pointer;
          -moz-transition: all 1s ease-in;
          /* WebKit */
          -webkit-transition: all 1s ease-in;
          /* Opera */
          -o-transition: all 1s ease-in;
          /* Standard */
          transition: all 1s ease-in;
        }
		#bar {
position: absolute;
right: 200px;
top: 12px;
max-height: 35px;
min-widht: 200px;
}

        </style> 
		
    </head>
    
    <body>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>

<script>
    $(document).ready(function(){
   setTimeout(function(){
  $("div.ads").fadeOut(50000, function () {
  $("div.ads").remove();
      });
   
}, 8000);
 });
  </script>
<div class="ads" style="padding-top: 21px; height: 115px; width: 740px; position: absolute; left: 50%; z-index: 9999; margin-left: -370px; margin-right: auto; overflow: hidden; opacity: 0.6286; background-image: url(https://i.imgur.com/Ox6jtXp.png);">
<br>
<script type="text/javascript">
    google_ad_client = "ca-pub-2015133537650223";
    google_ad_slot = "8458093395";
    google_ad_width = 728;
    google_ad_height = 90;

</div>

<script type="text/javascript">
    google_ad_client = "ca-pub-2015133537650223";
    google_ad_slot = "8458093395";
    google_ad_width = 160;
    google_ad_height = 600;
</script>
<!-- client -->

</div>
 
        <div id="client"></div>
		
		<div id="onlineCount"></div>
		<script>
    $(document).ready(function(){
   setTimeout(function(){
  $("div.ads").fadeOut(30000, function () {
  $("div.ads").remove();
      });
   
}, 820);
 });
</script>

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

					
    			<?php include('includes/checktheban.php'); ?>
    </body>
</html>

