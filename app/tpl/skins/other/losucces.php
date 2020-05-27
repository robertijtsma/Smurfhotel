<? /*
Copyright &copy; 2013-1014. Trito Hotel Nederland. Trito CMS. Based on RevCMS 
																					 */
																					 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Trito Hotel: Uitgelogd </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="alternate" type="application/rss+xml" title="Habbo Hotel: RSS" href="http://www.habbo.nl/articles/rss.xml" />

<link rel="stylesheet" href="/web-gallery/static/styles/common.css" type="text/css" />
<link rel="stylesheet" href="/web-gallery/static/styles/process.css" type="text/css" />
<script src="/web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="/web-gallery/static/js/common.js" type="text/javascript"></script>
<script src="/web-gallery/static/js/fullcontent.js" type="text/javascript"></script>

<script src="/js/local/nl.js" type="text/javascript"></script>

<script type="text/javascript">
var ad_keywords = "";
var ad_key_value = "";
</script>
<script type="text/javascript">
document.habboLoggedIn = false;
var habboName = null;
var habboId = null;
var habboReqPath = "";
var habboStaticFilePath = "/web-gallery";
var habboImagerUrl = "http://www.habbo.nl/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "http://www.habbo.nl/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "client";
    HabboClient.maximizeWindow = true;
}


</script>

<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

<meta property="fb:app_id" content="162105803517" />

<meta property="og:site_name" content="Habbo Hotel" />
<meta property="og:title" content="Habbo Hotel: Uitgelogd" />
<meta property="og:url" content="http://www.habbo.nl" />
<meta property="og:image" content="http://www.habbo.nl/v2/images/facebook/app_habbo_hotel_image.gif" />
<meta property="og:locale" content="nl_NL" />

<script language="JavaScript" type="text/javascript">
	document.logoutPage = true;
	</script>

<meta name="description" content="Maak vrienden, doe mee en val op!" />
<meta name="keywords" content="habbo hotel, virtueel, wereld, sociaal netwerk, gratis, community, avatar, chat, online, tiener, roleplaying, doe mee, sociaal, groepen, forums, veilig, speel, games, online, vrienden, tieners, zeldzaams, zeldzame meubi, verzamelen, maak, verzamel, kom in contact, meubi, meubeks, huisdieren, kamer inrichten, delen, uitdrukking, badges, hangout, muziek, beroemdheid, VIP-visits, celebs, mmo, mmorpgs, massive multiplayer" />



<!--[if IE 8]>
<link rel="stylesheet" href="/web-gallery/static/styles/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="/web-gallery/static/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="/web-gallery/static/styles/ie6.css" type="text/css" />
<script src="/web-gallery/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="63-BUILD1738 - 31.10.2012 11:17 - nl" />
</head>
<body id="logout" class="process-template">

<div id="overlay"></div>

<div id="change-password-form" style="display: none;">
    <div id="change-password-form-container" class="clearfix">
        <div id="change-password-form-title" class="bottom-border">Wachtwoord vergeten?</div>
        <div id="change-password-form-content" style="display: none;">
            <form method="post" action="https://www.habbo.nl/account/password/identityResetForm" id="forgotten-pw-form">
                <input type="hidden" name="page" value="/account/logout_ok?changePwd=true" />
                <span>Vul hier je e-mailadres van je Habbo account in:</span>
                <div id="email" class="center bottom-border">
                    <input type="text" id="change-password-email-address" name="emailAddress" value="" class="email-address" maxlength="48"/>
                    <div id="change-password-error-container" class="error" style="display: none;">Vul alsjeblieft een werkend e-mailadres in</div>
                </div>
            </form>
            <div class="change-password-buttons">
                <a href="#" id="change-password-cancel-link">Annuleren</a>
                <a href="#" id="change-password-submit-button" class="new-button"><b>Verstuur e-mail</b><i></i></a>
            </div>
        </div>
        <div id="change-password-email-sent-notice" style="display: none;">
            <div class="bottom-border">
                <span>Hey, we hebben zojuist een mail naar je gestuurd met een link waarmee jij je wachtwoord kan resetten. Check nu je mail om te kijken of je hem hebt ontvangen.<br>
<br>
LET OP! Check ook je 'junk' of 'ongewenste mail' inbox!</span>
                <div id="email-sent-container"></div>
            </div>
            <div class="change-password-buttons">
                <a href="#" id="change-password-change-link">Terug</a>
                <a href="#" id="change-password-success-button" class="new-button"><b>Sluiten</b><i></i></a>
            </div>
        </div>
    </div>
    <div id="change-password-form-container-bottom"></div>
</div>

<script type="text/javascript">
HabboView.add( function() {
     ChangePassword.init();


});
</script>


<div id="container">
	<div class="cbb process-template-box clearfix">
		<div id="content" class="wide">
					<div id="header" class="clearfix">
						<h1><a href="http://www.habbo.nl/"></a></h1>
<ul class="stats">
    <li class="stats-online"><span class="stats-fig">{online}</span> {hotelname}'s online</li>
</ul>
					</div>
			<div id="process-content">
	        	<div class="action-confirmation flash-message">
	<div class="rounded">
	You are now sucessfully logged out .
	</div>
</div>

<div style="text-align: center">



        <div style="width:100px; margin: 10px auto"><a href="#" id="logout-ok" class="new-button fill"><b>OK</b><i></i></a></div>




<div id="column1" class="column">
			     		
				

						
					
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

</div>
<div id="column2" class="column">
</div>
</div>

<script type="text/javascript">
document.observe("dom:loaded", function() {

    if (!!$("logout-ok")) {
	    Event.observe('logout-ok', 'click', function(e) {
		    Event.stop(e);
			    document.location.href='{url}';
	    });
    }

    if (!!$("facebook-wall-logout-ok")) {
        Event.observe('facebook-wall-logout-ok', 'click', function(e) {
            Event.stop(e);
            top.location.href = 'http://www.facebook.com/habbonl';
        });
    }

    Cookie.erase("habboclient");
    Cookie.erase("friendlist");

    HabboView.run();
});
</script>
    <script type="text/javascript" src="http://uservoice.com/logout.json"></script>
<div id="footer">
<p class="copyright">Copyright &copy; 2014 {hotelname}. All rights reserved.</p>

</div>		</div>
        </div>
    </div>
</div>



<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-448325-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>    
    <script type="text/javascript">

function onClientOpen() {
    var openHotelLinks = $("enter-hotel").select("a");
    if (openHotelLinks.length == 1) {
        if (timeoutID != null) {
            clearTimeout(timeoutID);
        }
        HabboClient.openOrFocus(openHotelLinks[0]);
    }
    return false;
}
</script>


<!-- HL-15281 -->
<iframe src="http://images.webads.nl/stir/habbo_stir.htm" width=0 height=0 frameborder=no></iframe> 

<!-- Start Quantcast tag -->
<script type="text/javascript">
_qoptions={
qacct:"p-b5UDx6EsiRfMI"
};
</script>
<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
<noscript>
<img src="http://pixel.quantserve.com/pixel/p-b5UDx6EsiRfMI.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
</noscript>
<!-- End Quantcast tag -->

<!-- ASA-15 -->
<!-- Begin comScore Inline Tag 1.1105.27 -->

<noscript>

</noscript>
    
    
        


</body>
</html>
