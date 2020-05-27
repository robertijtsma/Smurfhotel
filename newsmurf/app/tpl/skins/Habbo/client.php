<!DOCTYPE html> 

<html lang="en"> 

    <head> 

        <meta http-equiv="content-type" content="text/html; charset=utf-8"> 

        <title>{hotelName} - Client</title> 

      

        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/client.css" type="text/css"> 

      

        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/swfobject.js"></script> 

        <script type="text/javascript"> 

            var BaseUrl = "{swf_folder}"; 

            var flashvars = 

            { 

                "client.starting" : "Please wait, the hotel is loading", 

                "client.allow.cross.domain" : "1", 

                "client.notify.cross.domain" : "0", 

                "connection.info.host" : "{server_ip}", 

                "connection.info.port" : "{server_port}", 

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

            swfobject.embedSWF(BaseUrl + "/Habbo10.swf", "client", "100%", "100%", "10.0.0", "{swf_folder}/expressInstall.swf", flashvars, params, null); 

        </script> 

    </head> 

  

    <body> 

  

        <div id="client"></div> 

  

    </body> 

</html>  