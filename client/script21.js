

$(document).ready(function(){
NextNews();
updateusers();

});

function updateusers()
{
setInterval(function(){
$("user").load("/public/loader/users.php", function(done){
var done = done;

if(done == '1')
{
$("desc").html('Smurf online');
} else {
$("desc").html('Smurfen online');
}

});

}, 10000);
}

function gotNews(id)
{
SelectNews(id);
}

var News = 0;

setInterval(function(){
NextNews()
}, 15000);


function NextNews()
{
News++;
if(News > 5)
{
News = 1;
}
SelectNews(News);
}


function SelectNews(id)
{
var id = id;

switch(id)
{

    case 1:
    $(".news").css("background-image", "url('/public/images/news/wm_football.png')");
    $(".news .beschreibung").html("<a class='weiterlesen' href='/nieuws!182'>Lees meer...</a>WK Voetbal Funny-Hotel 2.0");
    break;

    case 2:
    $(".news").css("background-image", "url('/public/images/news/stories_football_wcroomrally_wk2_promo.png')");
    $(".news .beschreibung").html("<a class='weiterlesen' href='/nieuws!180'>Lees meer...</a>Kamer van de week! #3");
    break;

    case 3:
    $(".news").css("background-image", "url('/public/images/news/12.png')");
    $(".news .beschreibung").html("<a class='weiterlesen' href='/nieuws!179'>Lees meer...</a>Wie zijn de nieuwe Eventers?!");
    break;

    case 4:
    $(".news").css("background-image", "url('/public/images/news/promo_us_confcup.png')");
    $(".news .beschreibung").html("<a class='weiterlesen' href='/nieuws!178'>Lees meer...</a>WK Pronostieken 2018!");
    break;

    case 5:
    $(".news").css("background-image", "url('/public/images/news/habbanados_vacation.png')");
    $(".news .beschreibung").html("<a class='weiterlesen' href='/nieuws!177'>Lees meer...</a>Look van de week! #4");
    break;

    case 6:
    $(".news").css("background-image", "url('/public/images/news/110.png')");
    $(".news .beschreibung").html("<a class='weiterlesen' href='/nieuws!176'>Lees meer...</a>Kamer van de week! #2");
    break;

}

$("#box.select").removeClass("select");
$(".box_" + id).addClass("select");

News = id;
}


