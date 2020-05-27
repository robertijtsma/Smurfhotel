<?php
// Original code credit to Edward on Ragezone/Devbest
// Do not remove these credits

require_once 'config.php';

$user = mysql_real_escape_string($_GET['user']);

$result = mysql_query("SELECT * FROM users WHERE username = '$user' ");
$row = mysql_fetch_array( $result );
$result2 = mysql_query("SELECT * FROM user_stats WHERE id = ". $row['id'] ." ");
$row2 = mysql_fetch_array( $result2 );

if($row['online'] == 1)
	$status = "Online";
else
	$status = "Offline";

if($row['rank'] == 1)
	$rank = "Normal Player";
if($row['rank'] == 2)
	$rank = "VIP";
if($row['rank'] == 3)
	$rank = "eXpert";
if($row['rank'] == 4)
	$rank = "Events";
if($row['rank'] == 5)
	$rank = "Events Manager";
if($row['rank'] == 6)
	$rank = "Trial Moderator";
if($row['rank'] == 7)
	$rank = "Moderator";
if($row['rank'] == 8)
	$rank = "Senior Moderator";
if($row['rank'] == 9)
	$rank = "Hotel Manager";
if($row['rank'] == 10)
	$rank = "Co Owner";
if($row['rank'] == 11)
$rank = "Owner";




$image = imagecreatefrompng('stats.png');
$black = imagecolorallocate($image, 0, 0, 0);

//Username
imagefttext($image, 8, 0, 103, 40, $black, './verdanab.ttf', "Username:");
imagefttext($image, 8, 0, 175, 40, $black, './verdanab.ttf', $row['username']);

//Credits
imagefttext($image, 8, 0, 103, 60, $black, './verdanab.ttf', "Credits:");
imagefttext($image, 8, 0, 175, 60, $black, './verdanab.ttf', $row['credits']);

//Pixels
imagefttext($image, 8, 0, 103, 80, $black, './verdanab.ttf', "Pixels:");
imagefttext($image, 8, 0, 175, 80, $black, './verdanab.ttf', $row['activity_points']);

//Respect
imagefttext($image, 8, 0, 103, 100, $black, './verdanab.ttf', "Respect:");
imagefttext($image, 8, 0, 175, 100, $black, './verdanab.ttf', $row2['Respect']);

//Rank
if($rank != "Normal Player")
{
	imagefttext($image, 8, 0, 103, 120, $black, './verdanab.ttf', "Rank:");
	imagefttext($image, 8, 0, 175, 120, $black, './verdanab.ttf', $rank);
}

//Status
imagefttext($image, 8, 0, 330, 40, $black, './verdanab.ttf', "Status:");
imagefttext($image, 8, 0, 410, 40, $black, './verdanab.ttf', $status);

//Created
$t=$row['account_created'];
$date = date("d-M-Y",$t);
//Created
imagefttext($image, 8, 0, 330, 60, $black, './verdanab.ttf', "Created:");
imagefttext($image, 8, 0, 410, 60, $black, './verdanab.ttf', $date  );

//Created
$l=$row['last_online'];
$ll = date("d-M h:i:s A",$l);
//Created
imagefttext($image, 8, 0, 330, 80, $black, './verdanab.ttf', "Last Online:");
imagefttext($image, 8, 0, 410, 80, $black, './verdanab.ttf', $ll);

//Credits - Leave this here please...
imagefttext($image, 6, 0, 120, 138, $black, './verdanab.ttf', "Habbam Hotel | The Best around!");

$look = $row['look'];

$insert = imagecreatefrompng('http://www.habbo.com/habbo-imaging/avatarimage?action=wav&figure=' . $row['look'] . ''); 
imagecolortransparent($insert,imagecolorat($insert,0,0));
$insert_x = imagesx($insert); 
$insert_y = imagesy($insert); 
imagecopymerge($image,$insert,25,10,0,0,$insert_x,$insert_y,100); 




header('Content-type: image/png');
imagepng($image);
imagepng($image, "./cache_banner.png");
imagedestroy($image);



?>
