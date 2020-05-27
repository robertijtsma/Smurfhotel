<?php
header('Content-Type: image/png');
define("host", "localhost");
define("username", "root");
define("password", "PASSWORD");
define("database", "DB");
$map = './avatars';
define("hotel", "habbo.nl");
    mysql_connect(host, username, password) or die ('Wrong username or password, or simply host.');
    mysql_select_db(database) or die ('Cannot connect to database.');
 
 
 
if (!is_dir($map))
    {
        if (!mkdir($map, 0, true))
            {
                die('Unable to create directory.');
            }
    }
 
   
$figure = $_GET['figure'];
 
if(isset($_GET['size'])){
$size = $_GET['size'];
} else {
$size= 'b';
}
 
if(isset($_GET['direction'])){
$direction = $_GET['direction'];
} else {
$direction = '2';
}
 
if(isset($_GET['head_direction'])){
$head = $_GET['head_direction'];
} else {
$head = '2';
}

if(isset($_GET['action'])){
$action = $_GET['actionn'];
} else {
$head = 'sit';
}
 
if(isset($_GET['gesture'])){
$gesture = $_GET['gesture'];
} else {
$gesture = '';
}
 
$lookhash = md5("$figure$size$action$direction$head$gesture");
 
 
if (file_exists("$map/$lookhash.png")) {
    $finalavatar = require("$map/$lookhash.png");
   
} else {
    $habbo = file_get_contents("http://".hotel."/habbo-imaging/avatarimage?figure=".$figure."&size=".$size."action".$action."&direction=".$direction."&head_direction=".$head."&gesture=".$gesture."");
    $fp = fopen("$map/$lookhash.png", 'w');
    fwrite($fp, $habbo);
    fclose($fp);
    $finalavatar = $habbo;
}
echo $finalavatar;
?>