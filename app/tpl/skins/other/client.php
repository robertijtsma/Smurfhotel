
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelname} - Client</title>
		<link rel="shortcut icon" href="{url}/App/Tpl/Skins/Custom-habbo/Images/favicon.ico" type="image/vnd.microsoft.icon"/>
        
        <link rel="stylesheet" href="{url}/app/tpl/skins/Custom-habbo/styles/client.css?53465834" type="text/css">
        
        <script type="text/javascript" src="{url}/app/tpl/skins/Custom-habbo/js/swfobject.js"></script>
        <script type="text/javascript">
            var BaseUrl = "{url}/r63";
            var flashvars =
            {
                "client.starting" : "It is {online} players online! {hotelname} is starting.", 
                "client.allow.cross.domain" : "1", 
                "client.notify.cross.domain" : "0", 
                "connection.info.host" : "51.38.189.94", 
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
                "base" : BaseUrl + "/",
                "allowScriptAccess" : "always",
                "menu" : "false"                
            };
            swfobject.embedSWF(BaseUrl + "/Habbo10.swf", "client", "100%", "100%", "10.0.0", "{url}/r63/expressInstall.swf", flashvars, params, null);
        </script>
    </head>
    
    <body>
    
	
	</div>
        <div id="client"></div>
    
    </body>
</html>