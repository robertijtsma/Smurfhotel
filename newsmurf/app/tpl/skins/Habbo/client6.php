
<?php
    if(!isset($_SESSION['user']['username'])){
        header('Location: index');
        exit();
    }

?>
<meta name="description" content="Smurf Hotel is een virtuele wereld waar jij vrienden kunt maken en mooie kamers kunt bouwen, met onze volle shop kan jij de mooiste kamer maken van heel Smurf Hotel. Smurf Hotel maak vrienden en beleef het plezier!" />
<meta name="keywords" content="Smurf, Smurfhotel, Smurf Hotel, Smurf, Smurf Hotel, Smurfhotel, retro, staff, credits, virtueel, wereld, gratis, retronet, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets , room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer, vrienden, online spel, spel, meubels, hotel, vrienden, bouwen" />

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
				"connection.info.host" : "{server_ip}", 
                "connection.info.port" : "30000", 
                "site.url" : "{url}", 
                "url.prefix" : "{url}", 
                "client.reload.url" : "{url}/client", 
                "client.fatal.error.url" : "{url}/me", 
                "client.connection.failed.url" : "{url}/me", 
                "external.variables.txt" : "https://smurfhotel.nl/r63/external_variables.txt",
                "external.texts.txt" : "https://smurfhotel.nl/r63/external_flash_texts.txt", 
                "productdata.load.url" : "https://smurfhotel.nl/r63/productdata.txt", 
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
