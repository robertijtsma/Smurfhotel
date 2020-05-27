
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
		var habboImagerUrl = "https://www.habbo.nl/habbo-imaging/";
		var habboPartner = "";
		var habboDefaultClientPopupUrl = "{url}/client";
		window.name = "ClientWndw";
		if (typeof HabboClient != "undefined") { HabboClient.windowName = "ClientWndw"; }
		
	</script> 

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} :: Client</title>
        <link rel="stylesheet" href="{url}/app/tpl/skins/habbo/styles/client.css" type="text/css">
        
        <script type="text/javascript" src="{url}/app/tpl/skins/habbo/js/swfobject.js"></script>
        <script type="text/javascript">
		

            var BaseUrl = "https://smurfhotel.nl/r63";
            var flashvars =
            {
                "client.starting" : "Hey {username}! Smurf is aan het laden...", 
                "client.allow.cross.domain" : "1", 
                "client.notify.cross.domain" : "0", 
            "connection.info.host" : "%35%31%2e%33%38%2e%32%33%37%2e%37%37", 
                "connection.info.port" : "%32%35%30%30%30", 
                "site.url" : "{url}", 
                "url.prefix" : "{url}", 
                "client.reload.url" : "{url}/client", 
                "client.fatal.error.url" : "{url}/me", 
                "client.connection.failed.url" : "{url}/me", 
                "external.variables.txt" : "https://smurfhotel.nl/r63/external_variables.php",
                "external.texts.txt" : "https://smurfhotel.nl/r63/external_texts.php", 
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
            swfobject.embedSWF(BaseUrl + "/SmurfOfficial.swf", "client", "100%", "100%", "10.0.0", "https://smurfhotel.nl/expressInstall.swf", flashvars, params, null);
        </script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.9.0.js"></script>
        <script type="text/javascript">
        $(document).ready(function(e) {
            $.ajaxSetup({
                cache:true
            });
            setInterval(function() {
                $('#onlineCount').load('app/tpl/skins/{skin}/onlinecounter.php');
            }, 2000);
            $( "#onlineCount").click(function() {
              $('#onlineCount').load('app/tpl/skins/{skin}/onlinecounter.php');
            });

        });
        </script>
<style type="text/css">
        #onlineCount {
          position: absolute;
          background-color: #585858;
          z-index: 1;
          color: white;
          top: 0px;
          right: 211px;
          font-family: Verdana;
          padding: 3px;
        }
        #onlineCount:hover {
          background-color: #757575;
          cursor: pointer;
          -moz-transition: all 1s ease-in;
          /* WebKit */
          -webkit-transition: all 1s ease-in;
          /* Opera */
          -o-transition: all 1s ease-in;
          /* Standard */
          transition: all 1s ease-in;
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
</script>
<!-- normal -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

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
    google_ad_client = "ca-pub-2015133537650223";
    google_ad_slot = "8458093395";
    google_ad_width = 160;
    google_ad_height = 600;
</script>
<!-- client -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
 
        <div id="client"></div>
		<div id="onlineCount">Aantal Smurfen online is aan het laden..!</div>
    			<?php include('includes/checktheban.php'); ?>
    </body>
</html>