function goLink(link)
{
var link = link;
window.location=link;
}

    var habboReqPath = "";
    var zindex = '9999999';

    $(document).ready(function(e){
    //startWebsockets();
    updateBar('auto');
    setInterval(function() {
    updateBar('auto');
    }, 10000);

    //loadWaitScreen();
    loadClientbar();
    loadClient();
    loadOtherfunctions();


    });

    function loadOtherfunctions()
    {
    // $("#client-ui").append("<div id='WindowsFensters'></div>");
    }

    function loadWaitScreen()
    {
    $("#client-ui").append("<div id='login'></div>");
    $("#login").load("/public/loader/client/login.php?");
    }

    function loadClientbar()
    {
    $("#client-ui").append("<div id='bar'></div>");
    $("#bar").append("<counter class='tab' ></counter>");
    $("#bar").append("<div class='add'></div>");
    $("#bar").append("<div class='tab more' onClick='Naviaction()'></div>");


    $("#client-ui").append("<div id='navi' class='navi'></div>");

                
            
        
        
    
    
    $(".navi").append("<div class='liste vollbild' onclick='vollbild()'>Volledig scherm</div>");
	 $(".navi").append("<div class='liste vollbild' onclick='smurfwood()'>Smurfwood</div>");
    $(".navi").append("<div class='liste logout bottom' onclick='loguit()'><font color='#990000'><b>Afmelden</b></font></div>");
	
    }




    function htmlEntities(str) {
    return String(str).replace(/&/g, '&amp;').replace(/"/g, '&quot;').replace('Ö', '&Ouml;').replace('Ü', '&Uuml;').replace('Ä', '&Auml;').replace('ö', '&ouml;').replace('ü', '&uuml;').replace('ä', '&auml;').replace('ß', '&szlig;').replace(' ', '&nbsp;');
    }


    function startWebsockets()
    {
		
            window.ws = new ReconnectingWebSocket('https://smurfhotel.nl/client');
    



    ws.onopen = function(event) {
    console.log('Websocket wordt opgestart');
    ws.send("1|");
    console.log('Connectie toegestaan met Websocket');
    };

    ws.onclose = function(event) {
    console.log('Websocket CLOSED: ', event);
    };

    ws.onmessage = function(event) {
    msg = event.data;
    console.log('Socket: ' + msg);
    var text = msg.split('|');


    switch(text[0])	
    {
    case '2':
    var autor = text[1];
    var text = text[2];

    var fid = Math.floor((Math.random() * 155) + 1);

    var leftpos = ($(window).width()/2)-150;
    var toppos = ($(window).height()/2)-200;
    $("#client-ui").append("<div id='Fenster-Alert-" + fid + "' class='alert' onClick='makezindex(\"Alert-" + fid + "\")' style='position: absolute;width: 300px;min-height: 100px;left: " + leftpos + "px;'></div>");
    $("#Fenster-Alert-" + fid).html('<div class="head"><div class="close" onclick="$(\'#Fenster-Alert-' + fid + '\').remove()"></div>Hotelalert</div><div style="color: #000;padding: 10px;font-size: 14px;font-family: Ubuntu;font-weight: lighter;"><img src="/public/images/client/cha/icon.gif" align="left" style="margin-right: 10px;">' + htmlEntities(text) + '</div>').draggable({ containment: '#client-ui' });
    break;

    case '3':
    var gemeldet = text[1];
    var melder = text[2];	

    var fid = Math.floor((Math.random() * 155) + 1);

    var leftpos = ($(window).width()/2)-150;
    var toppos = ($(window).height()/2)-200;
    $("#client-ui").append("<div id='Fenster-Alert-" + fid + "' class='alert' onClick='makezindex(\"Alert-" + fid + "\")' style='position: absolute;width: 300px;min-height: 100px;top: " + toppos +"px;left: " + leftpos + "px;'></div>");
    $("#Fenster-Alert-" + fid).html('<div class="head"><div class="close" onclick="$(\'#Fenster-Alert-' + fid + '\').remove()"></div>Staffalert</div><div style="color: #000;padding: 10px;font-size: 14px;font-family: Ubuntu;font-weight: lighter;"><img src="/public/images/client/cha/icon.gif" align="left" style="margin-right: 10px;"><b>' + htmlEntities(gemeldet) + '</b> wurde von <b>' + htmlEntities(melder) + '</b> gemeldet. Bitte pr�fe diese Angelegenheit.</div>').draggable({ containment: '#client-ui' });
    break;

    case '4':
    openWindow("Bank", "450", "255");
    break;

    case '5':
    var name = text[1];
    var leiter = text[2];
    var id = text[3];
    
    var fid = Math.floor((Math.random() * 155) + 1);

    var leftpos = ($(window).width()/2)-150;
    var toppos = ($(window).height()/2)-200;
    // $("#client-ui").append("<div id='Fenster-Alert-" + fid + "' class='alert' onClick='makezindex(\"Alert-" + fid + "\")' style='position: absolute;width: 330px;min-height: 180px;top: " + toppos +"px;left: " + leftpos + "px;'></div>");
    // $("#Fenster-Alert-" + fid).html('<div class="head"><div class="close" onclick="$(\'#Fenster-Alert-' + fid + '\').remove()"></div>Eventstart</div><div style="color: #000;padding: 10px;font-size: 14px;font-family: Ubuntu;font-weight: lighter;"><img src="/public/images/client/alert.gif" align="right">Es Startet nun das Event<br><b>' + htmlEntities(name) + '</b><br>im Raum von ' + leiter + '<div class="input" onClick="goRoomEvent(\'' + id + '\', \'' + fid + '\')" style="margin-top: 20px;text-align: center;width: 180px;padding: 2px 0px 3px 0px;border: 2px solid black;float: left;border-radius: 4px;font-family: Ubuntu;font-weight: bold;font-size: 14px;color: black;cursor: pointer;background: #FFFFFF;background: -moz-linear-gradient(#FFFFFF 50%, #CCCCCC 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(50%,#FFFFFF), color-stop(100%,#CCCCCC));background: -webkit-linear-gradient(#FFFFFF 50%, #CCCCCC 100%);background: -o-linear-gradient(#FFFFFF 50%, #CCCCCC 100%);background: -ms-linear-gradient(#FFFFFF 50%, #CCCCCC 100%);background: linear-gradient(to bottom, #FFFFFF 0%,#FFFFFF 50%,#CCCCCC 51%,#CCCCCC 100%);box-shadow: inset 0px 0px 0px 0.7px #FFFFFF;box-shadow: 0px 1px 0px 0px black;">Eventraum betreten</div></div>').draggable({ containment: '#client-ui' });

    $("#client-ui").append("<div id='Fenster-Alert-" + fid + "' class='eventalert' onClick='makezindex(\"Alert-" + fid + "\")' style='position: absolute;top: " + toppos +"px;left: " + leftpos + "px;'></div>");
    $("#Fenster-Alert-" + fid).html('<div class="head"><div class="close" onclick="$(\'#Fenster-Alert-' + fid + '\').remove()"></div>Event Alert</div><div class="inner">Es findet nun das Event <b>' + htmlEntities(name) + '</b> im Raum von <b>' + leiter + '</b> statt!</div><div class="goroom" onClick="goRoomEvent(\'' + id + '\', \'' + fid + '\')">Eventraum betreten</div><img src="/public/images/frank/5.png" style="margin-top: -22px;"><div style="display: none;"><audio controls autoplay><source src="/public/sounds/eventstart.mp3" type="audio/mpeg"></audio></div>').draggable({ containment: '#client-ui' });
    break;

    case '7':
    var itemid = text[1];
    var hoehe = text[2];
    openStapelFelder(itemid, hoehe);

    break;

    case '8':
    openYTPlayer();
    break;

    case '9':
    var itemid = text[1];
    var handitem = text[2];

    if($("#Fenster-Wireduserhashanditem").size())
    {
    $("#Fenster-Wireduserhashanditem").remove();
    } else {

    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));

    $("#client-ui").append("<div id='Fenster-Wireduserhashanditem' class='alert' onClick='makezindex(\"Wireduserhashanditem\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 280px;'></div>");
    $("#Fenster-Wireduserhashanditem").load("/public/loader/client/loadPage.php?page=Wireduserhashanditem&itemid=" + itemid + "&handitem=" + handitem).draggable({ containment: '#client-ui' });
    }

    break;

    case '11':
    var itemid = text[1];
    var team = text[2];

    if($("#Fenster-Wiredteammitglied").size())
    {
    $("#Fenster-Wiredteammitglied").remove();
    } else {

    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));

    $("#client-ui").append("<div id='Fenster-Wiredteammitglied' class='alert' onClick='makezindex(\"Wiredteammitglied\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 245px;'></div>");
    $("#Fenster-Wiredteammitglied").load("/public/loader/client/loadPage.php?page=Wiredteammitglied&itemid=" + itemid + "&team=" + team).draggable({ containment: '#client-ui' });
    }

    break;

    case '13':
    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));

    if($("#Fenster-handitems").size())
    {
    $("#Fenster-handitems").remove();
    } else {
    $("#client-ui").append("<div id='Fenster-handitems' class='alert' onClick='makezindex(\"handitems\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 230px;'></div>");
    $("#Fenster-handitems").load("/public/loader/client/loadPage.php?page=handitems").draggable({ containment: '#client-ui' });


    }
    break;

    case '15':
    var itemid = text[1];
    var team = text[2];

    if($("#Fenster-Wirednegativeteammitglied").size())
    {
    $("#Fenster-Wirednegativeteammitglied").remove();
    } else {

    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));

    $("#client-ui").append("<div id='Fenster-Wirednegativeteammitglied' class='alert' onClick='makezindex(\"Wirednegativeteammitglied\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 245px;'></div>");
    $("#Fenster-Wirednegativeteammitglied").load("/public/loader/client/loadPage.php?page=Wirednegativeteammitglied&itemid=" + itemid + "&team=" + team).draggable({ containment: '#client-ui' });
    }
    break;

    case '17':
    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));
    var itemid = text[1];
    var imageurl = text[2];
    var offsetX = text[3];
    var offsetY = text[4];
    var offsetZ = text[5];

    if($("#Fenster-Roomads-" + itemid).size())
    {
    $("#Fenster-Roomads-" + itemid).remove();
    } else {
    $("#client-ui").append("<div id='Fenster-Roomads-" + itemid + "' class='alert' onClick='makezindex(\"Roomads-" + itemid + "\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 430px;'></div>");
    $("#Fenster-Roomads-" + itemid).load("/public/loader/client/loadPage.php?page=Roomads&itemid=" + itemid +"&imageurl=" + imageurl +"&offsetX=" + offsetX + "&offsetY=" + offsetY + "&offsetZ=" + offsetZ).draggable({ containment: '#client-ui' });

    }
    break;

    case '19':
    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));
    var itemid = text[1];
    var badgecode = text[2];

    if($("#Fenster-Badgevitrine-" + itemid).size())
    {
    $("#Fenster-Badgevitrine-" + itemid).remove();
    } else {
    $("#client-ui").append("<div id='Fenster-Badgevitrine-" + itemid + "' class='eventalert' onClick='makezindex(\"Badgevitrine-" + itemid + "\")' style='position: absolute;top: " + top +"px;left: " + left + "px;width: 270px;height: 170px;'></div>");
    $("#Fenster-Badgevitrine-" + itemid).load("/public/loader/client/loadPage.php?page=Badgevitrine&itemid=" + itemid + "&badgecode=" + badgecode).draggable({ containment: '#client-ui' });

    }

    break;

    case '20':
    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));
    var itemid = text[1];
    var botname = text[2];
    var time = text[3];


    if($("#Fenster-WiredBotfolgtuser").size())
    {
    $("#Fenster-WiredBotfolgtuser").remove();
    } else {

    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));

    $("#client-ui").append("<div id='Fenster-WiredBotfolgtuser' class='alert' onClick='makezindex(\"WiredBotfolgtuser\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 330px;'></div>");
    $("#Fenster-WiredBotfolgtuser").load("/public/loader/client/loadPage.php?page=WiredBotfolgtuser&itemid=" + itemid + "&botname=" + botname + "&time=" + time).draggable({ containment: '#client-ui' });
    }


    break;

    case '22':
    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));
    var itemid = text[1];
    var botname = text[3];
    var handitem = text[2];


    if($("#Fenster-WiredBotgibthanditem").size())
    {
    $("#Fenster-WiredBotgibthanditem").remove();
    } else {


    $("#client-ui").append("<div id='Fenster-WiredBotgibthanditem' class='alert' onClick='makezindex(\"WiredBotfolgtuser\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 410px;'></div>");
    $("#Fenster-WiredBotgibthanditem").load("/public/loader/client/loadPage.php?page=WiredBotgibthanditem&itemid=" + itemid + "&botname=" + botname + "&handitem=" + handitem).draggable({ containment: '#client-ui' });
    }


    break;

    case '24':
    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));
    var itemid = text[1];
    var botname = text[3];
    var mode = text[2];
    var say = btoa(text[4]);



    if($("#Fenster-WiredBotsaytoallusers").size())
    {
    $("#Fenster-WiredBotsaytoallusers").remove();
    } else {


    $("#client-ui").append("<div id='Fenster-WiredBotsaytoallusers' class='alert' onClick='makezindex(\"WiredBotsaytoallusers\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 390px;'></div>");
    $("#Fenster-WiredBotsaytoallusers").load("/public/loader/client/loadPage.php?page=WiredBotsaytoallusers&itemid=" + itemid + "&botname=" + botname + "&say=" + say + "&mode=" + mode).draggable({ containment: '#client-ui' });
    }

    break;


    case '25':
    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));
    var itemid = text[1];
    var type = text[2];
    var botname = text[3];
    var say = btoa(text[4]);

    if($("#Fenster-WiredBotsaytousers").size())
    {
    $("#Fenster-WiredBotsaytousers").remove();
    } else {


    $("#client-ui").append("<div id='Fenster-WiredBotsaytousers' class='alert' onClick='makezindex(\"WiredBotsaytousers\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 360px;'></div>");
    $("#Fenster-WiredBotsaytousers").load("/public/loader/client/loadPage.php?page=WiredBotsaytousers&itemid=" + itemid + "&botname=" + botname + "&say=" + say + "&type=" + type).draggable({ containment: '#client-ui' });
    }

    break;

    case '27':
    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));
    var itemid = text[1];
    var botname = text[2];
    var look = text[3];
    var gender = text[4];

    if($("#Fenster-WiredBotchangelook").size())
    {
    $("#Fenster-WiredBotchangelook").remove();
    } else {


    $("#client-ui").append("<div id='Fenster-WiredBotchangelook' class='alert' onClick='makezindex(\"WiredBotchangelook\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 360px;'></div>");
    $("#Fenster-WiredBotchangelook").load("/public/loader/client/loadPage.php?page=WiredBotchangelook&itemid=" + itemid + "&botname=" + botname + "&look=" + look + "&gender=" + gender).draggable({ containment: '#client-ui' });
    }


    break;

    case '29':
    openWindow("Flappybird", "650", "450");
    break;
	
    case '40':
    openWindow("Soccer", "650", "450");
    break;
	
    case '41':
    openWindow("Doolhof", "650", "450");
    break;
	
    case '42':
    openWindow("Duck", "650", "450");
    break;
	
    case '43':
    openWindow("Freeze", "650", "450");
    break;
	
    case '50':
    openWindow("Gameboard", "350", "300");
    break;

    case '30':
    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));
    if($("#Fenster-Commands").size())
    {
    $("#Fenster-Commands").remove();
    } else {
    $("#client-ui").append("<div id='Fenster-Commands' class='alert' onClick='makezindex(\"Commands\")' style='left: " + left + "px;top: " + top + "px;width: 500px;height: 500px;'></div>");
    $("#Fenster-Commands").load("/public/loader/client/loadPage.php?page=Commands").draggable({ containment: '#client-ui' });
    }
    break;
	
    case '31':
    if(msg !== '31')
    {

    var itemid = text[1];
    var youtubevideo = text[2];
    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(270/2));
    if($("#Fenster-WiredYoutubeplayerSettings").size())
    {
    $("#Fenster-WiredYoutubeplayerSettings").remove();
    } else {
    $("#client-ui").append("<div id='Fenster-WiredYoutubeplayerSettings' class='alert' onClick='makezindex(\"WiredYoutubeplayerSettings\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 270px;'></div>");
    $("#Fenster-WiredYoutubeplayerSettings").load("/public/loader/client/loadPage.php?page=WiredYoutubeplayerSettings&itemid=" + itemid + "&youtubevideo=" + youtubevideo).draggable({ containment: '#client-ui' });
    }
    } else {

    var left = (($(window).width()/2)-(1210/2));
    var top = (($(window).height()/2)-(700/2));
    if($("#Fenster-WiredYoutubeplayerSettings").size())

    {
    $("#Fenster-Agario").remove();
    } else {
    $("#client-ui").append("<div id='Fenster-Agario' class='alert' onClick='makezindex(\"Agario\")' style='left: " + left + "px;top: " + top + "px;width: 1210px;height: 700px;'></div>");
    $("#Fenster-Agario").load("/public/loader/client/loadPage.php?page=Agario").draggable({ containment: '#client-ui' });
    }

    }

    break;

    case '32':
    var youtubevideo = text[1];
    var left = (($(window).width()/2)-(500/2));
    var top = (($(window).height()/2)-(450/2));
    if($("#Fenster-WiredYoutubeplayer").size())
    {
    $("#Fenster-WiredYoutubeplayer").remove();
    } else {
    $("#client-ui").append("<div id='Fenster-WiredYoutubeplayer' class='alert' onClick='makezindex(\"WiredYoutubeplayer\")' style='left: " + left + "px;top: " + top + "px;width: 500px;height: 450px;'></div>");
    $("#Fenster-WiredYoutubeplayer").load("/public/loader/client/loadPage.php?page=WiredYoutubeplayer&youtubevideo=" + youtubevideo).draggable({ containment: '#client-ui' });
    }
    break;

    case '33':
    var itemid = text[1];
    var waehrung = text[2];
    var anzahl = text[3];
    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));

    if($("#Fenster-WiredWaehrung").size())
    {
    $("#Fenster-WiredWaehrung").remove();
    } else {

    $("#client-ui").append("<div id='Fenster-WiredWaehrung' class='alert' onClick='makezindex(\"WiredWaehrung\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 360px;'></div>");
    $("#Fenster-WiredWaehrung").load("/public/loader/client/loadPage.php?page=WiredWaehrung&itemid=" + itemid + "&waehrung=" + waehrung + "&anzahl=" + anzahl).draggable({ containment: '#client-ui' });
    }

    break;

    case '34':
    var itemid = text[1];
    var waehrung = text[2];
    var anzahl = text[3];
    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));

    if($("#Fenster-WiredWaehrungN").size())
    {
    $("#Fenster-WiredWaehrungN").remove();
    } else {

    $("#client-ui").append("<div id='Fenster-WiredWaehrungN' class='alert' onClick='makezindex(\"WiredWaehrungN\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 360px;'></div>");
    $("#Fenster-WiredWaehrungN").load("/public/loader/client/loadPage.php?page=WiredWaehrungN&itemid=" + itemid + "&waehrung=" + waehrung + "&anzahl=" + anzahl).draggable({ containment: '#client-ui' });
    }

    break;

    case '37':
    // OPEN SETTINGS
    var itemid = text[1];
    var url = text[2];
    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(270/2));
    if($("#Fenster-WiredImageSettings").size())
    {
    $("#Fenster-WiredImageSettings").remove();
    } else {
    $("#client-ui").append("<div id='Fenster-WiredImageSettings' class='alert' onClick='makezindex(\"WiredImageSettings\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 270px;'></div>");
    $("#Fenster-WiredImageSettings").load("/public/loader/client/loadPage.php?page=WiredImageSettings&itemid=" + itemid + "&ur=" + url).draggable({ containment: '#client-ui' });
    }
    break;

    case '39':
    var url = text[1];
    showimage20(url);

    break;
    }



    };

    ws.onerror = function(event) {
    console.log('Websocket ERROR:', event);
    };

    }

    function goRoomEvent(roomid, alertid)
    {
    var roomid = roomid;	
    var alertid = alertid;

    $("#Fenster-Alert-" + alertid).remove();

    ws.send("6|" + roomid);
    }

    function updateBar(type)
    {
    if(type !== 'auto')
    {
    $("counter").fadeOut(2000);
    }

    $.post("https://smurfhotel.nl/onlinecounter", { username: 'Gast' })
    .done(function(done){
    var done = done;
    var getOnline = done.substring(0, 3);
    var geteventaktuell = done.substring(3, 4);
    var getradio = done.substring(4,5);
    var getMitarbeiter = done.substring(5,6);
    var getnewNews = done.substring(6,7);
    var getownRoom = done.substring(7,8);
    var newImage = done.substring(8,9);
    var getReladWS = done.substring(9, 10);


    // ONLINECOUNTER

    if(getOnline.substring(0, 1) == '0')
    {
    if(getOnline.substring(0,2) == '00')
    {
    getOnline = getOnline.substring(2,3);
    } else {
    getOnline = getOnline.substring(1,3);
    }
    }

    if(getOnline == '1')
    {
    $("counter").html('<b>' + getOnline + '</b> Smurf Online').fadeIn();
    } else {
    $("counter").html('<b>' + getOnline + '</b> Smurfen Online').fadeIn();
    }




    // RADIO PLAYER

    if(getradio == '1')
    {
    if($(".radio").size())
    {

    } else {
    $(".add").append('<div class="tab radio"><div id="radiocont" style="float: left;"></div><div onClick="Grussbox()" style="float: left;background: url(/public/images/client/radio/mail.gif);margin-left: 5px;margin-top: 3px;width: 19px;height: 17px;"></div><script type="text/javascript" src="https://www.shoutcheap.com/flashplayer/skins/swfobject.js"></script><script type="text/javascript">var s1 = new SWFObject("https://www.shoutcheap.com/flashplayer/skins/player.swf", "player", "250", "15", "9", "#FFFFFF"); s1.addParam("allowfullscreen", "true"); s1.addParam("allowscriptaccess", "always"); s1.addParam("flashvars", "skin=https://www.shoutcheap.com/flashplayer/skins/nacht.swf&title=Live Stream&type=sound&file=https://radio.funnyy.nl/live"); s1.write("radiocont");</script></div>');
    $(".radio").fadeIn(5000);
    }

    } else {
    if($(".radio").size())
    {
    $(".radio").fadeOut('5000', function(){
    $(this).remove();
    });

    if($("#Fenster-Grussbox").size())
    {
    $("#Fenster-Grussbox").fadeOut('5000', function(){
    $(this).remove();
    });
    }
    }
    }

        if(getownRoom == '1')
    {

    if($('.myroomtools').size())
    {

    } else {
    // $(".add").append("<div class='tab myroomtools' onClick='myroom()'>kamer tools</div>");
    // $("#client-ui").append("<div id='navi' class='myroomnavi'></div>");
    // $(".myroomnavi").append("<div class='liste umfragen' onclick='openWindow(\"Umfragen\", \"450\", \"350\")'>Umfragen</div>");
    // $(".myroomnavi").append("<div class='liste raumbgs bottom' onclick='openWindow(\"Roombg\", \"450\", \"350\")'>Kamer achtergrond</div>");
    }

    } else {
    if($('.myroomtools').size())
    {
    $("#Fenster-Botpanel").remove();
    $("#Fenster-Umfragen").remove();
    $(".myroomtools").remove();
    $(".myroomnavi").remove();
    }		
    }

    if(newImage == '1')
    {
    var fid = Math.floor((Math.random() * 155) + 1);

    var leftpos = ($(window).width()/2);
    var toppos = ($(window).height()/2);
    $("#client-ui").append("<div id='Fenster-Alert-" + fid + "' class='imagee' onClick='makezindex(\"Alert-" + fid + "\")' style='position: absolute;min-width: 5px;min-height: 5px;'></div>");
    $("#Fenster-Alert-" + fid).load("/public/loader/client/image/load.php?id=Fenster-Alert-" + fid).draggable({ containment: '#client-ui' });
    }

    if(getReladWS == '0')
    {

    }



    });
    }

    function Grussbox()
    {
    if($("#Fenster-Grussbox").size())
    {
    $("#Fenster-Grussbox").remove();
    } else {
    var left = (($(window).width()/2)-170);
    var top = (($(window).height()/2)-230);

    $("#client-ui").append("<div id='Fenster-Grussbox' class='alert' onClick='makezindex(\"Grussbox\")' style='left: " + left + "px;top: " + top + "px;width: 341px;height: 363px;'></div>");
    $("#Fenster-Grussbox").load("/public/loader/client/loadPage.php?page=Grussbox").draggable({ containment: '#client-ui' });
    }

    }

    function openKamera()
    {
    if($("#Fenster-Kamera").size())
    {
    $("#Fenster-Kamera").remove();
    } else {
    var left = (($(window).width()/2)-170);
    var top = (($(window).height()/2)-230);

    $("#client-ui").append("<div id='Fenster-Kamera' style='left: " + left + "px;top: " + top + "px;width: 341px;height: 463px;'></div>");
    $("#Fenster-Kamera").load("/public/loader/client/loadPage.php?page=Kamera").draggable({ containment: '#client-ui' });
    }

    }

    function openYTPlayer()
    {

    if($("#Fenster-Youtube").size())
    {
    $("#Fenster-Youtube").remove();
    } else {
    var left = (($(window).width()/2)-390);
    var top = (($(window).height()/2)-168);
    $("#client-ui").append('<div id="Fenster-Youtube" onClick="makezindex(\'Youtube\')" class="alert" style="left: ' + left + 'px;top: ' + top + 'px;background: #E9E9E1;width: 780px;height: 356px;"></div>');
    $("#Fenster-Youtube").load("/public/loader/client/Youtube/Page.php").draggable({ containment: '#client-ui' });
    }


    }

    function openWindow(fenster, width, height)
    {
    if($("#Fenster-" + fenster).size())
    {
    $("#Fenster-" + fenster).remove();
    } else {

    var left = (($(window).width()/2)-(width/2));
    var top = (($(window).height()/2)-(height/2));

    $("#client-ui").append("<div id='Fenster-" + fenster + "' class='alert' onClick='makezindex(\"" + fenster + "\")' style='left: " + left + "px;top: " + top + "px;width: " + width + "px;height: " + height + "px;'></div>");
    $("#Fenster-" + fenster).load("/public/loader/client/loadPage.php?page=" + fenster).draggable({ containment: '#client-ui' });


    }
    }

    function makezindex(fenster)
    {
    if($("#Fenster-" + fenster).size())
    {
    zindex++;
    $("#Fenster-" + fenster).css('z-index', zindex);
    }
    }

    function Naviaction()
    {
    if(($('#navi').css('display') == 'none'))
    {
    $("#navi").fadeIn();
    } else {
    $("#navi").fadeOut();
    }

    if(($('.myroomnavi').css('display') !== 'none'))
    {
    $(".myroomnavi").fadeOut();
    }
    }

    function showimage20(url)
    {
    var url = url;

    $.post("https://cdn.funnyy.nl/habbo-imaging/image.php", {url: url})
    .done(function(data)
    {
    var data = data.split('|');

    var width = data[0];
    var height = data[1];


    var leftpos = (($(window).width()/2)-(width/2));
    var toppos = (($(window).height()/2)-(height/2));
    $("#Fenster-WiredIMAGE").remove();
    $("#client-ui").append("<div id='Fenster-WiredIMAGE' class='alert' onclick='$(\"#Fenster-WiredIMAGE\").remove()' style='cursor: pointer;border: 0px;position: absolute;left: " + leftpos + "px;top: " + toppos + "px;width:" + width + "px;height: " + height + "px;'></div>");
    $("#Fenster-WiredIMAGE").css('background', 'url(' + url+ ') 100% 100% no-repeat').draggable({ containment: '#client-ui' });




    });
    }
        	

        function openUserProfile(id)
        {
        var id = id;

        if($("#Fenster-user" + id).size())
        {
        $("#Fenster-user" + id).remove();
        } else {

        var left = (($(window).width()/2)-(510/2));
        var top = (($(window).height()/2)-(310/2));

        $("#client-ui").append("<div id='Fenster-user" + id + "' class='alert' onClick='makezindex(\"user" + id + "\")' style='left: " + left + "px;top: " + top + "px;width: 510px;height: 310px;'></div>");
        $("#Fenster-user" + id).load("/public/loader/client/loadPage.php?page=UserProfile&id=" + id).draggable({ containment: '#client-ui' });
        }
        }

    function openStapelFelder(itemid, hoehe)
    {
    var itemid = itemid;
    var hoehe = hoehe;

    if($("#Fenster-Stapelfelder").size())
    {
    $("#Fenster-Stapelfelder").remove();
    } else {

    var left = (($(window).width()/2)-(350/2));
    var top = (($(window).height()/2)-(250/2));

    $("#client-ui").append("<div id='Fenster-Stapelfelder' class='alert' onClick='makezindex(\"Stapelfelder\")' style='left: " + left + "px;top: " + top + "px;width: 350px;height: 250px;'></div>");
    $("#Fenster-Stapelfelder").load("/public/loader/client/loadPage.php?page=Stapelfelder&itemid=" + itemid + "&hoehe=" + hoehe).draggable({ containment: '#client-ui' });
    }
    }

    function myroom()
    {
    if(($('.myroomnavi').css('display') == 'none'))
    {
    $(".myroomnavi").fadeIn();
    } else {
    $(".myroomnavi").fadeOut();
    }

    if(($('#navi').css('display') !== 'none'))
    {
    $("#navi").fadeOut();
    }
    }

    function vollbild() {
    if ((document.fullScreenElement && document.fullScreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)){
    if (document.documentElement.requestFullScreen){  
    document.documentElement.requestFullScreen();  
    } else if(document.documentElement.mozRequestFullScreen){  
    document.documentElement.mozRequestFullScreen();  
    } else if (document.documentElement.webkitRequestFullScreen){  
    document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
    }  
    } else {  
    if (document.cancelFullScreen){  
    document.cancelFullScreen();  
    } else if (document.mozCancelFullScreen) {  
    document.mozCancelFullScreen();  
    } else if (document.webkitCancelFullScreen) {  
    document.webkitCancelFullScreen();  
    }  
    }  
    } 
	
	function loguit() {
alert("Je word nu uitgelogt!");
location.href = "https://smurfhotel.nl/logout";
    } 
	function smurfwood() {
window.open('https://smurfwood.smurfhotel.nl', '_blank');
}
