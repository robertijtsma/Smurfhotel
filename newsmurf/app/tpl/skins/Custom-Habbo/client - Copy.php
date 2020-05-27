<?php
    if(!isset($_SESSION['user']['username'])){
        header('Location: index');
        exit();
    }

?>
<meta name="description" content="Pepper Hotel is een virtuele wereld waar jij vrienden kunt maken en mooie kamers kunt bouwen, met onze volle shop kan jij de mooiste kamer maken van heel Pepper Hotel. Pepper Hotel maak vrienden en beleef het plezier!" />
<meta name="keywords" content="Pepper, Pepperhotel, Pepper hotel, pepper, pepper hotel, pepperhotel, retro, staff, credits, virtueel, wereld, gratis, retronet, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets , room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer, vrienden, online spel, spel, meubels, hotel, vrienden, bouwen" />
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
</script>
	<script src="jquery-latest.js" type="text/javascript"></script>
	<script src="jquery-ui.js" type="text/javascript"></script>
	<script src="flashclient.js"></script>
	<script src="flash_detect_min.js"></script>


<?php

$ua = $_SERVER["HTTP_USER_AGENT"];

$msie = strpos($ua, 'MSIE') ? true : false; 
// All Internet Explorer

// Wijzig hier alle links, alles word automatisch decoded.
	$variables = $_CONFIG['hotel']['external_vars'];
	$base = $_CONFIG['hotel']['swf_folder'];
    $texts = $_CONFIG['hotel']['external_texts'];
	$product = $_CONFIG['hotel']['product_data'];
	$furni = $_CONFIG['hotel']['furni_data'];
	$connection = $_CONFIG['hotel']['server_ip'];

function clean($txt){ return stripslashes(trim($txt)); }
function X($txt){ return mysql_real_escape_string(clean($txt)); }

if(isset($_SERVER['HTTP_CF_CONNECTING_IP']))
	$_SERVER['REMOTE_ADDR'] = X($_SERVER['HTTP_CF_CONNECTING_IP']);

if(isset($_SERVER['HTTP_CLIENT_IP']))
	$_SERVER['REMOTE_ADDR'] = X($_SERVER['HTTP_CLIENT_IP']);

if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	$_SERVER['REMOTE_ADDR'] = X($_SERVER['HTTP_X_FORWARDED_FOR']);

?>
  <script type="text/javascript">

  <!--

  var keyStr = "ABCDEFGHIJKLMNOP" +
               "QRSTUVWXYZabcdef" +
               "ghijklmnopqrstuv" +
               "wxyz0123456789+/" +
               "=";

 

  function Prive(input) {
     var output = "";
     var chr1, chr2, chr3 = "";
     var enc1, enc2, enc3, enc4 = "";
     var i = 0;

     input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
 
     do {
        enc1 = keyStr.indexOf(input.charAt(i++));
        enc2 = keyStr.indexOf(input.charAt(i++));
        enc3 = keyStr.indexOf(input.charAt(i++));
        enc4 = keyStr.indexOf(input.charAt(i++));
        chr1 = (enc1 << 2) | (enc2 >> 4);
        chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
        chr3 = ((enc3 & 3) << 6) | enc4;

        output = output + String.fromCharCode(chr1);

        if (enc3 != 64) {
           output = output + String.fromCharCode(chr2);
        }

        if (enc4 != 64) {
           output = output + String.fromCharCode(chr3);
        }

        chr1 = chr2 = chr3 = "";
        enc1 = enc2 = enc3 = enc4 = "";

     } while (i < input.length);

     return unescape(output);
  }

 

  //--></script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
			<script type="text/javascript"> 
		var habboName = "{username}";
		var habboReqPath = "{url}";
		var habboStaticFilePath = "{url}/web-gallery";
		var habboImagerUrl = "http://www.habbo.nl/habbo-imaging/";
		var habboPartner = "";
		var habboDefaultClientPopupUrl = "{url}/client";
		window.name = "ClientWndw";
		if (typeof HabboClient != "undefined") { HabboClient.windowName = "ClientWndw"; }
	</script> 
        <title>{hotelname} - Client</title>
		<link rel="shortcut icon" href="{url}/App/Tpl/Skins/Custom-habbo/Images/favicon.ico" type="image/vnd.microsoft.icon"/>
        
        <link rel="stylesheet" href="{url}/app/tpl/skins/Custom-habbo/styles/client.css?53465834" type="text/css">
        
        <script type="text/javascript" src="{url}/app/tpl/skins/Custom-habbo/js/swfobject.js"></script>
        <script type="text/javascript">
		

            var BaseUrl = "{url}/r63";
            var flashvars =
            {
                "client.starting" : "Hey {username}! Smurf is aan het laden...", 
                "client.allow.cross.domain" : "1", 
                "client.notify.cross.domain" : "0", 
            "connection.info.host" : Prive("<?php echo base64_encode($connection); ?>"), 
                "connection.info.port" : "30000", 
                "site.url" : "{url}", 
                "url.prefix" : "{url}", 
                "client.reload.url" : "{url}/client", 
                "client.fatal.error.url" : "{url}/me", 
                "client.connection.failed.url" : "{url}/me", 
                "external.variables.txt" : "{external_vars}", 
                "external.texts.txt" : "{external_texts}", 
                "productdata.load.url" : "{product_data}", 
                "furnidata.load.url" : "{furni_data}",  
                "use.sso.ticket" : "1", 
                "sso.ticket" : "{sso}", 
                "processlog.enabled" : "0", 
                "flash.client.url" : BaseUrl, 
                "flash.client.origin" : "popup" 
            };
            var params =
            {
                "base" : "https://smurfhotel.nl/r63/",
                "allowScriptAccess" : "always",
                "menu" : "false"                
            };
            swfobject.embedSWF(BaseUrl + "/Habbo10.swf", "client", "100%", "100%", "10.0.0", "{url}/r63/expressInstall.swf", flashvars, params, null);
        </script>
<body id="client" class="flashclient">
<div id="overlay"></div>
<img src="{url}/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="overlay"></div>
<div id="client-ui" >
    <div id="flash-wrapper">
    <div id="flash-container">
        <div id="content" style="width: 400px; margin: 20px auto 0 auto; display: none">
<script>
if (swfobject.hasFlashPlayerVersion("7.0.0")) {
    // User has flash
} else {
    // User does not have flash
    window.location="noflash.php";
}>
</script>
         
</div>
    <div style="display: none">

<div id="habboCountUpdateTarget">
{status}
</div>
	<script language="JavaScript" type="text/javascript">
		setTimeout(function() {
			HabboCounter.init(600);
		}, 20000);
	</script>
    </div>
    <script type="text/javascript">
        RightClick.init("flash-wrapper", "flash-container");
        if (window.opener && window.opener != window && typeof window.opener.location.href != "undefined") {
            window.opener.location.replace(window.opener.location.href);
        }
        $(document.body).addClassName("js");
       	HabboClient.startPingListener();
    </script>

<script type="text/javascript">
    HabboView.run();
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15697942-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>