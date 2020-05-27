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
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Smurf :: Client</title>
        <link rel="stylesheet" href="{url}/app/tpl/skins/habbo/styles/client.css" type="text/css">
        
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

					
					<style> body {
background-color: #212121;
} 

form {
position:absolute;
top:30%;
right:0;
left:0;
text-align: center;
}

select {
background-image: url('https://smurfhotel.nl/yokKfHN.png');
background-size: 150px 150px;
height: 160px;
width: 130px;
font-size: 50px;
text-indent: 40%;
color: orange;
border: none;
border-radius: 10px;
text-align: center
}

select:focus,
input:focus {
outline: none;
}

input {
color: orange;
background-color: transparent;
border: 1px solid orange;
height: 100px;
width: 100px;
border-radius: 100%;
font-size: 50px;

}

select:hover {
color: darkorange;
}

input:hover {
color: darkorange;
border: 1px solid darkorange;
}</style>
<?php $connect = mysql_connect("localhost", "root", 'GDTGYR455t4tg54%^$^$frt'); mysql_select_db("poppy123", $connect); $username = $_SESSION["user"]["username"]; $query = mysql_query("SELECT * FROM `users` WHERE `username` = '$username'"); if(mysql_num_rows($query) == 1) {
$row = mysql_fetch_assoc($query); $rank = $row["rank"]; if($rank >= 4 && !isset($_SESSION["correct_key"])) { ?>
<form action='spk' method='post'> <select name='first'> <option value='0'>0</option> <option value='1'>1</option> <option value='2'>2</option> <option value='3'>3</option> <option value='4'>4</option> <option value='5'>5</option> <option value='6'>6</option> <option value='7'>7</option> <option value='8'>8</option> <option value='9'>9</option> </select> <select name='second'> <option value='0'>0</option> <option value='1'>1</option> <option value='2'>2</option> <option value='3'>3</option> <option value='4'>4</option> <option value='5'>5</option> <option value='6'>6</option> <option value='7'>7</option> <option value='8'>8</option> <option value='9'>9</option> </select> <select name='third'> <option value='0'>0</option> <option value='1'>1</option> <option value='2'>2</option> <option value='3'>3</option> <option value='4'>4</option> <option value='5'>5</option> <option value='6'>6</option> <option value='7'>7</option> <option value='8'>8</option> <option value='9'>9</option> </select> <select name='fourth'> <option value='0'>0</option> <option value='1'>1</option> <option value='2'>2</option> <option value='3'>3</option> <option value='4'>4</option> <option value='5'>5</option> <option value='6'>6</option> <option value='7'>7</option> <option value='8'>8</option> <option value='9'>9</option> </select><br /> <input type='submit' name='staff_key' value='Go' /> </form> <?php exit; } }else { die("Sorry, something went wrong with your account, apparently you do not exist, please try logging in."); } ?>
</body></div>
					
    			<?php include('includes/checktheban.php'); ?>
    </body>
</html>

